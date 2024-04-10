<?php

require_once('../model/Produto.php');

class ProdutoController {
    private $produtocontroller;


    public function index() {
        $produtos = Produto::getAll();
        include('../view/loja.php');
    }
}
