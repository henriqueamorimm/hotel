<?php
include 'HotelData/getData.php';

function roomCustomize($nome) {
    $arquivoRoom = 'HotelData/Rooms.json';
    system('cls');
    echo "$nome, o que deseja fazer?\n";
    
    echo "1 - Disponibilizar meu quarto e sair\n";
    echo "2 - Visualizar meu registro\n";

    $OptionChoosed = readline();

    if($OptionChoosed == 1) {
        $roomData = file_get_contents($arquivoRoom);
        $roomDataArray = json_decode($roomData, true);
    
        $room = getRoom();
        $roomDataArray['rooms'][$room] = "ok";
            
        $jsonRoomData = json_encode($roomDataArray);
        file_put_contents($arquivoRoom, $jsonRoomData);
        echo "Agradecemos por hospedar conosco.";
        exit();
    }
    if($OptionChoosed == 2){
        $idade = getIdade();
        $quarto = getRoom();
        echo "Claro, aqui está:";
        echo "\nNome: $nome";
        echo "\nIdade: $idade";
        echo "\nQuarto: $quarto";
        sleep(5);
        roomCustomize($nome);
        }
}

?>