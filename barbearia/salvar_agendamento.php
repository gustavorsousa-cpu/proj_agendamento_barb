<?php
include 'conexao.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$servico_id = $_POST['servico_id'];
$barbeiro_id = $_POST['barbeiro_id'];
$data = $_POST['data'];
$horario = $_POST['horario'];


$data_hora = $data . ' ' . $horario . ':00';

$verifica = mysqli_query($conn, "SELECT id FROM agendamentos 
    WHERE barbeiro_id = $barbeiro_id 
    AND data_hora = '$data_hora'");

if (mysqli_num_rows($verifica) > 0) {
    header('Location: agendar.php?erro=horario_ocupado');
    exit;
}


$sql = "INSERT INTO agendamentos (barbeiro_id, servico_id, cliente_nome, cliente_telefone, data_hora) 
        VALUES ($barbeiro_id, $servico_id, '$nome', '$telefone', '$data_hora')";

if (mysqli_query($conn, $sql)) {
    header('Location: confirmacao.php');
    exit;
} else {
    header('Location: agendar.php?erro=geral');
    exit;
}
?>