<?php

namespace App\Controllers;

use App\Core\App;

class ProdutosController
{

    public function view()
    {
        $produtos = App::get('database')->selectAll('produtos');
        return view('produtos',compact('produtos'));
    }

    public function create()
    {
        $parametros = [
            'nome' => $_POST['nome'],
            'preco'=> $_POST['preco']
        ];

        App::get('database')->insert('produtos', $parametros);

        header('Location: /produtos');
    }
    public function delete()
    {
        App::get('database')->delete('produtos', $_POST['id']);

        header('Location: /produtos');
    }
}