<!-- faz a conexao com o banco de dados -->
<?php
    define('HOST', '192.168.1.254');
    define('USER', 'estagiario');
    define('PASS', 'estagio123');
    define('BASE', 'treinamento_daila');

    $conexao = new MySQLi(HOST, USER, PASS, BASE);

    #$conexao = new MySQLi('127.0.0.1', 'root', '', 'treinamento_daila');
    
    if(!$conexao) {
        echo 'Deu ruim parça!';
    }
