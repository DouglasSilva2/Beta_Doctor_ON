<! DOCTYPE html>
<html lang="pt-br"/>
	<head>
		<meta charset="UTF-8"/>
		<title>Faça Seu Cadastro</title>
		<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="_css/cadastro.css">
	</head>
	<script lang="javascript" src="_javascript/funcoes.js"></script>
<body>
<div id="interface">

	<header id="cabecalho">
		<hgroup>
		<h1>DoctorOn</h1>
		</hgroup>

				<img id="icone" src="_imagens/_doctor/cadastros.png">

<nav id="menu">
	<h1>Menu Principal</h1>
		<ul type="disc">
		
<li onmouseover="mudaFoto('_imagens/_doctor/icone-inicial.png')" onmouseout="mudaFoto('_imagens/_doctor/cadastros.png)"><a href="index.html">Pagina Inicial</a></li>

	<li onmouseover="mudaFoto('_imagens/_doctor/cadastros.png')" onmouseout="mudaFoto('_imagens/_doctor/cadastros.png')"><a href="cadastros.php">Cadastro</a></li>

<li onmouseover="mudaFoto('_imagens/_doctor/agendas-forme.png')" onmouseout="mudaFoto('_imagens/_doctor/cadastros.png')"><a href="agendamento.php"> Agendamentos</a></li>

<li onmouseover="mudaFoto('_imagens/_doctor/fotos.png')" onmouseout="mudaFoto('_imagens/_doctor/cadastros.png')"><a href="fotos.html">Fotos de Projetos</a></li>

<li onmouseover="mudaFoto('_imagens/_doctor/eventos.png')" onmouseout="mudaFoto('_imagens/_doctor/cadastros.png')"><a href="eventos.html">Eventos na Area da Saúde</a></li>

<li onmouseover="mudaFoto('_imagens/_doctor/contato.png')" onmouseout="mudaFoto('_imagens/_doctor/cadastros.png')"><a href="fale-conosco.html">Fale conosco</a></li>
	</ul>

</nav>		

</header>
<section id="corpo"/>
<article id="noticias-principal">
	<header id="cabecalho-artigo">
				<hgroup>
					<h4>Faça Seu Cadastro</h4>
					<h2>Doctor.On</h2>
					<h3 class="direita"> Atualizado em 09/04/2017</h3>
				</hgroup>
	</header>
	<form name="cadastro" method="POST" action="cadastro.php">
	 <fieldset id="usuario">
             <legend >Identificação do Usuário</legend>
                <p>Nome <input type="text" name="nome" size="30" placeholder="Nome" /></p>
                <p>Sobrenome <input type="text" name="sobrenome" size="25" placeholder="Sobrenome">
                <p>Pais <input type="text" name="pais" size="31" placeholder="Pais"></p>
                <p>Estado <input type="text" name="estado" size="29" placeholder="Estado"></p>
                <p>Cidade <input type="text" name="cidade" size="29" placeholder="Cidade"></p>
                <p>E-mail <input type="text" name="email" size=" 30" placeholder="E-mail"></p>
                <p>Senha<input type="password" name="senha" size="8"  placeholder="Senha"></p>
               	
                <fieldset id="sexo">
                      <legend>Sexo</legend>
       	              <input type="radio" name="Sexo" id="Masculino" value="masculino"><label for="cMas">Masculino</label><br>
                      <input type="radio" name="Sexo" id="Feminino"  value="feminino" ><label for="cFem">Feminino</label>
                      <p><input type="submit" value="cadastrar"></p>
                            
    </fieldset>
</form>
</article>
</section>
<aside id="lateral">

	<h1>Fique Por dentro</h1>
	<h2>cadastro</h2>
		<figure class="foto-leg">
	<img src="_imagens/_doctor/cadastro.gif">
	<figcaption id="fot">
		<h3>DoctorOn</h3>
		<p>Faça seu cadastro</p>
		<p>A Luta e nossa</p>
		</figcaption>
</figure>
	
</div>
	
</aside>

<footer id="rodape"/>

	<p>Copyright &copy; 2017 - by Doctor.On<br/>
<a href="http://Facebook.com/Doctor.On" target="_blank">Facebook</a> 
<a href="http://Twitter.com/Doctor.On" target="_blank">Twitter</a></p>

</footer>
</div>
</body>
</html>