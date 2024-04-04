<?php
session_start();
require_once 'config.php';

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    include_once 'config.php';
    $email = $_POST['email'];
    $senha = $_POST['password'];

    // Consulta SQL segura para evitar injeção SQL
    $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows < 1) {
        // Usuário não encontrado, redireciona para a página de login
      //  header('Location: login.php');
      echo "não achou";   
      exit();
    } else {
        // Usuário encontrado, redireciona para a página principal
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $senha;
        header('Location: main.php');
        exit();
    }
} else {
    // Dados de login não foram enviados, redireciona para a página de login
    header('Location: login.php');
    exit();
}
?>
