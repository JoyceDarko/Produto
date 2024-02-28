<?php
// Verifica se os dados foram enviados via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos momento_marcante e perspectiva_alternativa foram preenchidos
    if (isset($_POST["momento_marcante"]) && isset($_POST["perspectiva_alternativa"])) {
        // Obtém os dados enviados pelo formulário
        $momento_marcante = $_POST["momento_marcante"];
        $perspectiva_alternativa = $_POST["perspectiva_alternativa"];

        // Aqui você pode fazer o que desejar com os dados, como salvá-los em um banco de dados, enviar por e-mail, etc.
        // Por exemplo, você pode exibir os dados na tela para verificar se foram enviados corretamente
        echo "<h2>Dados recebidos com sucesso!</h2>";
        echo "<p>Momento Marcante: " . $momento_marcante . "</p>";
        echo "<p>Perspectiva Alternativa: " . $perspectiva_alternativa . "</p>";

        // Você também pode redirecionar o usuário para uma página de confirmação ou para o blog
        // header("Location: https://joycedarko.github.io/Produto/"); // Redirecionamento para o blog
    } else {
        // Caso os campos não tenham sido preenchidos corretamente, exibe uma mensagem de erro
        echo "<h2>Erro: Todos os campos devem ser preenchidos!</h2>";
    }
} else {
    // Caso o método de requisição não seja POST, exibe uma mensagem de erro
    echo "<h2>Erro: Método de requisição inválido!</h2>";
}
?>
