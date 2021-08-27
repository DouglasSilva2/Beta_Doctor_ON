
<! DOCTYPE html>
<html lang="pt-br"/>
	<head>
		<meta charset="UTF-8"/>
		<title>Especificações</title>
		<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="agendamentos.php">
	</head>
	<script lang="javascript" src="_javascript/funcoes.js"></script>
<body>
<div id="interface">

	<header id="cabecalho">
		<hgroup>
		<h1>Agendamentos</h1>
	
		</hgroup>

			<img id="icone" src="_imagens/_doctor/icone-inicial.png">

<nav id="menu">
	<h1>Menu Principal</h1>
		<ul type="disc">
		
<li onmouseover="mudaFoto('_imagens/_doctor/icone-inicial.png')" onmouseout="mudaFoto('_imagens/_doctor/agendas-forme.png')"><a href="index.html">Pagina Inicial</a></li>

	<li onmouseover="mudaFoto('_imagens/_doctor/cadastros.png')" onmouseout="mudaFoto('_imagens/_doctor/agendas-forme.png')"><a href="cadastros.php">Cadastro</a></li>

<li onmouseover="mudaFoto('_imagens/_doctor/agendas-forme.png')" onmouseout="mudaFoto('_imagens/_doctor/agendas-forme.png')"><a href="agendamento.php"> Agendamentos</a></li>

<li onmouseover="mudaFoto('_imagens/_doctor/fotos.png')" onmouseout="mudaFoto('_imagens/_doctor/agendas-forme.png')"><a href="fotos.html">Fotos de Projetos</a></li>

<li onmouseover="mudaFoto('_imagens/_doctor/eventos.png')" onmouseout="mudaFoto('_imagens/_doctor/agendas-forme.png')"><a href="eventos.html">Eventos na Area da Saúde</a></li>

<li onmouseover="mudaFoto('_imagens/_doctor/contato.png')" onmouseout="mudaFoto('_imagens/_doctor/agendas-forme.png')"><a href="fale-conosco.html">Fale conosco</a></li>
	</ul>

</nav>		

</header>

<section id="corpo-full">


<article id="noticias-principal">
	<header id="cabecalho-artigo">
				<hgroup>
					<h3>Informação de Seu agendamento</h3>
					<h2>Por Doctor.On</h2>
					<h3 class="direita"> Atualizado em 25/04/2017</h3>
				</hgroup>
	</header>
	<!--Inicio da Formatação do Formulario -->
<div id="agd">
<form name="cadastro" method="POST" action="agendamentos.php">
	 <fieldset id="usuario">
             <legend >Identificação de Agendamento do Paciente</legend>
               
                <p> Nome Completo <input type="text" name="nome" size="30" placeholder="Nome" /></p>
                <p> Endereço <input type="text" name="endereco" size="25" placeholder="Endereço"</p>
                <p> Numero <input type="text" name="numero" size="6" placeholder="Numero"></p>
                <p> Bairro <input type="text" name="bairro" size="31" placeholder="Bairro"></p>
                <p> Numero Cartão SuS <input type="text" name="nSus" size="29" placeholder="Numero do Cartão SuS"></p>
                <p><input type="submit" value="Agendar"></p>
                           
    </fieldset>
</form>
</div>
		<!-- Fim da seção do conteudo de Texto do Formulario -->
		</section>


</article>
</section>

	<footer id="rodape"/>

		<p>Copyright &copy; 2013 - by Doctor.On<br/>
<a href="http://Facebook.com/Doctor.On" target="_blank">Facebook</a> 
<a href="http://Twitter.com/Doctor.On" target="_blank">Twitter</a></p>

</footer>
</div>
</body>
</html>