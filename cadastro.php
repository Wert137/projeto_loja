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
		
		<title>Loja Online:: Cadastro de Clientes </title>
		
		
		
	</head>
	<body style="min-width:372px;">
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger border-bottom shadow-sm mb-3">
		
			<div class="container">
				<a class="navbar-brand" href="index.php"><strong>Loja Online</strong></a>
			
			
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
				<!--h1>Cadastro</h1>
				<hr>
				<form>
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<fieldset class="row bg-light">
								<legend>Dados Pessoais</legend>
								<div class="col-12 mb-3">
									<label for="txtNome" class="form-label">Nome</label>
									<input id="txtNome" type="text" class="form-control">
								</div>
								
								<div class="col-md-6 col-xl-5 mb-3">
									<label for="txtCPF"CPF class="form-label">CPF</label>
									<span class="text-muted">(somente números)</span>
									<input id="txtCPF"  type="text" class="form-control">
								</div>
								
								<div class="col-md-6 col-xl-5 mb-3">
									<label for="txtData"class="form-label">Data de nascimento</label>
									
									<input id="txtData"  type="date" class="form-control">
								</div>
							</fieldset>
								
							<fieldset class="row bg-light">
								<legend>Contato</legend>
								
								

								<div class="col-md-8 col-sm-12 mb-3">
									<label for="txtEmail" class="form-label">Email</label>
									<input id="txtEmail" type="email" class="form-control">
								</div>
								
								<div class="col-md-6  col-sm-12 mb-3">
									<label for="txtTelefone" class="form-label">Telefone</label>
									<input id="txtTelefone" type="tel" class="form-control" placeholder = "(00) 0000-0000">
									<span class="text-muted">(com DDD, somente números)</span>
								</div>
							</fieldset>
						</div>
						
						<div class="mb-3 col-sm-12 col-md-6">
							<fieldset class="row">
								<legend>Endereço</legend>
								
								<div class="col-lg-3">
									<label for="txtCEP" class="form-label">CEP</label>
								</div>
								<div class="input-group">
									<div class="col-md-6 col-lg-4">
										
										<input type="text" class="form-control" id="txtCEP">
									</div>
									<span class="inout-group-text p-1 col-lg-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
										  <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
										</svg>
									</span>
									<div class="col-md-6 col-lg-7">
										<textarea class="form-control text-muted bg-light" disabled>Digite o CEP para buscarmos o endereço.</textarea>
									</div>
									
									
								</div>
								
								<div class="mb-3 col-6">
										<label for="txtNumero" class="form-label">Número</label>
										<input id="txtNumero" type="text" class="form-control">
									</div>
								
									<div class="mb-3 col-6">
										<label for="txtComplemento" class="form-label">Complemento</label>
										<input id="txtComplemento" type="text" class="form-control">
									</div>
									
									<div class="mb-3 col-6">
										<label for="txtReferencia" class="form-label">Referencia</label>
										<input id="txtReferencia" type="text" class="form-control">
									</div>
									
								
							</fieldset>
							<fieldset>
								<legend>Senha de Acesso</legend>
								<div class="mb-3">
										<label for="txtSenha" class="form-label">Senha</label>
										<input id="txtSenha" type="password" class="form-control">
									</div>
								
									<div class="mb-3">
										<label for="txtConfSenha" class="form-label">Confirmar Senha</label>
										<input id="txtConfSenha" type="password" class="form-control">
									</div>
									
									
								
							</fieldset>
						</div>
						
					</div>
					
					<hr>
					
					<div class="form-check mb-3">
						<input type="checkbox" class="form-check-input" value="" id="chkPromocoes">
						<label for="chkPromocoes" class="form-check-label">Desejo receber informações sobre promoções</label>
					</div>
					
					<div class="mb-3">
						<a class="btn tbn-light btn-outline-danger" href="index.php">Cancelar</a>
						<input type="button" value="Criar meu cadastro" class="btn btn-danger"
						onclick="window.location.href='confirmarCadastro.php'">
					</div>
				</form-->

				<ul id="tab-botoes "class="nav nav-pills" role="tablist">
					
					<li class="active mr-3">
						<a href="#form-pessoal"class="btn btn-success" data-toggle="pill">
								Pessoa Física
						</a>
					</li>
					<li>
						<a href="#form-empresa"class="btn btn-success" data-toggle="pill">
								Pessoa Jurídica
						</a>
					</li>

				</ul>

				<div class="tab-content">
					
					<div id ="form-pessoal"class="tab-pane active">
							<form method="POST" action="cadastrar_pessoa.php">
						<fieldset class="row bg-light">
								<legend>Dados Pessoais</legend>
							

								<div class=" col-sm-12 col-md-8 mb-3">
									<label for="txtNome" class="form-label">Nome</label>
									<input id="txtNome" name="nome" type="text" class="form-control" width = "30px" minlength="8" required>
								</div>
								<div class=" col-md-2 mb-3"></div>
								
								
								<div class=" col-md-2 mb-3"></div>
								<div class=" col-sm-12 col-md-8 mb-3">
									<label class="form-label">Sexo:</label>
									<input id="masc" name = "sexo" type="radio" class="form-control-radio" value="Masculino" required>
										<label for="masc" class="form-label">Masculino</label>
									<input id="fem" name = "sexo" type="radio" class="form-control-radio" value="Feminino" required>
										<label for="fem" class="form-label">Feminino</label>
								</div>
								<div class="col-md-6 col-xl-5 mb-3">
									<label for="txtCPF"CPF class="form-label">CPF</label>
									<span class="text-muted">(somente números)</span>
									<input id="txtCPF" name="cpf" type="text" class="form-control cpf-mask" data-mask="000.000.000-00" minlength="11" maxlength="11" required>
								</div>
								
								<div class="col-md-6 col-xl-5 mb-3">
									<label for="txtData"class="form-label">Data de nascimento</label>
									
									<input id="txtData" name="data_nascimento" type="date" class="form-control" required>
								</div>

							
								
								<div class="col-md-4  col-sm-12 mb-3">
									<label for="txtTelefone" class="form-label">Telefone</label>
									<input id="txtTelefone" name="telefone" type="tel" class="form-control" placeholder = "0000-0000"  minlength="8" maxlength="8">
									<span class="text-muted">(com DDD, somente números)</span>
								</div>
								<div class=" col-md-8 col-1"></div>
								
								<div class="col-sm-12 col-md-4  form-check mb-3">
									<input data-toggle="collapse" data-target="#txtCelular" type="checkbox" class="form-control-check" value="" id="chkPromocoes">
									<label for="chkPromocoes" class="form-check-label">Desejo receber mensagens por whatsapp</label>
								</div>
								<div class="col-sm-1 col-md-8 col-1"></div>

								<div id="input-celular" class="col-md-6 mb-3 collapse">
									<label for="txtCelular" class="form-label">Celular</label>
									<input id="txtCelular"  name = "celular"  type="tel" class="form-control" placeholder = "(00) 00000-0000"  minlength = "16" maxlength="16">
									
								</div>
								<div class="col-sm-1 col-md-7"></div>
									<div class="col-md-6 col-sm-12 mb-3">
									<label for="txtEmail" class="form-label">Email</label>
									<input id="txtEmail" name="email" type="email" class="form-control" required>
								</div>
								<div class="col-md-6"></div>
								<div class="col-sm-12 col-md-6 mb-3">
										<label for="txtSenha" class="form-label">Senha</label>
										<input id="txtSenha" name="senha" type="password" class="form-control" required>
									</div>
									<div class="col-md-6"></div>

								<div class="col-md-6 colmb-3">
										<label for="txtConfSenha" class="form-label">Confirmar Senha</label>
										<input id="txtConfSenha" name = "confirmar_senha" type="password" class="form-control" required="">
									</div>
									<div class="col-md-6 mb-3"></div>
									<div class="col-md-6 mb-3"></div>

									<div class="mb-3">
										
										<input type="submit" value="Criar meu cadastro" class="btn btn-danger"
										
								</div>
  						
							</fieldset>
							</form>
					</div>

					<div id ="form-empresa"class="tab-pane ">
						
						<form method="POST" action="cadastrar_empresa.php">
						<fieldset class="row bg-light">
								<legend>Dados de Empresa</legend>
							

								<div class=" col-sm-12 col-md-8 mb-3">
									<label for="txtRazao"  class="form-label">Razão Social</label>
									<input id="txtRazao" name="razao_social" type="text" class="form-control" width = "30px">
								</div>
								<div class=" col-md-2 mb-3"></div>
								
								
								<div class=" col-md-2 mb-3"></div>
							<div class=" col-sm-12 col-md-8 mb-3">
									<label for="txtInscricao"  class="form-label">Inscrição Estadual</label>
									<input id="txtInscricao" name="inscricao_estadual" type="text" class="form-control" width = "30px">
								</div>
								<div class="col-md-6 col-xl-5 mb-3">
									<label for="txtCNPJ" class="form-label">CNPJ</label>
									<span class="text-muted">(somente números)</span>
									<input id="txtCNPJ" name = "cnpj" type="text" class="form-control cpf-mask" data-mask="00.000.000/0000-00" maxlength="14">
								</div>

									<div class=" col-sm-12 col-md-8 mb-3">
									<label for="txtNome" class="form-label">Nome</label>
									<input id="txtNome" name="nome" type="text" class="form-control" width = "30px">
								</div>
								<div class=" col-md-2 mb-3"></div>
								
								
								<div class=" col-md-2 mb-3"></div>
								<div class="col-md-6 col-xl-5 mb-3">
									<label for="txtCPF"CPF class="form-label">CPF</label>
									<span class="text-muted">(somente números)</span>
									<input id="txtCPF" name="cpf" type="text" class="form-control cpf-mask" data-mask="000.000.000-00" maxlength="11">
								</div>
								
								<div class="col-md-6 col-xl-5 mb-3">
									<label for="txtData"class="form-label">Data de nascimento</label>
									
									<input id="txtData" name = "data_nascimento" type="date" class="form-control">
								</div>

							
								
								<div class="col-md-4  col-sm-12 mb-3">
									<label for="txtTelefone" class="form-label">Telefone</label>
									<input id="txtTelefone" name="telefone" type="tel" class="form-control" placeholder = "(00) 0000-0000">
									<span class="text-muted">(com DDD, somente números)</span>
								</div>
								<div class=" col-md-8 col-1"></div>
								
								<div class="col-sm-12 col-md-4  form-check mb-3">
									<input data-toggle="collapse" data-target="#txtCelular" type="checkbox" class="form-control-check" value="" id="chkPromocoes">
									<label for="chkPromocoes" class="form-check-label">Desejo receber mensagens por whatsapp</label>
								</div>
								<div class="col-sm-1 col-md-8 col-1"></div>

								<div id="input-celular" class="col-md-6 mb-3 collapse">
									<label for="txtCelular" class="form-label">Celular</label>
									<input id="txtCelular" name = "celular" type="tel" class="form-control" placeholder = "(00) 0000-0000">
									
								</div>
								<div class="col-sm-1 col-md-7"></div>
									<div class="col-md-6 col-sm-12 mb-3">
									<label for="txtEmail" class="form-label">Email</label>
									<input id="txtEmail" name = "email" type="email" class="form-control">
								</div>
								<div class="col-md-6"></div>
								<div class="col-sm-12 col-md-6 mb-3">
										<label for="txtSenha" class="form-label">Senha</label>
										<input id="txtSenha" name="senha" type="password" class="form-control">
									</div>
									<div class="col-md-6"></div>

								<div class="col-md-6 colmb-3">
										<label for="txtConfSenha" class="form-label">Confirmar Senha</label>
										<input id="txtConfSenha name="confirmar_senha" type="password" class="form-control">
									</div>
									<div class="col-md-6 mb-3"></div>
									<div class="col-md-6 mb-3"></div>

									<div class="mb-3">
										
										<input type="submit" value="Criar meu cadastro" class="btn btn-danger"
										onclick="window.location.href='confirmar_cadastro.php'">
								</div>
  						
							</fieldset>
							</form>
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
			
				var tes=true;
				$("#chkPromocoes").click(function(){

					
					
				

						
						$("#input-celular").collapse("toggle");
						
					
				

					
				});

		</script>
	</body>
	
</html>