<?php
include("./config/conexao.php");
# verifica se já existe essa placa no banco de dados ------------------------------------------------------------------------------------ # 

function consulta_placa(){
    include("./config/conexao.php");
    $placa  = $_POST["placa"];
    $consulta_id_beneficiario = "SELECT placa FROM veiculos WHERE placa LIKE '$placa' ";
    $consulta_id_beneficiario = $conexao->query($consulta_id_beneficiario);
    $row = $consulta_id_beneficiario->fetch_row();
    return  $row;
}
# consulta de dados dos veiculos para exibir na tela mostrar-veiculo --------------------------------------------------------------------------- #

function consulta_veiculo(){
    include("./config/conexao.php");
    $sql = "SELECT beneficiarios.nome , beneficiarios.documento , veiculos.id,  veiculos.placa , veiculos.chassi, veiculos.montadora, veiculos.modelo , veiculos.situacao 
    FROM veiculos, beneficiarios
    WHERE beneficiarios.`id` LIKE veiculos.`idBeneficiario` ";
    $res = $conexao->query($sql);
    
    return  $res;
}

# verifica se já existe esse chassi no banco de dados ------------------------------------------------------------------------------------------- #

function consulta_chassi(){
    include("./config/conexao.php");
    $chassi  = $_POST["chassi"];
    $consulta_id_beneficiario = "SELECT chassi FROM veiculos WHERE chassi LIKE '$chassi'";
    $consulta_id_beneficiario = $conexao->query($consulta_id_beneficiario);
    $row = $consulta_id_beneficiario->fetch_row();
    return  $row;
}

# retorna o id conforme o documento digitado para inserir na tabela de veiculos ------------------------------------------------------------------------------------ #

function consulta_id(){
    include("./config/conexao.php");
    $documento  = $_POST["documento"];
    $consulta_id_beneficiario = "SELECT id as id FROM beneficiarios WHERE documento LIKE '$documento'";
    $consulta_id_beneficiario = $conexao->query($consulta_id_beneficiario);
    $row = $consulta_id_beneficiario->fetch_assoc();
    # testando mostrar linhas para aplicar nas outras função - $row = $consulta_id_beneficiario->fetch_row();
    # var_dump($row);
    return  $row['id'];
}

# retorna o nome conforme o documento digitado na tela de veiculos --------------------------------------------------------------------------- #

function consulta_nome(){
        include("./config/conexao.php");
    $documento  = $_POST["documento"];
    $consulta_nome_beneficiario = "SELECT nome FROM beneficiarios WHERE documento LIKE '$documento'";
    $consulta_nome_beneficiario  = $conexao->query($consulta_nome_beneficiario);
    $row = $consulta_nome_beneficiario->fetch_assoc();
    return  $row['nome'];
}

# Consulta se já existe um cpf cadastrado ------------------------------------------------------------------------------------ # 

function consulta_cpf(){
    $documento  = $_POST["documento"];
    include("./config/conexao.php");
    $consulta = "SELECT documento FROM beneficiarios WHERE documento LIKE '$documento' ";
    $consulta = $conexao->query($consulta);
    $row = $consulta->fetch_row();
    return  $row;
}

# Retorna dados do beneficiario para exibir na tela mostrar-beneficiario ------------------------------------------------------------------------------------ # 

function consulta_beneficiario(){
        include("./config/conexao.php");
    $consulta = "SELECT id, nome, documento, cidade, celular, situacao FROM beneficiarios" ;
    $res = $conexao->query($consulta);
    
    return  $res;
}
?>
