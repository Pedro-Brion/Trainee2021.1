<?php

namespace App\Controllers;

use App\Core\App;

class UsuariosController
{

    public function view()
    {
        $usuarios = App::get('database')->selectAll('usuarios');

        return viewADM('usuarios',compact('usuarios'));
    }

    public function adicionar()
    {
        $parametros = [
            'nome' => $_POST['nome'],
            'email'=> $_POST['email'],
            'senha'=> $_POST['senha'],
            'foto'=> $_POST['foto']
        ];

        App::get('database')->insertUsuarios('usuarios', $parametros);

        header('Location: /usuarios');
    }

    public function apagar()
    {
        App::get('database')->delete('usuarios', $_POST['id']);

        header('Location: /usuarios');
    }

    public function update()
    {
        $parametros = [
            'nome' => $_POST['nome'],
            'email'=> $_POST['email'],
            'senha'=> $_POST['senha'],
            'foto'=> $_POST['foto']
        ];

        App::get('database')->updateUsuarios('usuarios', $parametros, $_POST['id']);

        header('Location: /usuarios');
    }

}

class CategoriasController
{

    public function view()
    {
        $categorias = App::get('database')->selectAll('categorias');

        return viewADM('categorias',compact('categorias'));
    }

    public function adicionar()
    {
        $parametros = [
            'categoria' => $_POST['categoria']
        ];

        App::get('database')->insertCategorias('categorias', $parametros);

        header('Location: /categorias');
    }

    public function apagar()
    {
        App::get('database')->delete('categorias', $_POST['id']);

        header('Location: /categorias');
    }

    public function update()
    {
        $parametros = [
            'nome' => $_POST['nome']
        ];

        App::get('database')->updateCategorias('categorias', $parametros, $_POST['id']);

        header('Location: /categorias');
    }

}

class ProdutosADMController
{

    public function view()
    {
        $produtos = App::get('database')->selectAll('produtos');
        $categorias = App::get('database')->selectAll('categorias');
        return viewADM('produtos',compact('produtos','categorias'));
    }

    public function create()
    {
        $parametros = [
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'categoria' => $_POST['categoria'],
            'preco'=> $_POST['preco'],
            'foto'=> $_POST['foto']
        ];

        App::get('database')->insertProdutos('produtos', $parametros);

        header('Location: /produtos-adm');
    }

    public function delete()
    {
        App::get('database')->delete('produtos', $_POST['id']);

        header('Location: /produtos-adm');
    }

    public function update()
    {
        $parametros = [
            'nome' => $_POST['nome'],
            'descricao'=> $_POST['descricao'],
            'categoria'=> $_POST['categoria'],
            'preco'=> $_POST['preco'],
            'foto'=> $_POST['foto']
        ];

        App::get('database')->updateProdutos('produtos', $parametros, $_POST['id']);

        header('Location: /produtos-adm');
    }
}

class PagesController
{

    public function viewHome()
    {
        return view('home');
    }

    public function viewQuemSomos()
    {
        return view('quemsomos');
    }

}

class LoginController
{

    public function view()
    {
        return view('login');
    }

}

class ContatoController
{

    public function view()
    {
        return view('contato');
    }

}

class ProdutosController
{

    public function view()
    {
        $produtos = App::get('database')->selectAll('produtos');
        return view('produtos',compact('produtos'));
    }

}

class ProdutoController
{

    public function view()
    { 
        $produtos = App::get('database')->selectById('produtos',$_POST['id']);
        return view('produto',compact('produtos'));
    
    }

}


