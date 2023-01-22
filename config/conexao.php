<!-- faz a conexao com o banco de dados -->
<?php
    define('HOST', '127.0.0.1');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'treinamento_daila');

    $conexao = new MySQLi('127.0.0.1', 'root', '', 'treinamento_daila');
    if(!$conexao) {
        echo 'Deu ruim parça!';
    }
