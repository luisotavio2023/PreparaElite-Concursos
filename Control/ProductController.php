<?php

require_once('../model/Produto.php');

class ProdutoController {
    public function index() {
        $produtos = Produto::getAll();
        include('../view/loja.php');
    }
}
