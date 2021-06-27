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

session_start();

class LoginController
{

    public function view()
    {
        return view('login');
    }
    
    public function login()
    {
        $email = $_GET['email'] ?? '';
        $senha = $_GET['senha'] ?? '';


        if( $email == 'admin' && $senha == 'admin') {
            $_SESSION['usuario'] = 'admin';

            header('Location: /usuarios');
        }

        $usuarios = App::get('database')->selectAll('usuarios');

        foreach ($usuarios as $usuario) :

        if( $usuario->email == $email && $usuario->senha == $senha) 
        { 
            $_SESSION['usuario'] = $usuario->nome;
      
            header('Location: /usuarios');
        }
        endforeach;

        $_SESSION['error'] = true;
        header('Location: /login');
    }

    public function deslogar() 
    {
        session_unset();
        session_destroy();
        header('Location: /login');
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
        $produtosPorPagina = "8";
        $pagina = $_GET['pagina'] ?? 1;
        $inicio = $pagina - 1;
        $inicio = $inicio * $produtosPorPagina;
        $limite = 'LIMIT ' . $inicio . ',' . $produtosPorPagina;

        $produtos = App::get('database')->selectAll('produtos');
        $totalProdutos = count($produtos); 
        $produtos2 = App::get('database')->selectAll2('produtos');
        $totalPaginas = $totalProdutos / $produtosPorPagina;

        $produtos = App::get('database')->selectAllPaginacao($limite,$produtos2);
        $categorias = App::get('database')->selectAll('categorias');

        $paginacao = new \stdClass();
        $paginacao->pagina = $pagina;
        $paginacao->totalPaginas = $totalPaginas;
        $paginacao->totalProdutos = $totalProdutos;
        $paginacao->produtosPorPagina = $produtosPorPagina;
        $paginacao->inicio = $inicio;

        return view('produtos',compact('produtos','categorias','paginacao'));
    }

}

class ResultsController
{

    public function busca()
    {
        $produtosPorPagina = "8";
        $pagina = $_GET['pagina'] ?? 1;
        $inicio = $pagina - 1;
        $inicio = $inicio * $produtosPorPagina;
        $limite = 'LIMIT ' . $inicio . ',' . $produtosPorPagina;

        //Filtro e Busca vazios
        if (empty($_GET['buscar']) && empty($_GET['categoria']))
        {
            

            
            $produtos = App::get('database')->selectAll('produtos');
            $totalProdutos = count($produtos);
            $produtos2 = App::get('database')->selectAll2('produtos');
            $totalPaginas = $totalProdutos / $produtosPorPagina;

            $produtos = App::get('database')->selectAllPaginacao($limite,$produtos2);
            $categorias = App::get('database')->selectAll('categorias');

            $paginacao = new \stdClass();
            $paginacao->pagina = $pagina;
            $paginacao->totalPaginas = $totalPaginas;
            $paginacao->totalProdutos = $totalProdutos;
            $paginacao->produtosPorPagina = $produtosPorPagina;
            $paginacao->inicio = $inicio;

        return view('produtos',compact('produtos','categorias','paginacao'));    
        }
        //Filtro vazio
        else if (!empty($_GET['buscar']) && empty($_GET['categoria']))
        {

            $buscar = $_GET['buscar'];

            $produtos = App::get('database')->buscar('produtos', $buscar);
            $totalProdutos = count($produtos);
            $produtos2 = App::get('database')->buscar2('produtos', $buscar);


            $totalPaginas = $totalProdutos / $produtosPorPagina;

            $produtos = App::get('database')->selectAllPaginacao($limite,$produtos2);

            $paginacao = new \stdClass();
            $paginacao->pagina = $pagina;
            $paginacao->totalPaginas = $totalPaginas;
            $paginacao->totalProdutos = $totalProdutos;
            $paginacao->produtosPorPagina = $produtosPorPagina;
            $paginacao->inicio = $inicio;

            $categorias = App::get('database')->selectAll('categorias');

            return view('produtos',compact('produtos','categorias','paginacao'));
        }
        //Busca vazia
        else if (empty($_GET['buscar']) && !empty($_GET['categoria']))
        {
            $filtro = array();

            $filtro[] = $_GET['categoria'];

            $produtos = App::get('database')->filtrar('produtos', $filtro[0]);
            $totalProdutos = count($produtos); 
            $produtos2 = App::get('database')->filtrar2('produtos', $filtro[0]);
            $totalPaginas = $totalProdutos / $produtosPorPagina;

            $produtos = App::get('database')->selectAllPaginacao($limite,$produtos2);

            $paginacao = new \stdClass();
            $paginacao->pagina = $pagina;
            $paginacao->totalPaginas = $totalPaginas;
            $paginacao->totalProdutos = $totalProdutos;
            $paginacao->produtosPorPagina = $produtosPorPagina;
            $paginacao->inicio = $inicio;

            $categorias = App::get('database')->selectAll('categorias');

            return view('produtos',compact('produtos','categorias','paginacao'));
        }
        //Nada vazio
        else 
        {
            $filtro = array();

            $filtro[] = $_GET['categoria'];

            $buscar = $_GET['buscar'];

            $produtos = App::get('database')->buscarFiltrar('produtos', $buscar, $filtro[0]);
            $totalProdutos = count($produtos); 
            $produtos2 = App::get('database')->buscarFiltrar2('produtos', $buscar, $filtro[0]);
            $totalPaginas = $totalProdutos / $produtosPorPagina;

            $produtos = App::get('database')->selectAllPaginacao($limite,$produtos2);

            $paginacao = new \stdClass();
            $paginacao->pagina = $pagina;
            $paginacao->totalPaginas = $totalPaginas;
            $paginacao->totalProdutos = $totalProdutos;
            $paginacao->produtosPorPagina = $produtosPorPagina;
            $paginacao->inicio = $inicio;

            $categorias = App::get('database')->selectAll('categorias');

            return view('produtos',compact('produtos','categorias','paginacao'));
        }
        
        
        
        
    }

}

class ProdutoController
{

    public function view()
    { 
        
        //$id = $_GET['id'];
            //$produto = App::get('database')->selectById('produtos',$id);
            //return view('produto', compact('produto'));
        
        $produtos = App::get('database')->selectById('produtos',$_GET['id']);
        return view('produto',compact('produtos'));
    
    }

}


