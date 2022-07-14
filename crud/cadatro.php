



<main>

<form  action="?page=salva" method="POST" >
    <input type="hidden" name="acao" value="cadastrar">
      <div class="form-group">
        <label for="fname">Nome:</label><br>
        <input type="text" name="nome" id="fname" required class="form-control"><br><br>
    </div>

    <div class="form-group">
      <label for="fname">Email:</label><br>
      <input type="email" id="fname"  name="email" required class="form-control"><br><br>
  </div>

  <div class="form-group">
    <label for="fname">Telofone:</label><br>
    <input type="tel" id="fname"  name="telefone" required class="form-control"><br><br>
</div>

<div class="form-group">
  <label for="fname">SERVIÇOS:</label><br>
 
  <select  name="servirco" required class="form-control">
    <option>Selocione Serviço</option>
    <option > Manuteção e Montagem Industrial</option>
    <option >Fabricção e montagem de SPOOC'S </option>
    <option >Montagem de equipamentos </option>
    <option >Montagem de Estruturas Metalicas</option>
    <option > Montagem de Tubulações</option>
    <option >Caldeiraria, Fornos e Outros</option>
  </select>
</div>
<br>
<div class="form-group">
<label for="fname">Descrição do Serviço:</label><br>
<input type="tel" id="fname"  name="descricao" class="form-control" ><br><br>
</div>

 <button type="submit"> Enviar</button>
</form>


</div>
</main>