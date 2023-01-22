<form method="POST" action="?pagina=salvar_veiculo" id="form" >
    <input type="hidden" name="acao" value="cadastrar">

    <div class="barraDivisoria"><b>DADOS DO BENEFICIÁRIO</b></div> 
    <hr>
        <div class="caixa">
            <div class="row">
                <div class="col-xs-12 col-sm-5">
                    <label class="label">Documento (CPF/CNPJ):</label>
                    <input type="text" class="form-control" id="documento" name="documento"  onblur="fora()" >
                   
                    
                </div>
                <div class="col-xs-12 col-sm-7">
                    <label class="label">Nome:</label>
                    
                    
                    <input type="text" class="form-control editUpper" disabled id="nome" name="nome" value = "<?php echo $dado_beneficiario ['nome']; ?>">
                    <?php
                   
                    ?>
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
                    <input type="text" class="form-control editUpper" id="placa" name="placa" required>
                </div>
                <div class="col-xs-12 col-sm-5">
                    <label class="label">Chassi:</label>
                    <input type="text" class="form-control" id="chassi" name="chassi">
                </div>
                
                
            </div>

                <div class="caixa">
                    <div class="row">
                        <div class="col-xs-12 col-sm-7">
                            <label class="label">Montadora:</label>
                            <input type="text" class="form-control editUpper" name="montadora" id="montadora">
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <label class="label">Modelo:</label>
                            <input type="text" class="form-control" name="modelo" id="modelo">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-5">
                            <label class="label">Ano Fabricação:</label>
                            <input type="text" class="form-control editUpper" name="ano_fabricacao" id="ano_fabricacao">
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <label class="label">Ano Modelo:</label>
                            <input type="text" class="form-control" name="ano_modelo" id="ano_modelo">
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <label class="label">Situação:</label>
                            <select name="situacao" id="situacao" class="form-control editUpper">
                                <option value="A">ATIVO</option>
                                <option value="I">INATIVO</option>
                            </select>
                           
                        </div>
                        
                    </div>
                </div>
                
                
   <center><div class="style-form-input full">
        <input type="hidden" name="cadastrar" value="cadastrar">
        <button class="btn-submit">Cadastrar</button>
    </div></center>

    </div>
</form>

