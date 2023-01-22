<?php
include("./config/conexao.php");
# seleciona todos os dados do beneficiario para exibir em tela
    $sql = "SELECT * FROM beneficiarios
    WHERE   id = ".$_REQUEST["id"] ; 
    $res = $conexao->query($sql);
    $dado = $res->fetch_array();
?>
 
<form method="POST" action="?pagina=salvar_beneficiario">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="barraDivisoria"><b>DADOS DO BENEFICIÁRIO</b></div> 
    <hr>
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <label class="label">Nome</label>
            <input type="text" class="form-control editUpper" id="nome" name="nome" disabled value = "<?php echo $dado['nome']; ?>">
                                                                            <!-- desativado para não poder fazer edição e retorna o dado do bando de dados conforme o id -->
        </div>

        <div class="col-xs-12 col-sm-4">
            <label class="label">Documento (CPF/CNPJ)</label>
            <input type="text" class="form-control" id="documento" name="documento" disabled value = "<?php echo $dado['documento']; ?>">
        </div>        
    </div>
    <hr>
    <div class="barraDivisoriaUsuario"><b>ENDEREÇO</b></div>
    <hr>
                
    <div class="row">
        <div class="col-xs-12 col-sm-9">
            <label class="label">Logradouro</label>
            <input type="text" class="form-control editUpper" name="logradouro" id="logradouro" disabled value = "<?php echo $dado['logradouro']; ?>">
        </div>

        <div class="col-xs-12 col-sm-3">
            <label class="label">Nº</label>
            <input type="text" class="form-control" name="numero" id="numero" disabled value = "<?php echo $dado['numero']; ?>">
        </div>
    </div>

    <div class="row">   
        <div class="col-xs-12 col-sm-5">
            <label class="label">Bairro</label>
            <input type="text" class="form-control editUpper" name="bairro" id="bairro" disabled value = "<?php echo $dado['bairro']; ?>">
        </div>

        <div class="col-xs-12 col-sm-4">
            <label class="label">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" disabled value = "<?php echo $dado['cidade']; ?>">
        </div>
                
        <div class="col-xs-12 col-sm-3">
            <label class="label">UF</label>
            <input type="text" class="form-control" name="uf" id="uf" disabled value = "<?php echo $dado['uf']; ?>">
                
        </div>     
    </div>
    <hr>
    <div class="barraDivisoriaUsuario"><b>COMUNICAÇÃO</b></div>
    <hr>
    
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <label class="label">Telefone Fixo:</label>
            <input type="text" class="form-control" name="telFixo" id="telFixo" disabled value = "<?php echo $dado['telefone']; ?>" />
        </div>

        <div class="col-xs-12 col-sm-6">
            <label class="label">Celular:</label>
            <input type="text" class="form-control" name="telCel" id="telCel" placeholder="* FORMATO: XX-XXXXX-XXXX" disabled value = "<?php echo $dado['celular']; ?>"/>   
        </div>
    </div>
</form>




