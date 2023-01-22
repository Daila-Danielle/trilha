<?php
  include("./config/conexao.php");
    switch(@$_REQUEST["acaoo"]){
        case "cadastrar": 
            # pega os dados digitados no form da tela de cadastro
            $nome       = $_POST["nome"];
            $documento  = $_POST["documento"];
            $logradouro = $_POST["logradouro"];
            $numero     = $_POST["numero"];
            $bairro     = $_POST["bairro"];
            $cidade     = $_POST["cidade"];
            $uf         = $_POST["uf"];
            $tel_fixo   = $_POST["telFixo"];
            $celular    = $_POST["telCel"];
            $situacao   = $_POST["situacao"];
            # se existir um cpf já cadastrado ele exibe a mensagem de erro.

            if(consulta_cpf()==True ){
                print "<script>alert('Não foi possivel realizar o cadastro! CPF já cadastrado!');</script>";
                print "<script>location.href='?pagina=cadastro_beneficiario';</script>";
            }
            # se não faz o INSERT na tabela beneficiarios
            else{
                $sql = "INSERT INTO beneficiarios (nome, documento, logradouro, numero, bairro, cidade, uf, telefone, celular, situacao)
                        VALUES ('{$nome}','{$documento}','{$logradouro}','{$numero}','{$bairro}','{$cidade}','{$uf}','{$tel_fixo}','{$celular}','{$situacao}')";
                $res  = $conexao->query($sql);

                # se a query der certo exibe mensagem de sucesso e redireciona para tela de consulta
                if ($res==true){
                    print "<script>alert('Cadastrado com Sucesso!');</script>";
                    print "<script>location.href='?pagina=consulta_beneficiario';</script>";
                }
                # se não exibe mensagem de erro e redireciona para tela de cadastro
                else{
                    print "<script>alert('Não foi possivel realizar o cadastro!');</script>";
                    print "<script>location.href='?pagina=cadastro_beneficiario';</script>";
                }
            }
        break;
        
        default:
            print "Bem vindos!";
    }