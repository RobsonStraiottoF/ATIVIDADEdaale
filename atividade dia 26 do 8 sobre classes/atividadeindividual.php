<?php

class Produto {
    protected $nome;
    protected $preco;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getNome()
 {
        echo "NOME: " . $this->nome . "<br>";
    }

    public function getPreco() {
        echo "PRECO: " . $this->preco . "<br>";
    }

    public function calcularDesconto() {
        $desconto = $this->preco * 0.50;
        $total = $this->preco - $desconto;
        echo $this->nome . " está com desconto de: " . $total . "<br>";
    }
}

    class ProdutoDigital extends Produto{
        protected $tamanhoArquivo;

        public function calcularDesconto2(){
            $Desconto2 = $this->preco * 0.10;
            $total2 = $this->preco - $Desconto2;
            echo $this->nome ." Está com desconto de:". $total2;
        }

    }


    $produto = new Produto();
    $produto->setNome("Cavalo");
    $produto->setPreco(500);
    
    $produto->getNome();
    $produto->getPreco();
    $produto->calcularDesconto();
    
    $produtoD = new ProdutoDigital();
    $produtoD->setNome("NFT de Cavalo");
    $produtoD->setPreco(5000);
    
    $produtoD->calcularDesconto2();