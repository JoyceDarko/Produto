<?php
// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processa os dados do formulário
    $momento_marcante = $_POST["momento_marcante"];
    $perspectiva_alternativa = $_POST["perspectiva_alternativa"];

    // Aqui você pode fazer o que quiser com os dados, como salvá-los em um banco de dados ou em um arquivo

    // Redireciona de volta para a página principal ou exibe uma mensagem de sucesso
    header("Location: index.html");
    exit();
} else {
    // Se a requisição não for POST, exibe um erro ou redireciona para uma página de erro
    header("HTTP/1.1 405 Method Not Allowed");
    exit("405 Method Not Allowed");
}
?>
