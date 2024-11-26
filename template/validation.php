<?php
// login.php
session_start();
require 'connection.php';

// Definir o cabeçalho para JSON
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);

    if (isset($input['username']) && isset($input['password'])) {
        $username = mysqli_real_escape_string($conn, $input['username']);
        $password = mysqli_real_escape_string($conn, $input['password']);

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            // Verifica se a consulta SQL teve algum erro
            echo json_encode(['error' => 'Erro na consulta ao banco de dados: ' . mysqli_error($conn)]);
            exit;
        }

        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);

            // Verificando a senha (use password_verify se estiver usando hash de senha)
            if ($password == $user['password']) {
                // Senha correta, criar sessão
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                // Resposta JSON de sucesso com token (ou qualquer outro dado)
                echo json_encode(['token' => 'your_generated_jwt_token_here', 'message' => 'Login successful']);
            } else {
                // Senha incorreta
                echo json_encode(['error' => 'Usuário ou senha incorretos!']);
            }
        } else {
            // Usuário não encontrado
            echo json_encode(['error' => 'Usuário não encontrado!']);
        }
    } else {
        // Se os dados de login não foram fornecidos
        echo json_encode(['error' => 'Dados de login incompletos.']);
    }
}
?>
