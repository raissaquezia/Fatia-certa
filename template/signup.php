<?php require 'connection.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <style>
        body {
            background: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            background: #fff;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .form-control {
            height: 48px;
            border-radius: 5px;
        }
        .btn-custom {
            background: #fda085;
            color: #fff;
            border: none;
            height: 48px;
            border-radius: 5px;
        }
        .btn-custom:hover {
            background: #f6d365;
        }
        .login-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #333;
            text-align: center;
        }
        .signup-link {
            text-align: center;
            margin-top: 1rem;
        }
        .signup-link a {
            color: #fda085;
            text-decoration: none;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="login-container">
    <div class="login-title">Cadastro</div>
    <form action="actions.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input
                type="text"
                name="username"
                class="form-control"
                id="username"
                placeholder="Digite seu username"
                required
            >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input
                type="password"
                name="password"
                class="form-control"
                id="password"
                placeholder="Digite sua senha"
                required
            >
        </div>
        <button type="submit" name="create_user" class="btn btn-custom w-100">Sign in</button>
    </form>
    <p class="signup-link">
        Já possui uma conta? <a href="login.php">Faça o login</a>
    </p>
</div>

<!-- Bootstrap JS -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
</script>
</body>
</html>

