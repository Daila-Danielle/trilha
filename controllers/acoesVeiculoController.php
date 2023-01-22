<?php
    switch(@$_REQUEST["acao"]){
        case "cadastrar":  
            #pega os dados digitado no formulario.
            $id_b       = consulta_id(); #pega o id do beneficiario conforme o documento que ele digitar.
            $placa      = $_POST["placa"];
            $chassi     = $_POST["chassi"];
            $montadora  = $_POST["montadora"];
            $modelo     = $_POST["modelo"];
            $ano_fabri  = $_POST["ano_fabricacao"];
            $ano_modelo = $_POST["ano_modelo"];
            $situacao   = 'A';
            #verifica se tem placa ou chassi já cadastrados se tiver exibe mensagem de erro
            #se não faz o INSERT no banco de dados.
            if(consulta_placa()==True || consulta_chassi()==True){
                print "<script>alert('Não foi possivel realizar o cadastro! Placa ou chassi já cadastrados');</script>";
                print "<script>location.href='?pagina=cadastro_veiculo';</script>";
            }
            else{
                $sql = "INSERT INTO veiculos (placa, chassi, montadora, modelo , anoFabricacao, anoModelo,idBeneficiario, situacao)
                VALUES ('{$placa}', '{$chassi}', '{$montadora}', '{$modelo}' , '{$ano_fabri}', '{$ano_modelo}', '{$id_b}', '{$situacao}')";
                $res  = $conexao->query($sql);
                if ($res==true){
                    print "<script>alert('Cadastrado com Sucesso!');</script>";
                    print "<script>location.href='?pagina=consulta_veiculo';</script>";
                }
                else{
                    print "<script>alert('Não foi possivel realizar o cadastro!');</script>";
                    print "<script>location.href='?pagina=cadastro_veiculo';</script>";
                }
            }
            
        break;

        case "editar":
            include("editar-veiculo.php"); #para pegar o id que vem pela tela

            #pega os dados digitado no form da tela editar
            $placa      = $_POST["placa"];
            $chassi     = $_POST["chassi"];
            $montadora  = $_POST["montadora"];
            $modelo     = $_POST["modelo"];
            $ano_fabri  = $_POST["ano_fabricacao"];
            $ano_modelo = $_POST["ano_modelo"];
            $situacao   = $_POST["situacao"];

            $pla = $dado ['placa']; #placa que veio pelo id do veiculo.
            $cha = $dado ['chassi']; #chassi que veio pelo id do veiculo.

            # fazendo uma verificação se existe chassi e placa no banco que não seja a placa que 
            # já estava no banco e que a placa que foi digitada na tela editar não seja igual 
            # a de outro cadastro.
            $sql = "SELECT chassi FROM veiculos WHERE chassi not LIKE '$cha' AND chassi LIKE '$chassi'";
            $res = $conexao->query($sql);
            $dados = $res->fetch_row();

            $sqli = "SELECT placa FROM veiculos WHERE placa not LIKE '$pla'AND placa LIKE '$placa'";
            $resi = $conexao->query($sqli);
            $dadoi = $resi->fetch_row();
            
            # se retornar algum valor nas consultas é poque já tem essa placa ou chassi cadastrados 
            # então emite um alerta que não foi possivel editar.
            if($dados==True || $dadoi==True){
                print "<script>alert('Não foi possivel realizar o cadastro! Placa ou chassi já cadastrados');</script>";
                
            # se não retornou nada das consultas faz o UPDATE no banco.
            }else{
                $sql = "UPDATE veiculos SET 
                placa = '{$placa}' ,
                chassi = '{$chassi}',
                montadora = '{$montadora}', 
                modelo  = '{$modelo}', 
                anoFabricacao = '{$ano_fabri}',
                anoModelo = '{$ano_modelo}' ,
                situacao = '{$situacao}'
                WHERE  id=".$_REQUEST["id"];
                $res  = $conexao->query($sql);

                # se o UPDATE der certo, emite a mensagem de sucesso. 
                if ($res==true){
                    print "<script>alert('Editado com Sucesso!');</script>";
                    print "<script>location.href='?pagina=consulta_veiculo';</script>";
                }
                # se não emite a mensagem de erro
                else{
                    print "<script>alert('Não foi possivel editar!');</script>";
                    print "<script>location.href='?pagina=consulta_veiculo';</script>";
                }
            }
        break;

        case "excluir":
            #sql de exclusão do banco
            $sql = "DELETE FROM veiculos WHERE id=".$_REQUEST["id"];
            $res  = $conexao->query($sql);
            if ($res==true){
                print "<script>alert('Excluido com Sucesso!');</script>";
                print "<script>location.href='?pagina=consulta_veiculo';</script>";
            }else{
                print "<script>alert('Não foi possivel excluir!');</script>";
                print "<script>location.href='?pagina=cadastro_veiculo';</script>";
            }
        break;
        default:
            print "Bem vindos!";
    }