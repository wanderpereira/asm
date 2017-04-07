<?php include("model/connection.php"); ?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>ASM.net </title>
		<link rel="stylesheet" type="text/css" href="view/style.css">
        <link rel="stylesheet" type="text/css" href="view/table.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    	<script src="custom.js"></script>

	</head>
	<body>
<header id="header" class="header header--fixed hide-from-print animated headroom--not-bottom slideDown headroom--top" role="banner">
    <div class="container">
    
        <nav id="nav" class="nav-wrapper" role="navigation">
            <ul class="nav nav--main">
                <li class="nav__item ">
                    <a class="header__link subdued" id="pagina">
                        <span aria-hidden="true" class="icon icon--github"></span>
                        <span class="complimentary push--left">Página Inicial</span>
                    </a>
                </li>
                <li class="nav__item ">
                    <a class="header__link subdued" href="http://aside.epizy.com/">
                        <span aria-hidden="true" class="icon icon--twitter"></span>
                        <span class="complimentary push--left">@Aside.ml</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<article>
<header class="feature">
    <div class="container container--wide feature-title">
        <h1 class="feature-title__title headroom-title">Web Software</h1>
        <img src="logo_asm.png">
        <p class="feature-title__subtitle">&copy; 2017 - ASM (Software de Atendimento Médico). Versão 4.2.1.</p>
    </div>
</header>

<div class="container block main" role="main">

<h2><i class="fa fa-th"></i> Navegar</h2>
<div class="downloads" style="margin-bottom:1em">
    <div class="grid">
        <div class="grid__item one-half"><a class="btn btn--secondary btn--full" id="pacientes">Pacientes</a></div>
        <div class="grid__item one-half"><a class="btn btn--secondary btn--full" id="novo">Criar Novo</a></div>
    </div>
</div>
	<main id="conteudo">
		 
	</main>

    <h2><i class="fa fa-check"></i> Licença</h2>
    <p>
       Licenciado para fins do usuário, <a href="">Aside</a>.
    </p>
    </div>
  </div>
    </div>
    <a class="btt btn btn--plain hide-from-print slide headroom--top headroom--not-bottom" href="#" title="Topo" id="btt"><h2> <i class="fa fa-arrow-circle-up"></i></h2></a>
</article>
	</body>
</html>

