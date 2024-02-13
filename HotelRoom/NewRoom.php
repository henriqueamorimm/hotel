<?php
function selectRandomRoom($roomDataArray) {
    $availableRooms = [];

    foreach ($roomDataArray['rooms'] as $room => $status) {
        if ($status === "ok") {
            $availableRooms[] = $room;
        }
    }

    if (count($availableRooms) > 0) {
        $randomRoom = $availableRooms[array_rand($availableRooms)];
        return $randomRoom;
    } else {
        echo "Desculpe, todos os quartos estão ocupados.\n";
        exit();
    }
}

function Cadastro($nome, $idade){
    $arquivoUser = 'HotelData/user.json';
$arquivoRoom = 'HotelData/Rooms.json';

if (file_exists($arquivoRoom)) {
   
    $roomData = file_get_contents($arquivoRoom);
    $roomDataArray = json_decode($roomData, true);

    $randomRoom = selectRandomRoom($roomDataArray);
    $roomDataArray['rooms'][$randomRoom] = "ocupado";
        
    $jsonRoomData = json_encode($roomDataArray);
    file_put_contents($arquivoRoom, $jsonRoomData);
    echo "\nQuarto selecionado: $randomRoom\n";
    $dadosUsuario = array(
        'nome' => $nome,
        'idade' => $idade,
        'room' => $randomRoom
    );
    
    $jsonDadosUsuario = json_encode($dadosUsuario);
    
    
    file_put_contents($arquivoUser, $jsonDadosUsuario);
    
} else {
    echo "Arquivo de quartos não encontrado.\n";
}
}

?>