<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta name="theme-color" content="#f4433">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<style>
body{margin: auto;align-items: center;text-align: center;justify-content: center;background: linear-gradient(to right,blue,black,blue);}
h1{white-space:nowrap;text-decoration:none;text-shadow:9px;color: white;font-size: 30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;cursor: text;}
h2{white-space:nowrap;text-decoration:none;text-shadow:9px;color: black;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: inherit;cursor: text;}
p{text-decoration: none;text-shadow: 9px;color: white;font-size: 16px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
a{text-decoration: none;text-shadow: 9px;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;}
summary{cursor: grab;width: 100px;margin: auto;border-radius: 10px 10px;padding: 4px;font-size: 18px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: white;color: red;border: 4px solid black;box-shadow: 6px 6px 6px black;}
footer{width: 300px;margin:auto;padding:30px;border-radius:10px 10px;cursor:grab;align-items:center;justify-content:center;text-align:center;border:5px solid white;}
nav{width: 300px;margin:auto;padding:30px;border-radius:10px 10px;cursor:grab;align-items:center;justify-content:center;text-align:center;border:5px solid whitesmoke;}
summary:hover{transform: scale(1.05);transition: ease s;}
footer:hover{transform: scale(1.07);transition: ease s;}
nav:hover{transform: scale(1.08);transition: ease s;}
form{margin: auto;display: flex;flex-direction: column;align-items: center;text-align: center;justify-content: center;}
fieldset{cursor: grabbing;width: 300px;margin: auto;border-radius: 10px 10px;padding: 14px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;background-color: whitesmoke;border: 4px solid black;box-shadow: 5px 5px 5px red;}
label{padding: 20px;text-shadow: 9px;margin: auto;color: black;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;cursor: cell;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
.color1{gap:6px;padding:10px;display:flex;flex-direction:row;margin:auto;text-align:center;align-items:center;justify-content:center;cursor:grab;width:800px;border-radius:10px 10px;white-space:nowrap;text-shadow:9px;background-color:darkblue;border:5px solid whitesmoke;box-shadow:5px 5px 5px black;}
.color2{gap:6px;padding:10px;display:flex;flex-direction:row;margin:auto;text-align:center;align-items:center;justify-content:center;cursor:grab;width:800px;border-radius:10px 10px;white-space:nowrap;text-shadow:9px;background-color:darkred;border:5px solid whitesmoke;box-shadow:5px 5px 5px black;}
.color3{gap:6px;padding:10px;display:flex;flex-direction:row;margin:auto;text-align:center;align-items:center;justify-content:center;cursor:grab;width:800px;border-radius:10px 10px;white-space:nowrap;text-shadow:9px;background-color:darkgoldenrod;border:5px solid whitesmoke;box-shadow:5px 5px 5px black;}
.color4{gap:6px;padding:10px;display:flex;flex-direction:row;margin:auto;text-align:center;align-items:center;justify-content:center;cursor:grab;width:800px;border-radius:10px 10px;white-space:nowrap;text-shadow:9px;background-color:darkslateblue;border:5px solid whitesmoke;box-shadow:5px 5px 5px black;}
input{margin: auto;text-align: left;padding: 4px;width: 300px;border-radius: 10px 10px;text-shadow: 9px;color: black;display: flex;flex-direction: column;background-color: whitesmoke;border: 4px solid blue;box-shadow: 3px 3px 3px black;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;cursor: grabbing;}
select{cursor: auto;width: 200px;margin: auto;border-radius: 10px 10px;padding: 5px;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;text-shadow: 9px;background-color: black;color: yellow;border: 4px solid white;box-shadow: 6px 6px 6px black;}
textarea{cursor: text;width: 300px;height: 200px;margin: auto;border-radius: 10px 10px;padding: 12px;font-size: 16px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: antiquewhite;border: 4px solid black;color: black;}
button{cursor: progress;width: 280px;margin: auto;border-radius: 10px 10px;padding: 5px;color: white;font-size: 18px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;text-shadow: 9px;background-color: blue;border: 4px solid white;box-shadow: 6px 6px 6px black;}
</style>
<body>
    <h1><big>Meu Form</big></h1>
    <br>
    <p id="Script"></p>
    <br>
    <p id="Log"></p>
    <br>
    <p id="console"></p>
    <br>
    <p id="input"></p>
    <br>
    <p id="text"></p>
    <br>
    <p id="summary"></p>
    <br>
    <br>
    <div id="text"><details><summary style="width:300px;background-color:white;color:red;border:4px solid black;box-shadow:5px 5px 5px black;">Formulário</summary>
    <br>
    <header>  
    <h1><big>Cadastro de <b style="color:red">BRS</b></big></h1>
    </header>
    <br>
    <main>
    <form action="form3.php" method="post">
    <fieldset>
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="Nome" title="Digite o seu Nome" placeholder="Exemplo: Guilherme Barbosa Da Silva;" max="30" maxlength="30" required>
    <label for="Idade">Idade</label>
    <input type="number" name="idade" id="Idade" title="Digite a sua Idade" placeholder="Exemplo: 23 anos ou 36 anos ?;" max="30" maxlength="30" required>
    <label for="Sexo">Sexo</label>
    <select name="genero" id="Sexo" required style="font-size:14px;padding:4px;width:160px;background-color:white;color:red;border:3px solid black;box-shadow:5px 5px 5px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Agênero">Agênero</option>
    <option value="Bigênero">Bigênero</option>
    <option value="Transgênero">Transgênero</option>
    <option value="Cisgênero">Cisgênero</option>
    </select>
    <br>
    <label for="Rg">Rg</label>
    <input type="text" name="rg" id="Rg" title="Digite o seu Rg" placeholder="Exemplo: 53.742.867-7;" max="30" maxlength="30" required>
    <label for="Cpf">Cpf</label>
    <input type="text" name="cpf" id="Cpf" title="Digite o seu Cpf" placeholder="Exemplo: 503.552.748-41;" max="30" maxlength="30" required>
    <label for="Email">Email</label>
    <input type="email" name="email" id="Email" title="Digite o seu Email" placeholder="Exemplo: guilherme8876sk@gmail.com;" max="30" maxlength="30" required>
    <label for="Telefone">Telefone</label>
    <input type="tel" name="telefone" id="Telefone" title="Digite o seu Telefone" placeholder="Exemplo: (11) 98341-7590;" max="30" maxlength="30" required>
    <label for="Endereço">Endereço</label>
    <input type="text" name="endereco" id="Endereço" title="Digite o seu Endereço" placeholder="Exemplo: Av Rio das Pedras Nª4100;" max="30" maxlength="30" required>
    <label for="Cep">Cep</label>
    <input type="text" name="cep" id="Cep" title="Digite o seu Cep" placeholder="Exemplo: 03936-000;" max="30" maxlength="30" required>
    <label for="Data de Nascimento">Data de Nascimento</label>
    <input type="date" name="data_nasc" id="Data de Nascimento" title="Digite a sua Data de Nascimento" placeholder="Exemplo: 22/05/2001;" max="30" maxlength="30" required>
    <label for="Estado civil">Estado civil</label>
    <select name="estado_civil" id="Estado civil" required style="width:150px;font-size:14px;padding:3px;background-color:black;color:white;border:3px solid white;box-shadow:5px 5px 5px yellow;">
    <option value="" selected disabled>Selecione</option>
    <option value="Solteiro">Solteiro</option>
    <option value="Casado">Casado</option>
    <option value="Compromissado">Compromissado</option>
    <option value="Divorciado">Divorciado</option>
    <option value="Viúvo">Viúvo</option>
    <option value="Separado">Separado</option>
    </select>
    <br>
    <label for="Sua Cor">Sua Cor</label>
    <input type="color" name="cor" id="Sua Cor" title="Digite a sua Cor" placeholder="Exemplo: branco ou negro ?;" max="30" maxlength="30" required>
    <label for="Nível">Nível</label>
    <input type="range" name="nivel" id="Nível" title="Digite o seu Nível" placeholder="Exemplo: +/-;" max="30" maxlength="30" required>
    <label for="Altura">Altura</label>
    <select name="altura" id="Altura" required style="width:140px;padding:4px;font-size:13px;background-color:blue;color:white;border:3px solid white;box-shadow:4px 4px 4px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="1.50cm">1.05cm</option>
    <option value="1.60cm">1.60cm</option>
    <option value="1.70cm">1.70cm</option>
    <option value="1.80cm">1.80cm</option>
    <option value="1.90cm">1.90cm</option>
    <option value="2.00cm">2.00cm</option>
    </select>
    <br>
    <label for="Data e Hora">Data e Hora</label>
    <input type="datetime-local" name="data_hora" id="Data e Hora" title="Digite a sua Data e Hora" placeholder="Exemplo: 22/05 ás 10 AM;" max="30" maxlength="30" required>
    <br>
    <br>
    <h2><big>Qual o seu nível de conhecimento?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>Qual?</summary>
    <br>
    <div class="color1">
    <label for="Jûnior" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Jûnior</label>
    <input type="radio" value="Jûnior" name="conhecimento" required>
    <label for="Aprendiz" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Aprendiz</label>
    <input type="radio" value="Aprendiz" name="conhecimento" required>
    <label for="Jovem" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Jovem</label>
    <input type="radio" value="Jovem" name="conhecimento" required>
    <label for="Iniciante" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Iniciante</label>
    <input type="radio" value="Iniciante" name="conhecimento" required>
    <label for="Mediano" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Mediano</label>
    <input type="radio" value="Mediano" name="conhecimento" required>
    <label for="Intermediário" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Intermediário</label>
    <input type="radio" value="Intermediário" name="conhecimento" required>
    <label for="Profissional" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Profissional</label>
    <input type="radio" value="Profissional" name="conhecimento" required>
</div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de experiencia?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>Qual?</summary>
    <br>
    <div class="color2">
    <label for="Jûnior" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Jûnior</label>
    <input type="radio" value="Jûnior" name="experiencia" required>
    <label for="Pleno" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Pleno</label>
    <input type="radio" value="Pleno" name="experiencia" required>
    <label for="Iniciante" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Iniciante</label>
    <input type="radio" value="Iniciante" name="experiencia" required>
    <label for="Mediano" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Mediano</label>
    <input type="radio" value="Mediano" name="experiencia" required>
    <label for="Intermediário" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Intermediário</label>
    <input type="radio" value="Intermediário" name="experiencia" required>
    <label for="Avançado" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Avançado</label>
    <input type="radio" value="Avançado" name="experiencia" required>
    <label for="Profissional" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Profissional</label>
    <input type="radio" value="Profissional" name="experiencia" required>
</div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>Qual?</summary>
    <br>
    <div class="color3">
    <label for="Conhecido" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Conhecido</label>
    <input type="radio" value="Conhecido" name="nivel_social" required>
    <label for="Desconhecido" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Desconhecido</label>
    <input type="radio" value="Desconhecido" name="nivel_social" required>
    <label for="Flûente" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Flûente</label>
    <input type="radio" value="Flûente" name="nivel_social" required>
    <label for="Inflûente" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Inflûente</label>
    <input type="radio" value="Inflûente" name="nivel_social" required>
    <label for="Famoso" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Famoso</label>
    <input type="radio" value="Famoso" name="nivel_social" required>
    <label for="Famosinho" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Famosinho</label>
    <input type="radio" value="Famosinho" name="nivel_social" required>
    <label for="Tiktoker" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Tiktoker</label>
    <input type="radio" value="Tiktoker" name="nivel_social" required>
</div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de classe social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>Qual?</summary>
    <br>
    <div class="color4">
    <label for="Classe A" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Classe A</label>
    <input type="radio" value="Classe A" name="classe_social" required>
    <label for="Classe B" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Classe B</label>
    <input type="radio" value="Classe B" name="classe_social" required>
    <label for="Classe C" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Classe C</label>
    <input type="radio" value="Classe C" name="classe_social" required>
    <label for="Classe D" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Classe D</label>
    <input type="radio" value="Classe D" name="classe_social" required>
    <label for="Classe E" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Classe E</label>
    <input type="radio" value="Classe E" name="classe_social" required>
    <label for="Classe F" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Classe F</label>
    <input type="radio" value="Classe F" name="classe_social" required>
    <label for="Classe S" style="font-size:14px;text-decoration:none;text-shadow:9px;color:white;white-space:nowrap;">Classe S</label>
    <input type="radio" value="Classe S" name="classe_social" required>
</div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é o seu signo ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color: black;color:yellow;border:3px solid white;box-shadow:5px 5px 5px black;">Qual?</summary>
    <br>
    <select name="signo" id="signo" required>
    <option value="" selected disabled>Selecione</option>
    <option value="Áries">Áries</option>
    <option value="Aquário">Aquário</option>
    <option value="Câncer">Câncer</option>
    <option value="Câpricornio">Câpricornio</option>
    <option value="Libra">Libra</option>
    <option value="Leão">Leão</option>
    <option value="Sagitário">Sagitário</option>
    <option value="Escorpião">Escorpião</option>
    <option value="Gemêos">Gemêos</option>
    <option value="Virgem">Virgem</option>
    <option value="Peixes">Peixes</option>
    <option value="Touro">Touro</option>
    <option value="Ofiúco">Ofiúco</option>
    </select>
</details></div></div>
    <br>
    <br>
    <h2><big>Me fale sobre a sua experiência</big></h2>
    <br>
    <textarea name="textarea" id="textarea" rows="9" required></textarea>
    <br>
    <br>
    <button value="textarea">Cadastre</button>
    <br>
    </fieldset>
    <br>
    <br>
    <div class="nav">
    <nav style="background-color:darkblue;">
    <p>Retorne para minha <a href="index.php" target="_blank" rel="noopener" style="background-color: white;color:black;border:3px solid black;box-shadow:4px 4px 4px blue;text-shadow:9px;font-size:14px;cursor:grab;border-radius:10px 10px;">1ªPágina</a></p>
    </nav>
    </div>
    <br>
    <div class="footer">
    <footer style="background-color:darkred;">
    <p style="color:white;">@GuilhermeBarbosaDaSilva,todos os direitos reservados.</p>
    </footer>
    </div>
    </main>
    </form>
</details></div>
    <script>
    function name()
    {document.write('Digite o Texto');
    document.getByElementId('Script').InnerHTML='Score';
    document.getByElementId('Next').InnerHTML='Nada';
    document.getByElementId('Push').InnerHTML='Não tem nada';
    console.log(98383*3333);
    console.log('Olá');
    console.log('Mundo');
    console.log('Bem Vindo');
    }
    function age()
    {document.write();
    document.getByElementId('Ola').InnerHTML='Agora';
    document.getByElementId('Digite').InnerHTML='AQui';
    document.getByElementId('Seu').InnerHTML='Nome';
    console.log(222+222);
    console.log('Venha');
    console.log('Aqui');
    console.log('Cachorro');
    }
    function darby()
    {document.write('Digite seu Nome');
    document.getByElementId('Ola').InnerHTML='Escreva';
    document.getByElementId('Meu').InnerHTML='Pra';
    document.getByElementId('Mundo').InnerHTML='MIM';
    console.log(333*333);
    console.log('Ola');
    console.log('Seu');
    console.log('Puto');
    }
    function score()
    {document.write(2233+333);
    document.getByElementId('Form').InnerHTML='Escreva';
    document.getByElementId('input').InnerHTML='no';
    document.getByElementId('select').InnerHTML='Meu Select';
    console.log(333-333);
    console.log('Ola');
    console.log('Meu');
    console.log('Mundo');
    }
    function input()
    {document.write('Digite a sua Idade');
    document.getByElementId('Quanto').InnerHTML='Tenho';
    document.getByElementId('Anos').InnerHTML='23 anos';
    document.getByElementId('Tem').InnerHTML='Porra';
    console.log(333*333);
    console.log('Escreva');
    console.log('Meu');
    console.log('Nome');
    }
    function kooo()
    {document.write(333*333);
    document.getByElementId('text').InnerHTML='Digite';
    document.getByElementId('area').InnerHTML='o seu';
    document.getByElementId('radio').InnerHTML='Texto';
    console.log(222+222);
    console.log('Selecione');
    console.log('Seu');
    console.log('Input');        
    }
    console.log(444*444);
    console.log('Imprima meu Nome');
    console.log('Guilherme');
    console.log(2222-222);
    document.write('Acesse');
    document.write('Meu');
    document.write('Form');
    document.write('Feito');
    document.write('Acima');
    document.getElementById('Script').innerHTML='Acesse';
    document.getElementById('Log').innerHTML='Meu';
    document.getElementById('console').innerHTML='Formulário';
    document.getElementById('input').innerHTML='Logo';
    document.getElementById('text').innerHTML='Abaixo';
    document.getElementById('summary').innerHTML='Thanks';
    alert(444*444);
    alert(444+3333);
    alert(11222-333);
    alert('Imprima meu Documento');
    alert('Olá Mundo');
    function age()
    {
    document.getElementById('Script').innerHTML='Digite';
    document.getElementById('log').innerHTML='a';
    document.getElementById('Input').innerHTML='Sua';
    document.getElementById('Windows').innerHTML='IDADE';
    }
    function input()
    {
    document.getElementById('Script').innerHTML='Digite';
    document.getElementById('log').innerHTML='a';
    document.getElementById('Input').innerHTML='Sua';
    document.getElementById('Windows').innerHTML='IDADE';
    }
    function alert()
    {
    document.getElementById('Script').innerHTML='Digite';
    document.getElementById('log').innerHTML='a';
    document.getElementById('Input').innerHTML='Sua';
    document.getElementById('Windows').innerHTML='IDADE';
    }
    function idade()
    {
    document.getElementById('Script').innerHTML='Digite';
    document.getElementById('log').innerHTML='a';
    document.getElementById('Input').innerHTML='Sua';
    document.getElementById('Windows').innerHTML='IDADE';
    }
    </script>
    <?php
    $host='127.0.0.1';
    $dbname='Bancodoguibarbosa';
    $username='tabeladogui';
    $password='';
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $nome=$_POST['nome']??null;
    $idade=$_POST['idade']??null;
    $genero=$_POST['genero']??null;
    $rg=$_POST['rg']??null;
    $cpf=$_POST['cpf']??null;
    $email=$_POST['email']??null;
    $telefone=$_POST['telefone']??null;
    $endereco=$_POST['endereco']??null;
    $cep=$_POST['cep']??null;
    $data_nasc=$_POST['data_nasc']??null;
    $estado_civil=$_POST['estado_civil']??null;
    $cor=$_POST['cor']??null;
    $nivel=$_POST['nivel']??null;
    $altura=$_POST['altura']??null;
    $data_hora=$_POST['data_hora']??null;
    $conhecimento=$_POST['conhecimento']??null;
    $experiencia=$_POST['experiencia']??null;
    $nivel_social=$_POST['nivel_social']??null;
    $classe_social=$_POST['classe_social']??null;
    $signo=$_POST['signo']??null;
    $textarea=$_POST['textarea']??null;
    $sql = "INSERT INTO tabeladogui (nome, idade, genero, rg, cpf ,email, telefone, endereco, cep, data_nasc, estado_civil, cor, nivel, altura, data_hora, conhecimento, experiencia, nivel_social, classe_social, signo, textarea)
    VALUES ('$nome','$idade','$genero','$rg','$cpf','$email','$telefone','$endereco','$cep','$data_nasc','$estado_civil','$cor','$nivel','$altura','$data_hora','$conhecimento','$experiencia','$nivel_social','$classe_social','$signo','$textarea')";
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