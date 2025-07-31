<?php

/**
 * Ponto de Entrada (Front Controller)
 * 
 * Este arquivo funciona como ponto de entrada da aplicação BookWise.
 * É responsável por carregar as configurações, dependências e iniciar o roteador.
 * 
 * @package BookWise
 * @version 1.0.0
 */


require_once "functions.php";
require_once "models/Livro.php";

$config = require('config.php');
require_once "database.php";
require_once "routes.php";
