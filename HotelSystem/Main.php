<?php
include 'HotelRoom/RoomPrincipal.php';
include 'HotelRoom/NewRoom.php';

// Parâmetros default em HotelData
echo "Olá! Bem-vindo á recepção do Hotel\n";

echo "Por favor, digite seu nome: ";
$nome = readline();

echo "Agora, digite sua idade: ";
$idade = readline();

if($idade > 18){
    echo "Seu passaporte foi conferido com sucesso e foi criada uma reserva, aguarde.";
    sleep(3);
    Cadastro($nome,$idade);
    roomCustomize($nome);
} else {
    echo "Você não tem a idade mínima para realizar uma reserva.";
    exit();
}



