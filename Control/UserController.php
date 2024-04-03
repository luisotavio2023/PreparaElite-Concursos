<?php

 require "../Model/BancodeDados.php";

 class UserController{




    public function CadastrarUsuario($conn) {
        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebe os dados do formulário
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $cpf = $_POST['cpf'];
            $dataNascimento = $_POST['dataNascimento'];
            $descricao = $_POST['descricao'];
            $nacionalidade = $_POST['nacionalidade'];
            
            // Chama a função para cadastrar o usuário
            $resultado = cadastrarUsuario($conexao, $nome, $email, $senha, $cpf, $dataNascimento, $descricao, $nacionalidade);
            
            // Verifica se o cadastro foi bem-sucedido
            if (is_numeric($resultado)) {
                // Redireciona para a página de confirmação de cadastro
                header("Location: confirmacao.php?id=$resultado");
                exit;
            } else {
                // Exibe uma mensagem de erro na página de cadastro
                $mensagemErro = $resultado;
            }
        }
    }
    
 }


?>