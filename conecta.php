<?php

$host = "sql305.infinityfree.com";
$banco = "if0_43396020_luanelinda";
$usuario = "if0_43396020";
$senha = "DLihRy5QWbnbJAC";
$porta = "3306";

try {

    $conexao = new PDO(
        "mysql:host=$host;port=$porta;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão realizada com sucesso!";

} catch (PDOException $erro) {

    echo "Erro na conexão: " . $erro->getMessage();

}

?>