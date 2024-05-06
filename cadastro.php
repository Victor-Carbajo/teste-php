<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Aqui você pode fazer o que quiser com os dados, como salvar em um banco de dados, enviar por e-mail, etc.

    // Exemplo de saída dos dados
    echo "<h2>Dados Recebidos:</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    // Não exibimos a senha por segurança
}
?>