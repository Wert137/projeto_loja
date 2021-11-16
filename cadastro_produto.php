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
		
		<title>Loja Online:: Título da Página</title>
		

		
		
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
				<h1>Cadastro dos produtos</h1>
				
				<form id="formProdutos" method="post" action="cadastrar_produto.php" enctype="multipart/form-data">
					<div class="row">
					<div class="form-group col-sm-12 col-md-6">
						
						<label for="txtNome" class="form-label">Nome</label>
						<input class="form-control" id="txtNome" type="text" name="nome" placeholder="Nome do produto" required>
					</div>
					<div class="col-md-6"></div>

					<div class="form-group col-sm-12 col-md-6">
						
						<label for="txtImagem" class="form-label">Imagem</label>
						<input class="form-control" id="txtImagem" type="file" name="imagem" placeholder="Imagem do produto" accept="image/*" required>
					</div>
					<div class="col-md-6">
						
						<img id = "lblImagem" src="" style="height:150px;width:250px">
					</div>

					<div class="form-group col-sm-12 col-md-6">
						<label for="txtDesc" class="form-label">Descrição</label>
						<textarea class="form-control text-muted bg-light"></textarea>
					</div>
					<div class="col-md-6"></div>
					<div class="col-sm-12 col-md-6">
						
						<label for="txtValor" class="form-label">Preço do Produto</label>

						<input type="text" id="txtValor" class="form-control" required> 
					</div>
					<div class="col-md-6"></div>

					<div class="col-sm-12 col-md-6">
						
						<label for="txtPeso" class="form-label">Peso</label>

						<input type="number" id="txtPeso" class="form-control" required> 
					</div>
					<div class="col-md-6"></div>
					<div class="m-3">
						<input type="submit" class=" btn btn-success" value="Cadastrar produto">
					</div>



				</div>
				</form>
				
				
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
			

			

			$("#txtImagem").change(function(){


				const arq = $(this)[0].files[0];

				var fileReader = new FileReader();

				
				fileReader.onloadend = function(){

					$("#lblImagem").attr("src", (fileReader.result));
				}

				if(arq){
					fileReader.readAsDataURL(arq);
				}
				

				
			});

			
		</script>


	</body>
	
</html>