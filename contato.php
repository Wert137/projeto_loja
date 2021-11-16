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
		
		<title>Loja Online:: Contato</title>
		
		
		
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
				
				
				<div id="modalMensagem" class="modal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								Mensagem
								<button class="close" onclick="mostrarFechar()">
									 <span aria-hidden="true">&times;</span>
								</button>
								
							</div>
							<div class="modal-body display-5">
								
								Sua mensagem foi enviada com êxito.
								
								<p class="mt-3">
										Faremos nosso melhor para responder sua mensagem em até 2 dias úteis.
									</p>
									
									<p class="mt-3">
										Atenciosamente, <br>
										Central de Relacionamento Loja Online
									</p>
							</div>
							
							<div class="modal-footer"></div>
						</div>
					</div>
							
							
				</div>


				<div class="row justify-content-center">
					<form class="col-sm-10 col-md-8 col-lg-6" action="">
						
						
						
						<h1 class="mb-3">Entre em contato</h1>
						
						<div class="form-floating mb-3">
							<label for="txtNome">Nome Completo</label>
							<input type="text" class="form-control" id="txtNome" placeholder=" ">
							
						</div>
						
						<div class="form-floating mb-3">
							<label for="txtEmail">Email</label>
							<input type="text" class="form-control" id="txtEmail" placeholder=" ">
							
						</div>
						
						<div class="form-floating mb-3">
							<label for="txtMensagem">Mensagem</label>
							<textarea style="height:200px" class="form-control"id="txtMensagem" placeholder=" "></textarea>
							
						</div>
						
						
						
						
						
					</form>
					
				
				
			
					</div>
					
					<div class="row justify-content-center mt-1">
					<div class="col-3"></div>
					<div class="col-8">
						<button class="btn btn-g btn-danger" onclick="mostrarFechar()">Enviar Mensagem</button>
						
									
								
					</div>
					<div class="col-1"></div>
					
				</div>
				
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
		<script type="text/javascript">
		
		function mostrarFechar(){
			 $("#modalMensagem").modal("toggle");
		}
		
		
		
		</script>
	</body>
	
</html>