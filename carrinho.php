<!doctype html>
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
		
		<title>Loja Online:: Carrinho de Compras</title>
		
		<style>
			input::-webkit-outer-spin-button,
			input::-webkit-inner-spin-button {
				/* display: none; <- Crashes Chrome on hover */
				-webkit-appearance: none;
				margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
			
			}

			input[type=number] {
				-moz-appearance:textfield;
					height:30px;
				
			}
			

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
						<a href="#" class="nav-link text-white">Principal</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link text-white">Política de Privacidade</a>
					</li>
				</ul>
				
			
					<div class="align-self-end">
						<ul class="navbar-nav flex-grow-1">
							<li class="nav-item">
								<a href="#" class="nav-link text-white">Cadastrar</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link text-white">Entrar</a>
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
		
	
			
		<br><br><br>
		
		<main class=" mt-2 mb-md-1 pb-5">
			<div class="container">
				<h1>Carrinho de Compras</h1>
				<hr>
				<ul class="list-group mb-3">
					<li class="list-group-item py-3">
						<div class="row g-3">
							<div class="col-4 col-md-3 col-lg-2">
								<a href="#">
									<img src="img/produtos/000008.jpg" class="img-thumbnail">
								</a>
							</div>
							
							<div class="col-8 col-md-9 col-lg-7 col-x1-8 text-left align-self-center">
							
								<h4><b><a href="#" class="text-decoration-none text-danger">Abacate Manteiga</a></b></h4>
								<h4>
									<small>Abacate manteiga da melhor qualidade possível e muito fresco.</small>
								</h4>
							</div>
							<div class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
								<div class="input-group">
									<a width="16px" class="btn-outline-dark btn-sm">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-square" viewBox="0 0 16 16">
  <path d="M3.626 6.832A.5.5 0 0 1 4 6h8a.5.5 0 0 1 .374.832l-4 4.5a.5.5 0 0 1-.748 0l-4-4.5z"/>
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2z"/>
</svg>
									</a>
									<input type="number" class="form-control text-center border-dark" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
									
									<a width="16px" class="btn-outline-dark btn-sm">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-square" viewBox="0 0 16 16">
									  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
									  <path d="M3.544 10.705A.5.5 0 0 0 4 11h8a.5.5 0 0 0 .374-.832l-4-4.5a.5.5 0 0 0-.748 0l-4 4.5a.5.5 0 0 0-.082.537z"/>
									</svg>
									</a>
								
									<a width="16px" class="btn-outline-dark btn-sm">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
										  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
										  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
										</svg>
									</svg>
									</a>
								
								</div>
							</div>
						</div>
					</li>
				</ul>
				
				
			</div>	
			
		</main>
		
		<div style="height:273px;" class="d-block d-md-none"></div>
		<div style="height:153px;" class="d-none d-md-block d-lg-none"></div>
		<div style="height:129px;" class="d-none d-lg-block"></div>
		
		
		<footer class="border-top fixed-bottom text-muted bg-light mt-3">
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
	</body>
	
</html>