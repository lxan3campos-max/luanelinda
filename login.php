<?php

require_once "conecta.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM aluno WHERE cpf = :cpf AND senha = :senha";

    $consulta = $conexao->prepare($sql);

    $consulta->bindParam(":cpf", $cpf);
    $consulta->bindParam(":senha", $senha);

    $consulta->execute();

    $aluno = $consulta->fetch(PDO::FETCH_ASSOC);

    if ($aluno) {

        echo "<h1>Login realizado com sucesso!</h1>";
        echo "<p>Bem-vindo(a), " . htmlspecialchars($aluno["nome"]) . "!</p>";

    } else {

        echo "<h1>CPF ou senha incorretos!</h1>";

    }

} else {

    echo "Acesso inválido.";

}

?>