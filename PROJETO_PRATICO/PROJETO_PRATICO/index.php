<?php
// --- Bloco de Verificação de Sessão (Controle de Acesso) ---

// Inicia ou resume uma sessão PHP existente.
// Isso é crucial para acessar as variáveis de sessão ($_SESSION).
session_start();

// Verifica se a variável de sessão 'usuario' NÃO está definida (ou seja, o usuário não está logado).
if (!isset($_SESSION['usuario'])) {
    // Se a sessão 'usuario' não existe, redireciona o usuário (força-o) para a página de login.
    header("Location: login.php");
    // Interrompe a execução do script para garantir que nada mais seja processado ou exibido.
    exit;
}

// Se o usuário está logado (o código continuou a execução), armazena o nome de usuário
// da sessão em uma variável local para uso mais fácil no HTML.
$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Painel - Serjão Materiais</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Bem-vindo, <?php echo $usuario; ?>!</h2>
  <a href="cadastro_produto.php">📦 Cadastro de Produtos</a><br>
  <a href="estoque.php">📊 Gestão de Estoque</a><br>
  <a href="logout.php" class="sair">Sair</a>
</div>
</body>
</html>
