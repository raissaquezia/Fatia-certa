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
    <div class="login-title">Login</div>
    <form id="login-form" method="post">
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
        <button type="submit" class="btn btn-custom w-100">Log In</button>
    </form>
    <p class="signup-link">
        Ainda não possui uma conta? <a href="signup.php">Cadastre-se</a>
    </p>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.getElementById('login-form').addEventListener('submit', function (event) {
        event.preventDefault();

        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        fetch('validation.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ username: username, password: password })
        })
            .then(response => response.json())
            .then(data => {
                if (data.token) {
                    // Login bem-sucedido: armazena o token no localStorage e redireciona
                    localStorage.setItem('jwt', data.token);
                    alert('Login bem-sucedido!');
                    window.location.href = 'employeeSection.php'; // Redireciona para employeeSection.php
                } else if (data.error) {
                    // Exibe a mensagem de erro
                    alert('Login falhou: ' + data.error);
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                alert('Erro de conexão.');
            });
    });

</script>
</body>
</html>
