<?php
include ("bootstrap.php");



   switch (@$_REQUEST["acao"]) {
       case 'cadastrar':
          $nome = $_POST["nome"];
          $email = $_POST["email"];
          $telefone = $_POST["telefone"];
          $servircos = $_POST["servirco"];
          $descricao = $_POST["descricao"];
       

          $sql = "INSERT INTO requerimentos (nome,servico,numero,email,descrição) VALUES('{$nome}','{$servircos}','{$telefone}', '{$email}','{$descricao}')";
         
             $res = $conn->query($sql);
            
       break;
       case 'excluir':
           $sql = "DELETE FROM requerimentos WHERE id=".$_REQUEST["id"];

           $res = $conn->query($sql);

                  if($res==true){
                  print "<script>alert('Excluído com sucesso');</script>";
                  print "<script>location.href='?page=lista.php';</script>";
                  }else{
                  print "<script>alert ('Não foi possível apagar');</script>";
                  print "<script>location.href='?page-lista.php';</script> ";
                  }
           break;
   }
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
     
<br>
<br>



            <div class="alert alert-success" style="height:2cm; width:35cm;margin-left:auto;margin-right:auto;">
    <strong>Sucesso!</strong>Seu pedido foi enviado!<a href="../index.html" class="alert-link">voltar para o início</a>.
 </div>
  </html>