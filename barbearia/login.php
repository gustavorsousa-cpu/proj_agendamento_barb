<?php
session_start();

if (isset($_SESSION['barbeiro_id'])) {
    header('Location: painel.php');
    exit;
}

include 'conexao.php';

$erro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM barbeiros WHERE email = '$email' AND senha = '$senha' AND ativo = 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $barbeiro = mysqli_fetch_assoc($result);
        $_SESSION['barbeiro_id'] = $barbeiro['id'];
        $_SESSION['barbeiro_nome'] = $barbeiro['nome'];
        header('Location: painel.php');
        exit;
    } else {
        $erro = 'Email ou senha incorretos!';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Barbearia</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
        body { background-color: #1a1a1a; color: #fff; }
        header { background-color: #111; padding: 20px; text-align: center; border-bottom: 2px solid #c8a951; }
        header h1 { color: #c8a951; font-size: 28px; letter-spacing: 4px; }
        .container { max-width: 400px; margin: 80px auto; padding: 0 20px; }
        h2 { text-align: center; color: #c8a951; margin-bottom: 30px; font-size: 22px; }
        .campo { margin-bottom: 20px; }
        label { display: block; margin-bottom: 6px; color: #aaa; font-size: 14px; }
        input { width: 100%; padding: 12px; background-color: #222; border: 1px solid #444; border-radius: 4px; color: #fff; font-size: 15px; }
        input:focus { outline: none; border-color: #c8a951; }
        .btn-entrar { width: 100%; padding: 14px; background-color: #c8a951; color: #111; font-size: 16px; font-weight: bold; border: none; border-radius: 4px; cursor: pointer; letter-spacing: 1px; margin-top: 10px; }
        .btn-entrar:hover { background-color: #e0bf6a; }
        .erro { background-color: #3a1a1a; border: 1px solid #c0392b; color: #e74c3c; padding: 12px; border-radius: 4px; margin-bottom: 20px; text-align: center; font-size: 14px; }
    </style>
</head>
<body>

<header>
    <h1>BARBEARIA</h1>
</header>

<div class="container">
    <h2>Área do Barbeiro</h2>

    <?php if ($erro): ?>
        <div class="erro"><?php echo $erro; ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="campo">
            <label>Email</label>
            <input type="email" name="email" placeholder="seu@email.com" required>
        </div>
        <div class="campo">
            <label>Senha</label>
            <input type="password" name="senha" placeholder="••••••••" required>
        </div>
        <button type="submit" class="btn-entrar">ENTRAR</button>
    </form>
</div>

</body>
</html>
