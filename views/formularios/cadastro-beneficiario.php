<form id="form-beneficiarios" method="POST" action="?pagina=salvar_beneficiario">
    <input type="hidden" name="acaoo" value="cadastrar">
    <div class="barraDivisoria"><b>DADOS DO BENEFICIÁRIO</b></div> 
    <hr>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <label class="label">Nome</label>
            <input type="text" class="form-control editUpper" id="nome" name="nome">
        </div>

        <div class="col-xs-12 col-sm-4">
            <label class="label">Documento (CPF/CNPJ)</label>
            <input type="text" class="form-control" id="documento" name="documento" required>
        </div>
        <div class="col-xs-12 col-sm-2">
            <label class="label">Situação:</label>
            <select name="situacao" id="situacao" class="form-control editUpper">
                <option value="A" class="ativo">ATIVO</option>
                <option value="I" class="inativo">INATIVO</option>
            </select>
        </div>   
    </div>

    <hr>
    <div class="barraDivisoriaUsuario"><b>ENDEREÇO</b></div>
    <hr>
            
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <label class="label">Logradouro</label>
                <input type="text" class="form-control editUpper" name="logradouro" id="logradouro">
            </div>

            <div class="col-xs-12 col-sm-3">
                <label class="label">Nº</label>
                <input type="text" class="form-control" name="numero" id="numero">
            </div>
        </div>
        <div class="row">   
            <div class="col-xs-12 col-sm-5">
                <label class="label">Bairro</label>
                <input type="text" class="form-control editUpper" name="bairro" id="bairro">
            </div>

            <div class="col-xs-12 col-sm-4">
                <label class="label">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade">
            </div>
                    
            <div class="col-xs-12 col-sm-3">
                <label class="label">UF</label>
                <select class="form-select" name="uf" id="uf">
                    <?php //consumindo api para mostrar os estados
                        ini_set('default_charset','UTF-8');
                        $url = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados';
                        $conteudo = json_decode(file_get_contents($url));

                        foreach($conteudo as $ufs){
                                $uf = $ufs->sigla;
                                        echo "<option value = '$uf'>$uf</option>";
                        }
                    ?>                    
                </select>
            </div>     
        </div>
        <hr>
        <div class="barraDivisoriaUsuario"><b>COMUNICAÇÃO</b></div>
        <hr>
        
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <label class="label">Telefone Fixo:</label>
                <input type="text" class="form-control" name="telFixo" id="telFixo" />
            </div>

            <div class="col-xs-12 col-sm-6">
                <label class="label">Celular:</label>
                <input type="text" class="form-control" name="telCel" id="telCel" placeholder="* FORMATO: XX-XXXXX-XXXX"/>   
            </div>
        </div>

        <center>
            <div class="style-form-input full">
                <input type="hidden" name="enviar" value="cadastrar">
                <button class="btn-submit">Cadastrar</button>
            </div>
        </center>
</form>











