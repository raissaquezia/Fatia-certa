<?php
require 'connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['create_user'])) {
        // Sanitizar as entradas para prevenir SQL Injection
        $username = mysqli_real_escape_string($conn, trim($_POST['username']));
        $password = mysqli_real_escape_string($conn, trim($_POST['password']));

        // Verificar se o nome de usuário já existe no banco de dados
        $sql_check = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql_check);

        if (mysqli_num_rows($result) > 0) {
            // Usuário já existe
            $error_message = "O nome de usuário já está em uso. Escolha outro.";
        } else {
            // Inserir o usuário no banco de dados sem criptografar a senha
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

            if (mysqli_query($conn, $sql)) {
                // Cadastro bem-sucedido, redirecionar para login.php
                session_start();
                $_SESSION['success_message'] = "Usuário cadastrado com sucesso!";
                header('Location: login.php');
                exit();
            } else {
                // Caso ocorra algum erro ao inserir no banco
                $error_message = "Erro: " . mysqli_error($conn);
            }
        }
    }
}

// Buscar usuários
$users = [];
$sql = "SELECT id, username, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}



// Processar cadastro de bolo
$success_message = '';  // Mensagem de sucesso
$error_message = '';    // Mensagem de erro

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_cake'])) {
    // Sanitizar as entradas para evitar SQL Injection
    $cake_name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $price = mysqli_real_escape_string($conn, trim($_POST['price']));
    $description = mysqli_real_escape_string($conn, trim($_POST['description']));
    $image_url = mysqli_real_escape_string($conn, trim($_POST['imageUrl']));

    // Inserir bolo no banco de dados
    $sql = "INSERT INTO cakes (name, price, description, imageUrl) VALUES ('$cake_name', '$price', '$description', '$image_url')";

    if (mysqli_query($conn, $sql)) {
        // Se o cadastro foi bem-sucedido, exibe a mensagem de sucesso
        $success_message = "Bolo cadastrado com sucesso!";
    } else {
        // Caso contrário, exibe a mensagem de erro
        $error_message = "Erro ao cadastrar o bolo: " . mysqli_error($conn);
    }
}

$cakes = [];
// Consulta para buscar bolos no banco
$sql = "SELECT id, name, price, description, imageUrl FROM cakes";
$result = $conn->query($sql);

// Verifica se a consulta teve sucesso
if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cakes[] = $row; // Adiciona o bolo ao array
        }
    }
}

// Processar exclusão de usuário
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user_id'])) {
    $user_id = intval($_POST['delete_user_id']); // Garante que o ID seja tratado como inteiro

    // Query para excluir o usuário pelo ID
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        $success_message = "Usuário excluído com sucesso!";
    } else {
        $error_message = "Erro ao excluir usuário: " . $conn->error;
    }
}

?>
