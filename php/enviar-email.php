<?php
include_once "mysql/conexao.php"; //trazer a conexao pro arquivo
SESSION_START();
// Variáveis
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$stmt = $conn->prepare("INSERT INTO tbmensagens (nome, sobrenome, email, assunto, mensagem) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nome, $sobrenome, $email, $assunto, $mensagem);

if ($stmt->execute()) {
    header("Location: ../contato.php?sucesso=1");
exit;
} else {
    echo '<div class="alert-erro">Erro ao enviar a mensagem: ' . $stmt->error . '</div>';
}
?>

