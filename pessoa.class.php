<?php


class Pessoa{
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    public function getNome(){
      return  $this ->nome;
    }
    public function setNome($nome){
     $this ->nome = $nome;
    }
    pulic function getEndereco(){
        return $this ->endereco;
    }
    public function setEndereco($endereco){
        $this ->endereco = $endereco;
    }
}
?>