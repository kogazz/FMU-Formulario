<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $fone = filter_input(INPUT_POST, 'fone', FILTER_SANITIZE_STRING);
    $hora_desejada = $_POST['hora-desejada'] ?? null;
    $dtnasc = $_POST['dtnasc'] ?? null;
    $cor = $_POST['cor'] ?? null;
    $filhos = filter_input(INPUT_POST, 'filhos', FILTER_VALIDATE_INT);
    $peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT);
    $sexo = $_POST['sexo'] ?? null;
    $estado = $_POST['estado'] ?? null;
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
    $num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING);
    $msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);
    
    // Verificar se 'meios_transporte' foi enviado como array, caso contrário, inicializa como array vazio.
    $meios_transporte = isset($_POST['meios_transporte']) && is_array($_POST['meios_transporte']) ? $_POST['meios_transporte'] : [];
    
    // Transformar o array em string com valores separados por vírgula, ou null caso esteja vazio.
    $meios_transporte_str = !empty($meios_transporte) ? implode(', ', $meios_transporte) : null;

    $sql = "INSERT INTO dados 
            (nome, email, fone, hora_desejada, dtnasc, cor, filhos, peso, sexo, estado, cep, num, msg, meios_transporte)
            VALUES 
            (:nome, :email, :fone, :hora_desejada, :dtnasc, :cor, :filhos, :peso, :sexo, :estado, :cep, :num, :msg, :meios_transporte)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':fone', $fone);
    $stmt->bindParam(':hora_desejada', $hora_desejada);
    $stmt->bindParam(':dtnasc', $dtnasc);
    $stmt->bindParam(':cor', $cor);
    $stmt->bindParam(':filhos', $filhos);
    $stmt->bindParam(':peso', $peso);
    $stmt->bindParam(':sexo', $sexo);
    $stmt->bindParam(':estado', $estado);
    $stmt->bindParam(':cep', $cep);
    $stmt->bindParam(':num', $num);
    $stmt->bindParam(':msg', $msg);
    $stmt->bindParam(':meios_transporte', $meios_transporte_str);

    try {
        $stmt->execute();
        echo "Dados salvos com sucesso!";
    } catch (PDOException $e) {
        die("Erro ao salvar os dados: " . $e->getMessage());
    }
}
?>
