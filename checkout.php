<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Checkout	Mirror Fashion</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/open-iconic-bootstrap.css">
		<link rel="stylesheet" href="css/estilos.css">
		<script	type="text/javascript" src="js/total.js"></script>
		<script	type="text/javascript" src="js/inputmask-plugin.js"></script>
		</head>
	
	
	<body>
		
		<div class="jumbotron	jumbotron-fluid">
			<div class="container">  
				<h1	class="display-4">Ótima	escolha!</h1>
				<p class="lead"> Obrigado por comprar na Mirror	Fashion!
								Preencha seus dados	para efetivar a compra.
				</p>
			</div><!--	fim	.container	dentro	do	jumbotron	-->
		</div><!--	fim	.jumbotron	-->
			
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card mb-3">
						<div class="card-header">
							<h2>Sua	compra</h2>
								
						</div><!-- fim.card-header -->
						<div class="card-body">
						<img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan" class="img-thumbnail mb-3">
						<dl>
							<dt>Produto</dt>
							<dd>Fuzzy Cardigan</dd>
							<dt>Cor</dt>
							<dd><?=	$_POST['cor'] ?></dd>
							<dd>Verde</dd>
							<dt>Tamanho</dt>
							<dd><?=	$_POST['tamanho'] ?></dd>
							<dd>40</dd>
							<dt>Preço</dt>
							<dd>R$ 129,90</dd>
						</dl>
						</div><!--	fim	.card-body	-->
					</div><!--	fim	.card	mb-3	-->
					
					<div class="card mb-3">
						<div class="card-body">
							<div class="form-group">
								<label for="qtd">Quantidade:</label>
								<input type="number" id="qtd" min="1" max="99" value="1" class="form-control">
							</div>
						<div class="form-group">
							<label for="total">Total:</label>
							<output	id="total" class="form-control">R$ 129,90</output>
						</div>
						</div>
					</div>
						<dd	id="preco">R$ 129,90</dd>
						<output	for="qtd preco" id="total" class="form-control">
								R$ 129,90
						</output

				</div>
				
				<div class="col-md-4">
					<div class="card-header">
						<form class="col-md-16">
							<div class="row">
								<fieldset class="col-lg-20">

									<legend>Dados pessoais</legend>
										<div class="form-group">
											<label for="nome">Nome completo</label>
											<input type="text" class="form-control" id="nome" name="nome" autofocus required>
										</div>
								
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
										</div>
							
										<div class="form-group">
											<label for="cpf">CPF</label>
											<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required data-mask="999.999.999-99">
												
										</div>
									
										<div class="form-group custom-control custom-checkbox">
											<input	type="checkbox" class="custom-control-input" id="newsletter"
												value="sim" checked>
											<label	class="custom-control-label" for="newsletter">
												Quero receber Newsletter da	Mirror Fashion
											</label>
										</div>
								</fieldset>
							</div>
					</div>
				</div>
					
					<div class="col-md-4">
						<div class="card mb-3">
							<div class="row">
								<fieldset class="col-lg-10">

									<legend>Cartão de crédito</legend>
										<div class="form-group">
											<label for="numero-cartao">Número - CVV</label>
											<input type="text" class="form-control" id="numero-cartao" name="numero-cartao"	data-mask="9999 9999 9999 9999 - 999">
										</div>
						
										<div class="form-group">
											<label	for="bandeira-cartao">Bandeira</label>
												<select	class="custom-select" id="bandeira-cartao">
													<option	disabled selected>Selecione	uma	opção...</option>
													<option	value="master">MasterCard</option>
													<option	value="visa">VISA</option>
													<option	value="amex">American	Express</option>
												</select>
										</div>
					
										<div class="form-group">
											<label for="validade-cartao">Validade</label>
											<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
										</div>
								</fieldset>
							</div>
						</div>
					</div>
					
								<button	type="submit" class="btn btn-primary">
									<span class="oi	oi-thumb-up"></span>
									Confirmar	Pedido
								</button>
						</form>
				
			</div><!--	fim	.row	-->
		</div><!--	fim	.container	da	pagina	-->
	</body>
</html>
