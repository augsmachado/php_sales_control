<?php

    class Contato {
        private $nome;
        private $email;
        private $mensagem;

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setMensagem($mensagem) {
            $this->mensagem = $mensagem;
        }

        public function getMensagem() {
            return $this->mensagem;
        }

        public function salvar($conexao, $nome, $email, $msg) {
            mysqli_query($conexao, "INSERT INTO contato (nome, email, mensagem) VALUES ('$nome', '$email', '$msg')") or print(mysqli_erro());
            return 1;
        }

        public function listar($conexao) {
            $sql = mysqli_query($conexao, "SELECT * FROM contato ORDER BY nome asc");

            echo "<table border=1> 
                    <tr align=center>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Mensagem</th>
                        <th>Modificar</th>
                    </tr>";

            while($linha = mysqli_fetch_array($sql)){
                $id = $linha["id"];
                $nome = $linha["nome"];
                $email = $linha["email"];
                $mensagem = $linha["mensagem"];	
                    
                echo "  <tr align=center>
                            <td>$id</td>
                            <td>$nome</td>
                            <td>$email</td>
                            <td>$mensagem</td>
                            <td><a title='Excluir' href='excluir.php?id=$id'>Excluir</a> | 
                            <a title='Editar' href='editar.php?id=$id&acao=editar'>Editar</a></td>
                        </tr>";
            }
            echo "</table><br>"	;
        }

        public function excluir($conexao, $id) {
            $sql = mysqli_query($conexao, "DELETE FROM contato WHERE id=".$id) or print(mysqli_erro());
        }

        public function editar($conexao, $id, $nome, $email, $msg) {
            $sql = mysqli_query($conexao, "UPDATE contato SET nome='.$nome.', email='.$email.', mensagem='.$msg.' WHERE contato.id=".$id) or print(mysqli_erro());
        }

        public function login($conexao, $login, $senha) {
            $autenticaLogin = mysqli_query($conexao, "SELECT login FROM usuario WHERE login='".$login."'") or print(mysqli_erro());
            $autenticaSenha = mysqli_query($conexao, "SELECT senha FROM usuario WHERE senha='".$senha."'") or print(mysqli_erro());

            $resultLogin = mysqli_fetch_array($autenticaLogin, MYSQLI_ASSOC);
            $resultSenha = mysqli_fetch_array($autenticaSenha, MYSQLI_ASSOC);

            if(($resultLogin['login'] == $login) && ($resultSenha['senha'] == $senha)) {
                header('Location: listar.php');
            } else if(($resultLogin['login'] != $login) && ($resultSenha['senha'] == $senha)) {
                echo "Login incorreto!<br><br>";
            } else if(($resultSenha['senha'] != $senha) && ($resultLogin['login'] == $login)) {
                echo "Senha incorreta!<br><br>";
            } else {
                echo "Login e senha incorretos!<br><br>";
            }
        }
    }
?>