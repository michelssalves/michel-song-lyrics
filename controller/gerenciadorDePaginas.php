<?php 

$p = $_REQUEST['p'];

$acao = $_REQUEST['acao'];


$pag[1] = 'view/paginaInicial.view.php';
$pag[2] = 'view/chequesDevolvidos.view.php';
$pag[3] = 'view/lista-de-tarefas/index.php';
$pag[4] = 'view/lista-de-tarefas/index.php';


if (!$p){
	 
	$p = 1; 
}

$active[$p] = 'active';

include ('view/menuLateral.view.php');

include "$pag[$p]"; 
