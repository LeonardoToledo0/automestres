<?php
class Conexao
{
    // metodo
    public static function LigarConexao()
    {
        $host = 'localhost'; // Host do banco de dados (normalmente é localhost)
        $dbname = 'db_auto_mestre'; // Nome do banco de dados
        $username = 'root'; // Nome de usuário do banco de dados
        $password = ''; // Senha do banco de dados

        try {
            // Cria uma nova conexão PDO
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

            // Configuração de opções de erro PDO
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            // Em caso de erro, mostra a mensagem de erro
            echo "Erro de conexão: " . $e->getMessage();
        }
    }
}
