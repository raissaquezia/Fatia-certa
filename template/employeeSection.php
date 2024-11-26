<?php
require 'actions.php';
?>
<?php
// Desativa o cache
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// Inicia a sessão, caso ainda não esteja iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verifica se o usuário está autenticado
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redireciona para o login, se não autenticado
    exit();
}

// Processa requisições POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se o botão de logout foi clicado
    if (isset($_POST['logout'])) {
        session_destroy(); // Finaliza a sessão
        header('Location: login.php'); // Redireciona para a página de login
        exit();
    }

    // Caso outras ações sejam realizadas via POST, processe-as aqui

    // Redireciona para evitar reenvio do formulário
    header('Location: employeeSection.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Usuários e Bolos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
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

        .btn-danger {
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="container bg-white p-5 rounded shadow text-center" style="max-width: 600px;">
        <h1>Bem-vindo, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
        <p>Esta é a seção dos funcionários.</p>

        <!-- Botão de Logout -->
        <form method="POST" style="display: inline;">
            <button type="submit" name="logout" class="btn btn-danger btn-lg w-100 mb-3">Logout</button>
        </form>

        <!-- Botões de Cadastro e Lista -->
        <div class="d-grid gap-3">
            <button type="button" class="btn btn-custom btn-lg w-100" data-bs-toggle="modal"
                    data-bs-target="#cakeModal">
                Cadastrar Bolo
            </button>
            <button type="button" class="btn btn-custom btn-lg w-100" data-bs-toggle="modal"
                    data-bs-target="#usersModal">
                Listar Usuários
            </button>
        </div>
    </div>
</div>

<!-- Modal de Cadastro de Bolo -->
<div class="modal fade" id="cakeModal" tabindex="-1" aria-labelledby="cakeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cakeModalLabel">Cadastrar Bolo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="createCakeForm" method="POST">
                    <div class="mb-3">
                        <label for="cake_name" class="form-label">Nome do Bolo</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Preço</label>
                        <input type="number" name="price" class="form-control" id="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição</label>
                        <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">URL da Imagem</label>
                        <input type="text" name="imageUrl" class="form-control" id="imageUrl" required>
                    </div>
                    <button type="submit" name="create_cake" class="btn btn-custom w-100">Cadastrar Bolo</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Lista de Usuários -->
<div class="modal fade" id="usersModal" tabindex="-1" aria-labelledby="usersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="usersModalLabel">Usuários</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $index => $user): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($user['username']) ?></td>
                            <td><?= htmlspecialchars($user['password']) ?></td>
                            <td>
                                <form id="my-form" method="POST" style="display: inline;">
                                    <!-- Passa o ID do usuário a ser excluído -->
                                    <input type="hidden" name="delete_user_id" value="<?= $user['id'] ?>">
                                    <button type="submit" class="btn btn-danger btn-sm" title="Excluir">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    document.getElementById('my-form').addEventListener('submit', async (event) => {
        event.preventDefault(); // Evita recarregar a página
        const formData = new FormData(event.target);

        try {
            const response = await fetch('process.php', {
                method: 'POST',
                body: formData,
            });

            const result = await response.json();
            console.log('Resultado:', result);

            // Atualizar página ou redirecionar após o envio
            window.location.href = 'employeeSection.php';
        } catch (error) {
            console.error('Erro ao enviar o formulário:', error);
        }
    });
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);
    try {
        const response = await fetch('actions.php', {method: 'POST', body: formData});
        const result = await response.json();
        console.log(result);
        if (result.success) {
            alert('Bolo cadastrado com sucesso!');
            let cakeModal = new bootstrap.Modal(document.getElementById('cakeModal'), {});
            cakeModal.hide();
        } else {
            alert('Erro ao cadastrar o bolo: ' + result.message);
        }
    } catch (error) {
        console.error('Erro:', error);
        alert('Erro de conexão.');
    }
    });
</script>

</script>
</body>
</html>
