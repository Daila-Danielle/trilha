<div class="table-responsive">


  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">NOME</th>
        <th scope="col">DOCUMENTO</th>
        <th scope="col">PLACA</th>
        <th scope="col">CHASSI</th>
        
        <th scope="col">MONTADORA</th>
        <th scope="col">MODELO</th>
        <th scope="col">SITUAÇÃO</th>
        <th scope="col">AÇÃO</th>
      </tr>
    </thead>
    <tbody>
    <?php
  $con = consulta_veiculo(); 
  while($dado = $con->fetch_array()) { ?> <!-- enquanto retornar dados da consulta exibe na tabela -->
      <tr> 
      <?php $dado["id"]; ?>
        <td><?php echo $dado["nome"]; ?></td>
        <td><?php echo $dado['documento']; ?></td> 
        <td class="centralizar"><?php echo $dado['placa']; ?></td> 
        <td class="centralizar"><?php echo $dado["chassi"]; ?></td>
        <td class="centralizar"><?php echo $dado['montadora']; ?></td> 
        <td class="centralizar"><?php echo $dado['modelo']; ?></td> 
        <td class="centralizar"><?php echo $dado["situacao"]; ?></td> 
      <td class="centralizar"> 
        <!-- o botão de editar redireciona para pagina de editar e pega o id do cadastro -->
          <button onclick="location.href='?pagina=editar_veiculo&id=<?php print $dado['id']; ?>'"; class="btn-success">Editar</button> 
        <!-- o botão de excluir faz uma confirmação se realmente deseja excluir se sim redireciona para acao de excluir -->
          <button onclick="if (confirm('Tem certeza que deseja excluir? \n(não será possivel recuperar esses cadastro após a exclusão)')){location.href='?pagina=salvar_veiculo&acao=excluir&id=<?php print $dado['id']; ?>'}else{false;} "; class="btn-danger">Excluir</button> 
        </td> 
      </tr> 
      <?php } ?> 
  </table> 
</div>

