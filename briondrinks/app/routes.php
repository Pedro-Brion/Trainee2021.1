<?php

$router->get('produtos','ProdutosController@view');
$router->post('produtos','ProdutosController@create');
$router->post('produtos/delete','ProdutosController@delete');

?>