<?php

function getRotas($caminho)
{
    switch($caminho){ 
        case "cadastro_veiculo":
            include ("./views/formularios/cadastro-veiculo.php");
        break;
        case "consulta_veiculo":
            include ("./views/listagens/mostrar-veiculo.php");
        break;
        case "salvar_veiculo":
            include (__DIR__ . "/../controllers/acoesVeiculoController.php");
        break;
        case "editar_veiculo":
            include (__DIR__ . "/../views/editarVeiculoView.php");
        break;
        case "cadastro_beneficiario":
            include ("./views/formularios/cadastro-beneficiario.php");
        break;
        case "consulta_beneficiario":
            include ("./views/listagens/mostrar-beneficiario.php");
        break;
        case "salvar_beneficiario":
            include (__DIR__ . "/../controllers/acoesBeneficiarioController.php");
        break;
        case "ver_beneficiario":
            include (__DIR__ . "/../views/verBeneficiarioView.php");
        break;
        default:
            print "Bem vindos!";
    }
    
}

?>