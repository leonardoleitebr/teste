<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
   <?php

include("conexao2.php");
print("<h2>Lista de Clientes</h2><br>");
print("<hr>");
$sql = "Select * from clientes";
$res = $conn->query($sql);
$qtde = $res->num_rows;
if ($qtde>0){
    print"<table class='table table-dark table-hover'>";
        print"<tr>";
        print"<th>id </th>";
        print"<th>nome</th>";
        print"<th>Endereco</th>";
        print"<th>cidade</th>";
        print"<th>uf</th>";
        print"<th>data_cadastro</th>";
        #incluir uma nova coluna
        print"<th> Acoes</th>";
        print "</tr>";
    while($row= $res->fetch_object()){
        print"<tr>";
        print"<td>".$row->id."</td>";
        print"<td>".$row->nome."</td>";
        print"<td>".$row->endereco."</td>";
        print"<td>".$row->cidade."</td>";
        print"<td>".$row->uf."</td>";
        print"<td>".$row->data_cadastro."</td>";
         #incluir uma nova coluna'
        print"<td> 
        <button class='btn btn-primary' onclick=location.href='atualizar.php?id=$row->id'>Atualizar</button>
       <button class='btn btn-danger' onclick=location.href='delete.php?id=$row->id'>Excluir</button>
        </td>"; 
        print "</tr>";
    } 
    print "</table>";
    }else{
        print"<p>Não foram encontrados registros!</p>";
    }
?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </div>

</body>
</html>
