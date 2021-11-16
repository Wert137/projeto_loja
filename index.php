<!doctype html>
<?php ?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		
		<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
		<link rel="manifest" href="img/favicon/site.webmanifest">
		<link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="img/favicon/favicon.ico">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-config" content="img/favicon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
		
		<title>Loja Online</title>
		<style>
			
			p.linhas3{
				
				display:-webkit-box;
				-webkit-line-clamp:5;
				-webkit-box-orient:vertical;
				overflow:hidden;
				text-overflow:ellipsis;
			}
			
		</style>
		
		
	</head>
	<body style="min-width:372px;">
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger border-bottom shadow-sm mb-3">
		
			<div class="container">
				<a class="navbar-brand" href="#"><strong>Loja Online</strong></a>
			
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#elemento">
			
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div id ="elemento" class="navbar-collapse collapse">
				<ul class="navbar-nav flex-grow-1">
					<li class="nav-item">
						<a href="index.php" class="nav-link text-white">Principal</a>
					</li>
					<li class="nav-item">
						<a href="privacidade.php" class="nav-link text-white">Política de Privacidade</a>
					</li>
				</ul>
				
			
					<div class="align-self-end">
						<ul class="navbar-nav flex-grow-1">
							<li class="nav-item">
								<a href="cadastro.php" class="nav-link text-white">Cadastrar</a>
							</li>
							<li class="nav-item">
								<a id="entrar" href="" data-toggle="dropdown" class="nav-link text-white">Entrar</a>
								<div class="container">
									<ul class="dropdown-menu dropdown-menu-right bg-danger" aria-labelldby="entrar">
										
										<div class="col-md-12">
											<form method="post" action="" id="formLogin">
												
												<div class="form-group">
													
													<input type="email" class="form-control" id="campo_email" name="email" placeholder="Email do Usuário">
												</div>

												<div class="form-group">
													
													<input type="password" class="frm-control red" id="campo_senha" name="senha" placeholder="Digite a senha">
												</div>

												<button type="button" class="btn btn-primary" id="btn_login">Entrar</button>

												<br><br>
											</form>

										</div>

									</ul>
								</div>

							</li>
							<li class="nav-item">
								<a href="#" class="nav-link text-white">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
										<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
									</svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		
		<header class="container mt-5">
			<div id="carrosselMain" class="carousel carousel-dark slide" data-ride="carousel">
				
				 <ol class="carousel-indicators text-dark">
					<li data-target="#carrosselMain" data-slide-to="0" class="active"></li>
					<li data-target="#carrosselMain" data-slide-to="1"></li>
					<li data-target="#carrosselMain" data-slide-to="2"></li>
				</ol>
				
				<div class="carousel-inner" >
					<div class="carousel-item active text-center" data-interval="3000">
						<img src="img/slides/slide01.jpg" class="img-fluid d-none d-md-block">
						<img src="img/slides/slide01small.jpg" class="img-fluid d-block d-md-none">
					</div>
					
					<div class="carousel-item text-center" data-interval="3000">
						<img src="img/slides/slide01.jpg" class="img-fluid d-none d-md-block">
						<img src="img/slides/slide01small.jpg" class="img-fluid d-block d-md-none">
					</div>
					
					<div class="carousel-item text-center" data-interval="3000">
						<img src="img/slides/slide01.jpg" class="img-fluid d-none d-md-block">
						<img src="img/slides/slide01small.jpg" class="img-fluid d-block d-md-none">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carrosselMain" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
					<!--<span class="visually-hidden">Anterior</span-->
				</a>
				
				<a class="carousel-control-next" href="#carrosselMain" role="button" data-slide="next">
					<span class="carousel-control-next-icon"></span>
					<!--span class="visually-hidden">Próximo</span-->
				</a>
			</div>
			<hr class="mt-3">
		</header>
		
		<main class="mb-5  mb-md-1 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-5">
						<form class="justify-content-center justify-content-md-start mb-3 mb-md-0">
							<div class="input-group input-group-sm">
								<input type="text" class="form-control" placeholder="Digite aqui o que procura">
								
								<button class="btn btn-danger ml-2">Buscar</button>
							</div>
						</form>
					</div>
					<div class="col-12 col-md-7">
						<div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
							<form class="ml-3 d-inline-block">
								<select class="form-select form-select-sm">
									<option>Ordenar pelo nome</option>
									<option>Ordenar pelo menor preço</option>
									<option>Ordenar pelo maior preço</option>
								</select>
							</form>
							<nav class="d-inline-block">
								<ul class="pagination paginarion-sm my-0">
									<li class="page-item">
										<button class="page-link">1</button>
									</li>
									<li class="page-item">
										<button class="page-link">2</button>
									</li>
									<li class="page-item disabled">
										<button class="page-link">3</button>
									</li>
									<li class="page-item">
										<button class="page-link">4</button>
									</li>
									<li class="page-item">
										<button class="page-link">5</button>
									</li>
									<li class="page-item">
										<button class="page-link">6</button>
									</li>
									
								</ul>
							</nav>
						</div>
					</div>
				</div>
					<hr class="mt-3">
					
					<div class="row g-3">
							<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-5">
								<div class="card text-center bg-light">
									<a href="" class="position-absolute left=5 p-2 text-danger">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
									  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
										</svg>
									</a>
									
									<img src="img/produtos/000001.jpg"  class="card-img-top" alt="" />
									<div class="card-header">
										R$ 4,50
									</div>
									
									<div class="card-body">
										<h5 class="card-title">Banana Prata</h5>
										
										<p class="card-text linhas3">
										Banana prata da melhor qualidade possível, direto do produtor para sua mesa.
										
										</p>
									</div>
									
									<div class="card-footer">
											<form class="d-block">
												<button class="btn btn-danger">Adiconar ao carrinho</button>
											</form>
											<small class="text-success">320,5kg em estoque</small>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-5">
								<div class="card text-center bg-light">
									
									<a href="" class="position-absolute left=5 p-2 text-danger">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
									  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
										</svg>
									</a>
									<img src="img/produtos/000002.jpg" alt="" />
									<div class="card-header">
										R$ 4,50
									</div>
									
									<div class="card-body">
										<h5 class="card-title">Banana Prata</h5>
										
										<p class="card-text linhas3">Banana prata da melhor qualidade possível, direto do produtor para sua mesa.
										
										</p>
									</div>
									
									<div class="card-footer">
											<form class="d-block">
												<button class="btn btn-danger">Adiconar ao carrinho</button>
											</form>
											<small class="text-success">320,5kg em estoque</small>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-5">
								<div class="card text-center bg-light">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
									  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
									</svg>
									
									<img src="img/produtos/000003.jpg" alt="" />
									<div class="card-header">
										R$ 4,50
									</div>
									
									<div class="card-body">
										<h5 class="card-title">Banana Prata</h5>
										
										<p class="card-text linhas3">Banana prata da melhor qualidade possível, direto do produtor para sua mesa.
										
										</p>
									</div>
									
									<div class="card-footer">
										<div>
											<button class="btn btn-light disabled" disabled>
												<small>Reabastecendo Estoque</small>
												
											</button>
										</div>
										<small class="text-danger"><b>Produto Esgotado</b></small>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-5">
								<div class="card text-center bg-light">
									<a href="" class="position-absolute left=5 p-2 text-danger">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
									  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
										</svg>
									</a>
									
									<img src="img/produtos/000004.jpg" alt="" />
									<div class="card-header">
										R$ 4,50
									</div>
									
									<div class="card-body">
										<h5 class="card-title">Banana Prata</h5>
										
										<p class="card-text linhas3">Banana prata da melhor qualidade possível, direto do produtor para sua mesa.
										
										</p>
									</div>
									
									<div class="card-footer">
											<form class="d-block">
												<button class="btn btn-danger">Adiconar ao carrinho</button>
											</form>
											<small class="text-success">320,5kg em estoque</small>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-5">
								<div class="card text-center bg-light">
									<a href="" class="position-absolute left=5 p-2 text-danger">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
									  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
										</svg>
									</a>
									
									<img src="img/produtos/000005.jpg" alt="" />
									<div class="card-header">
										R$ 4,50
									</div>
									
									<div class="card-body">
										<h5 class="card-title">Banana Prata</h5>
										
										<p class="card-text linhas3">Banana prata da melhor qualidade possível, direto do produtor para sua mesa.
										
										</p>
									</div>
									
									<div class="card-footer">
											<form class="d-block">
												<button class="btn btn-danger">Adiconar ao carrinho</button>
											</form>
											<small class="text-success">320,5kg em estoque</small>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-5">
								<div class="card text-center bg-light">
									<a href="" class="position-absolute left=5 p-2 text-danger">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
									  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
										</svg>
									</a>
									
									<img src="img/produtos/000006.jpg" alt="" />
									<div class="card-header">
										R$ 4,50
									</div>
									
									<div class="card-body">
										<h5 class="card-title">Banana Prata</h5>
										
										<p class="card-text linhas3">Banana prata da melhor qualidade possível, direto do produtor para sua mesa.
										
										</p>
									</div>
									
									<div class="card-footer">
											<form class="d-block">
												<button class="btn btn-danger">Adiconar ao carrinho</button>
											</form>
											<small class="text-success">320,5kg em estoque</small>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-5">
								<div class="card text-center bg-light">
									<a href="" class="position-absolute left=5 p-2 text-danger">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
									  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
										</svg>
									</a>
									
									<img src="img/produtos/000007.jpg" alt="" />
									<div class="card-header">
										R$ 4,50
									</div>
									
									<div class="card-body">
										<h5 class="card-title">Banana Prata</h5>
										
										<p class="card-text linhas3">Banana prata da melhor qualidade possível, direto do produtor para sua mesa.
										
										</p>
									</div>
									
									<div class="card-footer">
											<form class="d-block">
												<button class="btn btn-danger">Adiconar ao carrinho</button>
											</form>
											<small class="text-success">320,5kg em estoque</small>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-5">
								<div class="card text-center bg-light">
									<a href="" class="position-absolute left=5 p-2 text-danger">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
									  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
										</svg>
									</a>
									
									<img src="img/produtos/000008.jpg" alt="" />
									<div class="card-header">
										R$ 4,50
									</div>
									
									<div class="card-body">
										<h5 class="card-title">Banana Prata</h5>
										
										<p class="card-text linhas3">Banana prata da melhor qualidade possível, direto do produtor para sua mesa.
										
										</p>
									</div>
									
									<div class="card-footer">
											<form class="d-block">
												<button class="btn btn-danger">Adiconar ao carrinho</button>
											</form>
											<small class="text-success">320,5kg em estoque</small>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-5">
								<div class="card text-center bg-light">
									<a href="" class="position-absolute left=5 p-2 text-danger">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
									  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
										</svg>
									</a>
									
									<img src="img/produtos/000009.jpg" alt="" />
									<div class="card-header">
										R$ 4,50
									</div>
									
									<div class="card-body">
										<h5 class="card-title">Banana Prata</h5>
										
										<p class="card-text linhas3">Banana prata da melhor qualidade possível, direto do produtor para sua mesa.
										
										</p>
									</div>
									
									<div class="card-footer">
											<form class="d-block">
												<button class="btn btn-danger">Adiconar ao carrinho</button>
											</form>
											<small class="text-success">320,5kg em estoque</small>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-5">
								<div class="card text-center bg-light">
									<a href="" class="position-absolute left=5 p-2 text-danger">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
									  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
										</svg>
									</a>
									
									<img src="img/produtos/000010.jpg" alt="" />
									<div class="card-header">
										R$ 4,50
									</div>
									
									<div class="card-body">
										<h5 class="card-title">Banana Prata</h5>
										
										<p class="card-text linhas3">Banana prata da melhor qualidade possível, direto do produtor para sua mesa.
										
										</p>
									</div>
									
									<div class="card-footer">
											<form class="d-block">
												<button class="btn btn-danger">Adiconar ao carrinho</button>
											</form>
											<small class="text-success">320,5kg em estoque</small>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-5">
								<div class="card text-center bg-light">
									<a href="" class="position-absolute left=5 p-2 text-danger">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
									  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
										</svg>
									</a>
									
									<img src="img/produtos/000011.jpg" alt="" />
									<div class="card-header">
										R$ 4,50
									</div>
									
									<div class="card-body">
										<h5 class="card-title">Banana Prata</h5>
										
										<p class="card-text linhas3">Banana prata da melhor qualidade possível, direto do produtor para sua mesa.
										
										</p>
									</div>
									
									<div class="card-footer">
											<form class="d-block">
												<button class="btn btn-danger">Adiconar ao carrinho</button>
											</form>
											<small class="text-success">320,5kg em estoque</small>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-stretch mb-5">
								<div class="card text-center bg-light">
									<a href="" class="position-absolute left=5 p-2 text-danger">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
									  <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
										</svg>
									</a>
									
									<img src="img/produtos/000012.jpg" alt="" />
									<div class="card-header">
										R$ 4,50
									</div>
									
									<div class="card-body">
										<h5 class="card-title">Banana Prata</h5>
										
										<p class="card-text linhas3">Banana prata da melhor qualidade possível, direto do produtor para sua mesa.
										
										</p>
									</div>
									
									<div class="card-footer">
											<form class="d-block">
												<button class="btn btn-danger">Adiconar ao carrinho</button>
											</form>
											<small class="text-success">320,5kg em estoque</small>
									</div>
								</div>
							</div>
							
							
					</div>
					<hr class="mt-3">
					<div class="row pb-4">
						<div class="col-12">
							<div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
							<form class="ml-3 d-inline-block">
								<select class="form-select form-select-sm">
									<option>Ordenar pelo nome</option>
									<option>Ordenar pelo menor preço</option>
									<option>Ordenar pelo maior preço</option>
								</select>
							</form>
							<nav class="d-inline-block">
								<ul class="pagination paginarion-sm my-0">
									<li class="page-item">
										<button class="page-link">1</button>
									</li>
									<li class="page-item">
										<button class="page-link">2</button>
									</li>
									<li class="page-item disabled">
										<button class="page-link">3</button>
									</li>
									<li class="page-item">
										<button class="page-link">4</button>
									</li>
									<li class="page-item">
										<button class="page-link">5</button>
									</li>
									<li class="page-item">
										<button class="page-link">6</button>
									</li>
									
								</ul>
							</nav>
						</div>
						</div>
					</div>
			</div>
			
		</main>
		
		<div style="height:273px;" class="d-block d-md-none"></div>
		<div style="height:153px;" class="d-none d-md-block d-lg-none"></div>
		<div style="height:129px;" class="d-none d-lg-block"></div>
		
		
		<footer class="border-top bottom text-muted bg-light mt-3">
			<div class="container">
				<div class="row py-3">
					<div class="col-12 col-md-4 text-center text-md-left">
						&copy 2021 - Loja Online
					</div>
					
					<div class="col-12 col-md-4 text-center">
						<a href="privacidade.php" class="text-decoration-none text-dark">Política de Privacidade</a><br>
						<a href="termos.php" class="text-decoration-none text-dark">Termos de Uso</a><br>
						<a href="quem_somos.php" class="text-decoration-none text-dark">Quem somos</a><br>
						<a href="trocas.php" class="text-decoration-none text-dark">Trocas e Devoluções</a>
					</div>
					
					
					
					<div class="col-12 col-md-4 text-center text-md-right">
						<a href="#" class="text-decoration-none text-dark">Administrar</a>

					</div>
				</div>
			</div>
		</footer>
		
		
		
		
		<script src="jquery-3.3.1.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap.bundle.js"></script>
	
		<script type="text/javascript">
			
			function mostrar(){
				
				
			}
		</script>
	</body>
	
</html>