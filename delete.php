<?php
if (!empty($_GET['id'])){
    require('conexao2.php');
    $codigo = $_GET['id'];
    $sql = "select * from clientes where id=$codigo";
    $res = $conn->query($sql);

    if ($res->num_rows>0)
        {
        $sql2 = "delete from clientes where id=$codigo";
        $resultado = $conn->query($sql2);
        }
    } header ("Location:lista.php");

