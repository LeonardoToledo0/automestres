<?php
class ClassContato
{
    // ATRIBUTOS
    public $idContato;
    public $nomeContato;
    public $emailContato;
    public $telefoneContato;
    public $mensagemContato;
    public $statusContato;
    public $dataContato;
    public $horaContato;


    // LISTAR  
    public function Listar()
    {
        $sql = "SELECT * FROM  tbl_contato WHERE stausContato = ativo ORDER BY dataContato DESC;";
        $conect = Conexao::LigarConexao();
        $resultado = $conect->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    // Inserir
    public function Inserir()
    {
        $sql = "INSERT INTO tbl_contato (nomeContato,emailContato,telefoneContato,mensagemContato)VALUES('" . $this->nomeContato . "','" . $this->emailContato . "','" . $this->telefoneContato . "','" . $this->mensagemContato . "')";
    }
}
