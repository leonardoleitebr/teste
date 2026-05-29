<?php
if(!empty($_GET['id']))
   { 
    include('conexao2.php');
$codigo = $_GET['id'];
$sql = "select * from clientes where id=$codigo";
$res = $conn->query($sql);
if($res == true){
    while($row = mysqli_fetch_assoc($res))
{
    $nome = $row['nome'];
    $end = $row['endereco'];
    $cidade = $row['cidade'];
    $uf = $row['uf'];
    $data = $row['data_cadastro'];
}
}else{
    print "<script>alert('Registro nao localizado');</script>";
}}

    




?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="container">
<h2>Atualizar Usuário</h2>
<br><br>
<form class="row g-3" action="update.php" method="post">
    <div class="col-md-6">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>" >
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Endereco</label>
    <input type="text" class="form-control" name="endereco" value="<?php echo $end ?>">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Cidade</label>
    <input type="text" class="form-control" name="cidade" value="<?php echo $cidade ?>">
  </div>
 
  <div class="col-md-4">
    <label for="inputState" class="form-label">Estado</label>
    <select id="inputState" class="form-select" name="estado" value="<?php echo $uf ?>">
      <option selected>Escolha o estado:</option>
      <option>DF</option>
      <option>GO</option>
      <option>SP</option>
      <option>MG</option>
      <option>RJ</option>
    </select>
  </div>
     <div class="col-md-6">
    <label for="inputCity" class="form-label">Data de Cadastro</label>
    <input type="date" class="form-control" name="data_cadastro" value="<?php echo $data ?>">
  </div>
  <div class="col-12">
    <button type="reset" class="btn btn-danger">Limpar</button>
    <button type="submit" class="btn btn-primary" name='update' >Atualizar</button>
    <input type="hidden" name="id" value="<?php echo $codigo ?>">
  </div>
</form>
    </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>   
</body>
</html>
