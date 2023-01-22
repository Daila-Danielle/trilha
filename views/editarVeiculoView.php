<?php
# Pega o nome e documento do usuario conforme o id do veiculo trazido pela pagina. (serve para mostrar já na tela)
    $sql_beneficiario = "SELECT beneficiarios.nome, beneficiarios.`documento` FROM beneficiarios WHERE id LIKE (SELECT idBeneficiario FROM veiculos WHERE veiculos.id = ".$_REQUEST["id"].")";
    $res_beneficiario = $conexao->query($sql_beneficiario);
    $dado_beneficiario = $res_beneficiario->fetch_array();
# Pega os dados do veiculo conforme o id do veiculo trazido pela pagina. (serve para mostrar já na tela) 
    $sql = "SELECT  veiculos.id,  veiculos.placa , veiculos.chassi, veiculos.montadora, veiculos.modelo , veiculos.anoFabricacao, veiculos.anoModelo, veiculos.situacao 
    FROM veiculos
    WHERE   veiculos.id = ".$_REQUEST["id"] ; 
    $res = $conexao->query($sql);
    $dado = $res->fetch_array();
?>

<div class="conteiner-form">
<form method="POST" action="?pagina=salvar_veiculo" >

    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $dado["id"]; ?>">

    <div class="barraDivisoria"><b>DADOS DO BENEFICIÁRIO</b></div> 
    <hr>

        <div class="caixa">
            <div class="row">
                <div class="col-xs-12 col-sm-5">
                    <label class="label">Documento (CPF/CNPJ):</label>
                    <input type="text" class="form-control" id="documento" name="documento" disabled value = "<?php echo $dado_beneficiario ['documento']; ?>">
                </div>
                <div class="col-xs-12 col-sm-7">
                    <label class="label">Nome:</label>

                    <input type="text" class="form-control editUpper" disabled id="nome" name="nome" value = "<?php echo $dado_beneficiario ['nome']; ?>">
                    
                </div>
            </div>
        </div>
        <hr>

    <div class="barraDivisoria"><b>DADOS DO VEICULO</b></div> 
    <hr>
        <div class="caixa">
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <label class="label">Placa:</label>
                    <input type="text" class="form-control editUpper" id="placa" name="placa" value = "<?php echo $dado ['placa']; ?>">

                </div>
                <div class="col-xs-12 col-sm-5">
                    <label class="label">Chassi:</label>
                    <input type="text" class="form-control" id="chassi" name="chassi"  value = "<?php echo $dado ['chassi']; ?>">
                </div>
                
                
            </div>

                <div class="caixa">
                    <div class="row">
                        <div class="col-xs-12 col-sm-7">
                            <label class="label">Montadora:</label>
                            <input type="text" class="form-control editUpper" name="montadora" id="montadora"  value = "<?php echo $dado ['montadora']; ?>">
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <label class="label">Modelo:</label>
                            <input type="text" class="form-control" name="modelo" id="modelo"  value = "<?php echo $dado ['modelo']; ?>">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-5">
                            <label class="label">Ano Fabricação:</label>
                            <input type="text" class="form-control editUpper" name="ano_fabricacao" id="ano_fabricacao"  value = "<?php echo $dado ['anoFabricacao']; ?>">
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <label class="label">Ano Modelo:</label>
                            <input type="text" class="form-control" name="ano_modelo" id="ano_modelo"  value = "<?php echo $dado ['anoModelo']; ?>">
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <label class="label">Situação:</label>
                            <select name="situacao" id="situacao" class="form-control editUpper" >
                                 <!-- Se a situacao trazida do cadastro no banco de dados for inativo colocar o valor como 'I'(inativo) e vise versa -->
                                <option <?php if($dado['situacao'] == 'I'){echo "value='I'";}else{echo "value='A'";}?>>
                                <!-- Se a situacao trazida do cadastro no banco de dados for inativo ele exibe inativo e vise versa -->
                                    <?php if($dado['situacao'] == 'I'){
                                            echo 'INATIVO';}else{
                                            echo 'ATIVO';}
                                    ?>
                                </option>
                                <option <?php if($dado['situacao'] == 'I'){echo "value='A'";}else{echo "value='I'";}?>>
                                    <?php if($dado['situacao'] == 'I'){
                                            echo 'ATIVO';}else{
                                            echo 'INATIVO';}
                                    ?>
                                </option>
                            </select>
                           
                        </div>
                        
                    </div>
                </div>
                
                
   <center><div class="style-form-input full">
        <input type="hidden" name="cadastrar" value="cadastrar">
        <button class="btn-submit">Gravar</button>
    </div></center>

    
</form>
</div>

