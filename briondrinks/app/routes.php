<?php

//Usuarios Controller
$router->get('usuarios','UsuariosController@view');
$router->post('usuarios','UsuariosController@adicionar');
$router->post('usuarios/delete','UsuariosController@apagar');
$router->post('usuarios/update','UsuariosController@update');

//Categorias Controller
$router->get('categorias','CategoriasController@view');
$router->post('categorias','CategoriasController@adicionar');
$router->post('categorias/delete','CategoriasController@apagar');
$router->post('categorias/update','CategoriasController@update');

//ProdutosADM Controller
$router->get('produtos-adm','ProdutosADMController@view');
$router->post('produtos-adm','ProdutosADMController@create');
$router->post('produtos-adm/delete','ProdutosADMController@delete');
$router->post('produtos-adm/update','ProdutosADMController@update');

//Pages Controller
$router->get('home','PagesController@viewHome');
$router->get('quemsomos','PagesController@viewQuemSomos');

//Login Controller
$router->get('login','LoginController@view');

//Contato Controller
$router->get('contato','ContatoController@view');

//Produtos Controller
$router->get('produtos','ProdutosController@view');

//Produto Controller
$router->post('produto','ProdutoController@view');

?>
