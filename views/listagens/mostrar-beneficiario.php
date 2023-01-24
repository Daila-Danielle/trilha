<!-- Tela que mostra os cadastros dos beneficiarios -->
<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">NOME</th>
        <th scope="col">DOCUMENTO</th>
        <th scope="col">CELULAR</th>
        <th scope="col">CIDADE</th>
        <th scope="col">SITUAÇÃO</th>
        <th scope="col">AÇÃO</th>
      </tr>
    </thead>
    <tbody>
    <?php
  $con = consulta_beneficiario();
  while($dado = $con->fetch_array()) { ?> 
      <tr> 
      <?php $dado["id"]; ?>
        <td ><?php echo $dado["nome"]; ?></td>
        <td ><?php echo $dado['documento']; ?></td> 
        <td ><?php echo $dado['celular']; ?></td> 
        <td ><?php echo $dado["cidade"]; ?></td>
        <td ><?php echo $dado["situacao"]; ?></td> 
        <td > 
          <button onclick="location.href='?pagina=ver_beneficiario&id=<?php print $dado['id']; ?>'"; class="btn-success">VER MAIS</button> 
        </td> 
      </tr> 
      <?php } ?> 
  </table> 
</div>