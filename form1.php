<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta name="theme-color" content="#f4544">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<style>
body{margin: auto;align-items: center;justify-content: center;text-align: center;background: linear-gradient(to right,white,black,white);}
h1{text-shadow:9px;text-decoration:none;color: white;font-size:30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;white-space:nowrap;cursor:copy;}
h2{text-shadow:9px;text-decoration:none;color:black;font-size:16px;font-family:Arial, Helvetica, sans-serif;font-style: italic;white-space:nowrap;cursor:copy;}
p{text-shadow: 9px;text-decoration: none;cursor: auto;color: white;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: inherit;}
a{border-radius: 10px 10px;text-decoration: none;text-shadow: 9px;font-size: 16px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-style: oblique;}
summary:hover{transition: ease s;transform: scale(1.05);}
nav:hover{transition: ease s;transform: scale(1.06);}
footer:hover{transition: ease s;transform: scale(1.08);}
summary{cursor: grab;width: 100px;margin: auto;border-radius: 10px 10px;padding: 5px;font-size: 16px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: white;color: red;border: 4px solid black;box-shadow: 6px 6px 6px black;}
nav{margin: auto;width: 300px;padding:30px;border-radius:10px 10px;cursor:grabbing;align-items:center;justify-content:center;text-align:center;border:6px solid white;}
footer{margin: auto;width: 300px;padding:30px;border-radius:10px 10px;cursor:grabbing;align-items:center;justify-content:center;text-align:center;border:6px solid whitesmoke;}
form{margin: auto;align-items: center;justify-content: center;text-align: center;display: flex;flex-direction: column;}
fieldset{cursor: context-menu;width: 300px;margin: auto;border-radius: 10px 10px;padding: 14px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;background-color: whitesmoke;border: 4px solid black;box-shadow: 6px 6px 6px red;}
label{text-shadow: 9px;text-decoration: none;white-space: nowrap;padding: 20px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;color: black;cursor: cell;}
.color1{display:flex;flex-direction:row;gap:6px;padding:10px;margin:auto;border-radius:10px 10px;cursor:grab;width:800px;background-color:darkred;border:4px solid white;box-shadow:8px 8px 8px black;}
.color2{display:flex;flex-direction:row;gap:6px;padding:10px;margin:auto;border-radius:10px 10px;cursor:grab;width:800px;background-color:darkblue;border:4px solid white;box-shadow:8px 8px 8px black;}
.color3{display:flex;flex-direction:row;gap:6px;padding:10px;margin:auto;border-radius:10px 10px;cursor:grab;width:800px;background-color:darkorange;border:4px solid white;box-shadow:8px 8px 8px black;}
.color4{display:flex;flex-direction:row;gap:6px;padding:10px;margin:auto;border-radius:10px 10px;cursor:grab;width:800px;background-color:darkorchid;border:4px solid white;box-shadow:8px 8px 8px black;}
input{text-shadow: 9px;text-align: left;width: 300px;margin: auto;border-radius: 10px 10px;padding: 4px;display: flex;flex-direction: column;color: black;background-color: whitesmoke;border: 4px solid blue;box-shadow: 3px 3px 3px black;cursor: default;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;}
select{cursor: col-resize;width: 200px;margin: auto;border-radius: 10px 10px;padding: 5px;font-size: 18px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: black;color: white;border: 4px solid white;box-shadow: 5px 5px 5px yellow;}
textarea{cursor: text;width: 300px;height: 200px;margin: auto;border-radius: 10px 10px;padding: 13px;background-color: antiquewhite;color: black;border: 4px solid black;text-shadow: 9px;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;}
button{cursor: progress;width: 280px;margin: auto;border-radius: 10px 10px;padding: 5px;font-size: 18px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: blue;color: white;border: 4px solid white;box-shadow: 6px 6px 6px black;}
</style>
<body>
<h1><big>Meu Form</big></h1>
<br>
<p id="script"></p>
<br>
<p id="lest"></p>
<br>
<p id="windows"></p>
<br>
<p id="most"></p>
<br>
<p id="very"></p>
<br>
<p id="night"></p>
<br>
<p id="sample"></p>
<br>
<p id="kick"></p>
<br>
<br>
<div id="summary"><details><summary style="width:300px;background-color:blueviolet;color:white;border:4px solid white;box-shadow:5px 5px 5px black;">Formulário</summary>
<br>
<header><h1><big>Cadastro de <b style="color:red;">BRS</b></big></h1></header>
<br>
<main>   
<form action="form1.php" method="post">
<fieldset>
<label for="Nome">Nome</label>
<input type="text" id="Nome" name="nome" title="Digite o seu Nome" placeholder="Exemplo: Guilherme Barbosa da Silva;" max="30" maxlength="30" required>
<label for="Idade">Idade</label>
<input type="number" id="Idade" name="idade" title="Digite a sua Idade" placeholder="Exemplo: 23 ou 35 anos ??;" max="30" maxlength="30" required>
<label for="Data de Nascimento">Data de Nascimento</label>
<input type="date" id="Data de Nascimento" name="data_nasc" title="Digite a sua Data de Nascimento" placeholder="Exemplo: 22/05/2001;" max="30" maxlength="30" required>
<label for="Cpf">Cpf</label>
<input type="text" id="Cpf" name="cpf" title="Digite o seu Cpf" placeholder="Exemplo: 503.552.748-41;" max="30" maxlength="30" required>
<label for="RG">RG</label>
<input type="text" id="RG" name="rg" title="Digite o seu RG" placeholder="Exemplo: 53.742.867-7;" max="30" maxlength="30" required>
<label for="Sua Altura">Sua Altura</label>
<select name="altura" id="Sua Altura" required style="width:160px;font-size:14px;padding:3px;background-color:blue;color:white;border:3px solid white;box-shadow:5px 5px 5px black;">
<option value="" selected disabled>Selecione</option>
<option value="1.50cm">1.50cm</option>
<option value="1.60cm">1.60cm</option>
<option value="1.70cm">1.70cm</option>
<option value="1.80cm">1.80cm</option>
<option value="1.90cm">1.90cm</option>
<option value="2.00cm">2.00cm</option>
</select>
<br>
<label for="Cep">Cep</label>
<input type="text" id="Cep" name="cep" title="Digite o seu Cep" placeholder="Exemplo: 03936-000;" max="30" maxlength="30" required>
<label for="Endereço">Endereço</label>
<input type="text" id="Endereço" name="endereco" title="Digite o seu Endereço" placeholder="Exemplo: Av rio das pedras Nª4100;" max="30" maxlength="30" required>
<label for="Email">Email</label>
<input type="email" id="Email" name="email" title="Digite o seu Email" placeholder="Exemplo: Guilherme8876sk@gmail.com;" max="30" maxlength="30" required>
<label for="Telefone">Telefone</label>
<input type="tel" id="Telefone" name="telefone" title="Digite o seu Telefone" placeholder="Exemplo: (11)98341-7590;" max="30" maxlength="30" required>
<label for="Estado civil">Estado civil</label>
<select name="estado_civil" id="Estado civil" required style="width:130px;padding:3px;font-size:14px;background-color:white;color:black;border:4px solid white;box-shadow:5px 5px 5px black;">
<option value="" selected disabled>Selecione</option>
<option value="Solteiro">Solteiro</option>
<option value="Compromissado">Compromissado</option>
<option value="Casado">Casado</option>
<option value="Divorciado">Divorciado</option>
<option value="Viúvo">Viúvo</option>
<option value="Compromissado">Compromissado</option>
</select>
<br>
<label for="Sua Cor">Sua Cor</label>
<input type="color" id="Sua Cor" name="cor" title="Digite o sua Cor" placeholder="Exemplo: branco ou negro ??;" max="30" maxlength="30" required>
<label for="Nível">Nível</label>
<input type="range" id="Nível" name="nivel" title="Digite o seu Nível" placeholder="Exemplo: +/-;" max="30" maxlength="30" required>
<label for="Sexo">Sexo</label>
<select name="genero" id="Sexo" required style="width:130px;padding:4px;font-size:14px;background-color:black;color:white;border:4px solid white;box-shadow:4px 4px 4px black;">
<option value="" selected disabled>Selecione</option>
<option value="Masculino">Masculino</option>
<option value="Feminino">Feminino</option>
<option value="Agênero">Agênero</option>
<option value="Bigênero">Bigênero</option>
<option value="Cisgênero">Cisgênero</option>
<option value="Transgênero">Transgênero</option>
</select>
<br>
<label for="Data e Hora">Data e Hora</label>
<input type="datetime-local" id="Data e Hora" name="data_hora" title="Digite a sua Data e Hora" placeholder="Exemplo: 22/05 ás 10 AM;" max="30" maxlength="30" required>
<br>
<br>
<h2><big>Qual o seu nível de conhecimento?</big></h2>
<br>
<div class="summary"><div id="text"><details><summary>Qual?</summary>
<br>
<div class="color1">
<label for="Jûnior" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Jûnior</label>
<input type="radio" value="Jûnior" name="conhecimento" required>
<label for="Iniciante" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Iniciante</label>
<input type="radio" value="Iniciante" name="conhecimento" required>
<label for="Pleno" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Pleno</label>
<input type="radio" value="Pleno" name="conhecimento" required>
<label for="Mediano" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Mediano</label>
<input type="radio" value="Mediano" name="conhecimento" required>
<label for="Intermediário" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Intermediário</label>
<input type="radio" value="Intermediário" name="conhecimento" required>
<label for="Master" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Master</label>
<input type="radio" value="Master" name="conhecimento" required>
<label for="Sênior" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Sênior</label>
<input type="radio" value="Sênior" name="conhecimento" required>
</div>
</details></div></div>
<br>
<br>
<h2><big>Qual o seu nível de experiencia?</big></h2>
<br>
<div class="summary"><div id="text"><details><summary>Qual?</summary>
<br>
<div class="color2">
<label for="Jûnior" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Jûnior</label>
<input type="radio" value="Jûnior" name="experiencia" required>
<label for="Iniciante" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Iniciante</label>
<input type="radio" value="Iniciante" name="experiencia" required>
<label for="Pleno" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Pleno</label>
<input type="radio" value="Pleno" name="experiencia" required>
<label for="Mediano" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Mediano</label>
<input type="radio" value="Mediano" name="experiencia" required>
<label for="Intermediário" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Intermediário</label>
<input type="radio" value="Intermediário" name="experiencia" required>
<label for="Avançado" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Avançado</label>
<input type="radio" value="Avançado" name="experiencia" required>
<label for="Complexo" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Complexo</label>
<input type="radio" value="Complexo" name="experiencia" required>
</div>
</details></div></div>
<br>
<br>
<h2><big>Qual o seu nivel social?</big></h2>
<br>
<div class="summary"><div id="text"><details><summary>Qual?</summary>
<br>
<div class="color3">
<label for="Conhecido" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Conhecido</label>
<input type="radio" value="Conhecido" name="nivel_social" required>
<label for="Desconhecido" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Desconhecido</label>
<input type="radio" value="Desconhecido" name="nivel_social" required>
<label for="Flûente" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Flûente</label>
<input type="radio" value="Flûente" name="nivel_social" required>
<label for="Inflûente" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Inflûente</label>
<input type="radio" value="Inflûente" name="nivel_social" required>
<label for="Famoso" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Famoso</label>
<input type="radio" value="Famoso" name="nivel_social" required>
<label for="Tiktoker" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Tiktoker</label>
<input type="radio" value="Tiktoker" name="nivel_social" required>
<label for="Famosinho" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Famosinho</label>
<input type="radio" value="Famosinho" name="nivel_social" required>
</div>
</details></div></div>
<br>
<br>
<h2><big>Qual o seu nível de classe social?</big></h2>
<br>
<div class="summary"><div id="text"><details><summary>Qual?</summary>
<br>
<div class="color4">
<label for="Classe A" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Classe A</label>
<input type="radio" value="Classe A" name="classe_social" required>
<label for="Classe B" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Classe B</label>
<input type="radio" value="Classe B" name="classe_social" required>
<label for="Classe C" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Classe C</label>
<input type="radio" value="Classe C" name="classe_social" required>
<label for="Classe D" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Classe D</label>
<input type="radio" value="Classe D" name="classe_social" required>
<label for="Classe E" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Classe E</label>
<input type="radio" value="Classe E" name="classe_social" required>
<label for="Classe S" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Classe S</label>
<input type="radio" value="Classe S" name="classe_social" required>
<label for="Classe X" style="white-space:nowrap;text-shadow:9px;color:white;text-decoration:none;font-size:14px;">Classe X</label>
<input type="radio" value="Classe X" name="classe_social" required>
</div>
</details></div></div>
<br>
<br>
<h2><big>Qual é o seu signo?</big></h2>
<br>
<div class="summary"><div id="text"><details><summary style="background-color:black;color:yellow;border:3px solid white;box-shadow:5px 5px 5px black;">Qual?</summary>
<br>
<select name="signo" id="signo" required>
<option value="" selected disabled>Selecione</option>
<option value="Áries">Áries</option>
<option value="Aquário">Aquário</option>
<option value="Câncer">Câncer</option>
<option value="Capricôrnio">Capricôrnio</option>
<option value="Leão">Leão</option>
<option value="Libra">Libra</option>
<option value="Sagitário">Sagitário</option>
<option value="Escorpião">Escorpião</option>
<option value="Gêmeos">Gêmeos</option>
<option value="Virgem">Virgem</option>
<option value="Peixes">Peixes</option>
<option value="Touro">Touro</option>
<option value="Ofiúco">Ofiúco</option>
</select>
</details></div></div>
<br>
<br>
<h2><big>Me Fale sobre a sua experiencia ?</big></h2>
<br>
<textarea name="experience_text" id="experiencia" required rows="9"></textarea>
<br>
<br>
<button value="experience_text">Cadastre</button>
<br>
</fieldset>
<br>
<br>
<div class="nav">
<nav style="background-color:darkred;">
<p style="color:white;">Retorne para minha <a href="index.php" target="_blank" rel="noopener" style="text-shadow:9px;text-decoration:none;border-radius:10px 10px;font-size:14px;background-color:white;color:red;border:3px solid black;box-shadow:4px 4px 4px black;cursor:grabbing;">1ªPágina</a></p>
</nav>
</div>
<br>
<div class="footer">
<footer style="background-color:darkblue;">
<p style="color:white;">@GuilhermeBarbosaDaSilva, todos os direitos autorais reservado.</p>
</footer>
</div>
</form>
</main>
</details></div>
<script>
alert(1000*3333);
alert(111010/11111);
alert('Olá');
alert('Seja bem vindo');
alert('Ao meu');
alert('Formulário');
alert('Feito com');
alert('PHP');
console.log('Olá mundo');
console.log('Hello word');
console.log('Most');
console.log('Place');
console.log('Wanted');
console.log('OK');
console.log(303030*3333);
document.write('Olá');
document.write('Segue');
document.write('Meu Form');
document.write('Logo');
document.write('Acima');
document.write('feito com cuidado');
document.write('Thanks');
document.write('Very much');
document.getElementById('script').innerHTML='Ola';
document.getElementById('lest').innerHTML='Seja bem vindo';
document.getElementById('windows').innerHTML='ao meu';
document.getElementById('most').innerHTML='Formulario';
document.getElementById('very').innerHTML='Segue';
document.getElementById('night').innerHTML='O';
document.getElementById('sample').innerHTML='logo';
document.getElementById('kick').innerHTML='abaixo';
function name()
{
    console.log('Ola');
    console.log('Mundo');
    console.log('Seja');
    console.log('Muito');
    console.log('Bem');
    console.log('Vindo');
}
function age()
{
    console.log('Esse');
    console.log('E');
    console.log('o');
    console.log('meu');
    console.log('form');
    console.log('estruturado');
}
function altura()
{
    console.log('thanks');
    console.log('very');
    console.log('mabe');
    console.log('much');
}
function status()
{
    console.log('example');
    console.log('0909');
    console.log('Ok');
    console.log('lest');
    console.log('go');
}
</script>
<?php
$host="127.0.0.1";
$username="minhatabelameunomegui";
$dbname="letsgoplacemyfavorite";
$password='';
$conn=mysqli_connect($host,$username,$password,$dbname);
$nome=$_POST['nome']??null;
$idade=$_POST['idade']??null;
$data_nasc=$_POST['data_nasc']??null;
$cpf=$_POST['cpf']??null;
$rg=$_POST['rg']??null;
$altura=$_POST['altura']??null;
$cep=$_POST['cep']??null;
$endereco=$_POST['endereco']??null;
$email=$_POST['email']??null;
$telefone=$_POST['telefone']??null;
$estado_civil=$_POST['estado_civil']??null;
$cor=$_POST['cor']??null;
$nivel=$_POST['nivel']??null;
$genero=$_POST['genero']??null;
$data_hora=$_POST['data_hora']??null;
$conhecimento=$_POST['conhecimento']??null;
$experiencia=$_POST['experiencia']??null;
$nivel_social=$_POST['nivel_social']??null;
$classe_social=$_POST['classe_social']??null;
$signo=$_POST['signo']??null;
$experience_text=$_POST['experience_text']??null;
$sql = "INSERT INTO minhatabelameunomegui (nome, idade, data_nasc, cpf, rg, altura, cep, endereco, email, telefone, estado_civil, cor, nivel, genero, data_hora, conhecimento, experiencia, nivel_social, classe_social, signo, experience_text)
VALUES ('$nome','$idade','$data_nasc','$cpf','$rg','$altura','$cep','$endereco','$email','$telefone','$estado_civil','$cor','$nivel','$genero','$data_hora','$conhecimento','$experiencia','$nivel_social','$classe_social','$signo','$experience_text')";
if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fechando a conexão
$conn->close();
?>
</body>
</html>