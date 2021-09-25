<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="icon" type="image/png" href="images/icons/cardapio.ico"/>
		<title>Menu</title>
		<meta name="description" content="Modern effects and styles for off-canvas navigation with CSS transitions and SVG animations using Snap.svg" />
		<meta name="keywords" content="sidebar, off-canvas, menu, navigation, effect, inspiration, css transition, SVG, morphing, animation" />
		<meta name="author" content="Codrops" />
	
		<link rel="shortcut icon" href="../cardapio.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_topside.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="menu-wrap">
				<nav class="menu-top">
					<div class="profile"><img src="images/nm.png" alt=""/><span></span></div>
					<div class="icon-list">
						<a href="#"><i class="fa fa-fw fa-star-o"></i></a>
						<a href="#"><i class="fa fa-fw fa-bell-o"></i></a>
						<a href="#"><i class="fa fa-fw fa-envelope-o"></i></a>
						<a href="#"><i class="fa fa-fw fa-comment-o"></i></a>
					</div>
				</nav>
				<nav class="menu-side">
					<a href="#">Cadastrar</a>
					<a href="#">Minha Listagem</a>
					<a href="#">Excluir</a>
					<a href="#">Configurações</a>
				</nav>
			</div>
			<button class="menu-button" id="open-button">Open Menu</button>
			<div class="content-wrap">
				<div class="content">
					<header class="codrops-header">
					
						<div class="codrops-links">
						
							<a class="codrops-icon codrops-icon-prev" href="index.html"><span>Retornar a página Inicial</span></a>
							<a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=20100"><span>Resetar conta</span></a>
							<?php
								$user =  $_GET['email'];
								echo '<a class="inactiveLink"><span>Seja Bem Vindo '.$user.' !</span></a>';
							?>
						
						</div>
						<h1>Gerêncie sua arquitetura<span>Escolha o que deseja fazer</span></h1>
					
						<nav class="codrops-demos">
							<a href="cadastrarR.html" href="index.html">Cadastrar Rede</a>
							<a href="listagem.html">Minha Listagem</a>
							<a href="excluir.html">Excluir </a>
							<a href="alter.html">Alterar</a>
							<a href="myhardwares.html">Hardwares</a>
							<a href="conf.html">Configurações</a>
			
						</nav>
						
					</header>
					<!-- Related demos -->
					<section class="related">
						<p>Ajude-nos compartilhando nas suas redes sociais</p>
						
					</section>
				</div>
			</div><!-- /content-wrap -->
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/mainx.js"></script>
	</body>
</html>