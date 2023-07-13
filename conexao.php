<?php
    $host = "sql306.infinityfree.com";
    $user = "";
    $pass = "";
    $dbname = "epiz_34228230_CadastroAtmosfera";

    $conexao = new mysqli($host, $user, $pass, $dbname);
    
    if ($conexao->connect_errno) {
        echo "Falha na conexão! =(";
    }

    // Insert
    $nome = $_POST['nomeCadastro'];
    $nascimento = $_POST['dataNascimento'];
    $telefone = $_POST['numeroTelefone'];
    $email = $_POST['emailAcampamente'];
    $endereco = $_POST['enderecoAcampamente'];
    $camisa = $_POST['tamanhoCamisa'];
    $obs = $_POST['observacoes'];

    $insert = "INSERT INTO cadastros VALUES (null, '$nome', '$nascimento', '$telefone', '$email', '$endereco', '$camisa', '$obs')";
    
    if ($conexao->query($insert)) {
        header("Location: confirmacao.html");
    } else {
        echo "Ocorreu um erro ao tentar realizar sua inscrição, por favor, tente novamente.";
    }
    
    