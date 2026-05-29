<?php

include_once('conexao2.php');
$nome = $_POST['nome'];
$end = $_POST['endereco'];
$cidade = $_POST['cidade'];
$uf = $_POST['estado']; 
$sql = "INSERT INTO clientes (nome, endereco, cidade, uf, data_cadastro) 
VALUES ('{$nome}', '{$end}', '{$cidade}', '{$uf}', NOW())";
$resp = $conn->query($sql);


if ($resp == true){
    print "<script>alert('Cadastro efetuado com sucesso!!')</script>";
    print "<script>location.href='cadastro.html'</script>";
} else {
    print "<script>alert('Não foi cadaastrado! erro!!!')</script>";
    print "<script>location.href='cadastro.html'</script>";
}

?>