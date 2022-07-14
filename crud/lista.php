


<h1 style="text-align: center;">Lista De Serviços</h1>
<a href="lista.php">
<button type="button"  class=" bg bg-success text-white">Atualizar</button></a>
<div class="container-fluid" style="width: 100%;">
<?php

include  ("salvar.php" );



   $sql = "SELECT *FROM requerimentos";

   $res = $conn->query($sql);

   $qtd = $res->num_rows;

   if($qtd > 0){
      print "<table class='table table-hover
               table-striped table-bordered'>";
               print "<tr>";
         print "<td>#</td>";
         print "<td>Nome </td>";
         print "<td>E-Mail</td>";
         print "<td>Telefone</td>";
         print "<td>Data</td>";
         print "<td>Serviço</td>";
         print "<td>Descrição</td>";
         print "<td>Ação</td>";

         print" </tr>";
while($row = $res->fetch_object()){
         print "<tr>";
         print "<td>" .$row->id. "</td>";
         print "<td>" .$row->nome." </td>";
         print "<td>" .$row->email. "</td>";
         print "<td>" .$row->numero. "</td>";
         print "<td>" .$row->data. "</td>";
         print "<td>" .$row->servico. "</td>";
         print "<td>" .$row->descrição. "</td>";
         print "<td>
        
         <button onclick=\"if(confirm( 'Tem certeza que deseja excluir?' )){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"class= 'btn btn-danger' >Excluir</button>
         </td>";
         print"</tr>";
 }
         print "</table>";
   }else{
print "<p class='alert alert-danger'>Não 
                  encontrou resultados!</p>";
}
?>
