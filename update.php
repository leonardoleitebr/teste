<?php
require ('conexao2.php');
if (isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $end = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['estado'];
    $data = $_POST['data_cadastro'];
    $sql = "update clientes set nome='$nome',endereco='$end',
    cidade='$cidade',uf='$uf',data_cadastro='$data' where id='$id'";
    $res = $conn->query($sql);
} header('Location:lista.php');




