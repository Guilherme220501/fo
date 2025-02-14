<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta name="theme-color" content="#f4454">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<style>
body{margin: auto;align-items: center;justify-content: center;text-align: center;background: linear-gradient(to right,blue,black,blue);}
h1{text-decoration: none;text-shadow:9px;color: white;font-size: 30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;cursor:grabbing;white-space:nowrap;}
h2{text-decoration: none;text-shadow:9px;color: black;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;cursor:grabbing;white-space:nowrap;}
p{text-decoration: none;text-shadow:9px;color: white;font-size: 16px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;cursor:grab;}
a{text-decoration: none;text-shadow:9px;border-radius:10px 10px;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: initial;cursor:grab;}
.footer:hover{transform: scale(1.05);transition: ease s;}
.nav:hover{transform: scale(1.07);transition: ease s;}
.summary:hover{transform: scale(1.03);transition: ease s;}
footer{align-items: center;justify-content: center;text-align: center;margin: auto;width: 300px;border-radius: 10px 10px;padding: 30px;border: 6px solid white;cursor: grab;}
nav{align-items: center;justify-content: center;text-align: center;margin: auto;width: 300px;border-radius: 10px 10px;padding: 30px;border: 6px solid whitesmoke;cursor: grab;}
summary{cursor: grabbing;width: 100px;margin: auto;border-radius: 10px 10px;padding: 5px;font-size: 17px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: white;color: red;border: 4px solid black;box-shadow: 6px 6px 6px black;}
form{margin: auto;align-items: center;justify-content: center;text-align: center;display: flex;flex-direction: column;}
fieldset{cursor: text;width: 300px;border-radius: 10px 10px;margin: auto;padding: 14px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;background-color: white;border: 4px solid black;box-shadow: 6px 6px 6px red;}
label{text-shadow: 9px;padding: 20px;cursor: grabbing;margin: auto;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;color: black;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
.color1{display:flex;flex-direction:row;gap:6px;padding:10px;margin:auto;align-items:center;text-align:center;justify-content:center;white-space:nowrap;width:800px;border-radius:10px 10px;cursor:grab;background-color:darkblue;border:4px solid white;box-shadow:5px 5px 5px black;}
.color2{display:flex;flex-direction:row;gap:6px;padding:10px;margin:auto;align-items:center;text-align:center;justify-content:center;white-space:nowrap;width:850px;border-radius:10px 10px;cursor:grab;background-color:darkred;border:4px solid white;box-shadow:5px 5px 5px black;}
.color3{display:flex;flex-direction:row;gap:6px;padding:10px;margin:auto;align-items:center;text-align:center;justify-content:center;white-space:nowrap;width:850px;border-radius:10px 10px;cursor:grab;background-color:darkorange;border:4px solid white;box-shadow:5px 5px 5px black;}
.color4{display:flex;flex-direction:row;gap:6px;padding:10px;margin:auto;align-items:center;text-align:center;justify-content:center;white-space:nowrap;width:850px;border-radius:10px 10px;cursor:grab;background-color:darkslateblue;border:4px solid white;box-shadow:5px 5px 5px black;}
input{margin: auto;text-align: left;text-shadow: 9px;width: 300px;border-radius: 10px 10px;padding: 4px;font-size: 16px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;color: black;background-color: whitesmoke;border: 4px solid blue;box-shadow: 4px 4px 4px black;cursor: grabbing;}
select{margin: auto;text-shadow: 9px;border-radius: 10px 10px;width: 200px;padding: 4px;cursor: grab;background-color: black;color: yellow;border: 4px solid white;box-shadow: 5px 5px 5px black;}
textarea{cursor: text;height: 200px;width: 300px;margin: auto;border-radius: 10px 10px;padding: 14px;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;background-color: antiquewhite;border: 4px solid black;color: black;}
button{cursor: progress;margin: auto;width: 280px;border-radius: 10px 10px;padding: 4px;font-size: 18px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: blue;color: whitesmoke;border: 4px solid white;box-shadow: 6px 6px 6px black;}
</style>
<body>
    <h1><big>Meu Formulário</big></h1>
    <br>
    <p id="Script"></p>
    <br>
    <p id="Hello"></p>
    <br>
    <p id="Word"></p>
    <br>
    <p id="Best"></p>
    <br>
    <p id="Friend"></p>
    <br>
    <p id="Night"></p>
    <br>
    <br>
    <div id="text"><details><summary style="width:300px;background-color:white;color:red;border:4px solid black;box-shadow:5px 5px 5px black;">Formulário</summary>
    <br>
    <header><h1><big>Cadastro de <b style="color:red;">Brs</b></big></h1></header>
    <br>
    <main>  
    <form action="form2.php" method="post">
    <fieldset>
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="Nome" title="Digite o seu Nome" placeholder="Exemplo: Guilherme Barbosa Da Silva;" maxlength="30" max="30" required>
    <label for="Idade">Idade</label>
    <input type="text" name="idade" id="Idade" title="Digite a sua Idade" placeholder="Exemplo: 23 ou 35 anos ?;" maxlength="30" max="30" required>
    <label for="Sexo">Sexo</label>
    <select name="genero" id="Sexo" required style="padding:3px;font-size:14px;width:150px;background-color:white;color:red;border:4px solid black;box-shadow:5px 5px 5px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Cisgênero">Cisgênero</option>
    <option value="Transgenêro">Transgenêro</option>
    <option value="Homossexual">Homossexual</option>
    <option value="Bissexual">Bissexual</option>
    </select>
    <br>
    <label for=RG"">RG</label>
    <input type="text" name="rg" id="RG" title="Digite o seu RG" placeholder="Exemplo: 53.742.867-7;" maxlength="30" max="30" required>
    <label for="CPF">CPF</label>
    <input type="text" name="cpf" id="CPF" title="Digite o seu CPF" placeholder="Exemplo: 503.552.748-41;" maxlength="30" max="30" required>
    <label for="Telefone">Telefone</label>
    <input type="tel" name="telefone" id="Telefone" title="Digite o seu Telefone" placeholder="Exemplo: (11) 98341-7590;" maxlength="30" max="30" required>
    <label for="Data de Nascimento">Data de Nascimento</label>
    <input type="date" name="data_nasc" id="Data de Nascimento" title="Digite a sua Data de Nascimento" placeholder="Exemplo: 22/05/2001;" maxlength="30" max="30" required>
    <label for="Estado Civil">Estado Civil</label>
    <select name="estado_civil" id="Estado Civil" required style="padding:3px;font-size:13px;width:140px;background-color:blue;color:white;border:3px solid white;box-shadow:4px 4px 4px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="Solteiro">Solteiro</option>
    <option value="Casado">Casado</option>
    <option value="Divorciado">Divorciado</option>
    <option value="Compromissado">Compromissado</option>
    <option value="Separado">Separado</option>
    <option value="Viúvo">Viúvo</option>
    </select>
    <br>
    <label for="Email">Email</label>
    <input type="email" name="email" id="Email" title="Digite o seu Email" placeholder="Exemplo: guilherme8876sk@gmail.com;" maxlength="30" max="30" required>
    <label for="Endereço">Endereço</label>
    <input type="text" name="endereco" id="Endereço" title="Digite o seu Endereço" placeholder="Exemplo: Av Rio das Pedras Nª4100;" maxlength="30" max="30" required>
    <label for="CEP">CEP</label>
    <input type="text" name="cep" id="CEP" title="Digite o seu CEP" placeholder="Exemplo: 03936-000;" maxlength="30" max="30" required>
    <label for="Altura">Altura</label>
    <select name="altura" id="Altura" required style="width:130px;padding:4px;font-size:13px;background-color:black;color:white;border:3px solid white;box-shadow:4px 4px 4px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="1.50 cm">1.50 cm</option>
    <option value="1.60 cm">1.60 cm</option>
    <option value="1.70 cm">1.70 cm</option>
    <option value="1.80 cm">1.80 cm</option>
    <option value="1.90 cm">1.90 cm</option>
    <option value="2.00 cm">2.00 cm</option>
    </select>
    <br>
    <label for="Nivel">Nivel</label>
    <input type="range" name="nivel" id="Nivel" title="Digite o seu Nivel" placeholder="Exemplo: +/-;" maxlength="30" max="30" required>
    <label for="Sua Cor">Sua Cor</label>
    <input type="color" name="cor" id="Sua Cor" title="Digite a sua Cor" placeholder="Exemplo: branco ou negro;" maxlength="30" max="30" required>
    <label for="Data e Hora">Data e Hora</label>
    <input type="datetime-local" name="data_hora" id="Data e Hora" title="Digite a sua Data e Hora" placeholder="Exemplo: 22/05 ás 10 AM;" maxlength="30" max="30" required>
    <br>
    <br>
    <h2><big>Qual o seu nível de Conhecimento ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>Qual?</summary>
    <br>
    <div class="color1">
    <label for="Jûnior" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Jûnior</label>
    <input type="radio" name="conhecimento" value="Jûnior" required>
    <label for="Aprendiz" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Aprendiz</label>
    <input type="radio" name="conhecimento" value="Aprendiz" required>
    <label for="Iniciante" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Iniciante</label>
    <input type="radio" name="conhecimento" value="Iniciante" required>
    <label for="Jovem" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Jovem</label>
    <input type="radio" name="conhecimento" value="Jovem" required>
    <label for="Mediano" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Mediano</label>
    <input type="radio" name="conhecimento" value="Mediano" required>
    <label for="Intermediário" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Intermediário</label>
    <input type="radio" name="conhecimento" value="Intermediário" required>
    <label for="Avançado" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Avançado</label>
    <input type="radio" name="conhecimento" value="Avançado" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de experiencia?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>Qual?</summary>
    <br>
    <div class="color2">
    <label for="Jûnior" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Jûnior</label>
    <input type="radio" name="experiencia" value="Jûnior" required>
    <label for="Iniciante" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Iniciante</label>
    <input type="radio" name="experiencia" value="Iniciante" required>
    <label for="Mediano" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Mediano</label>
    <input type="radio" name="experiencia" value="Mediano" required>
    <label for="Intermediário" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Intermediário</label>
    <input type="radio" name="experiencia" value="Intermediário" required>
    <label for="Avançado" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Avançado</label>
    <input type="radio" name="experiencia" value="Avançado" required>
    <label for="Expert" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Expert</label>
    <input type="radio" name="experiencia" value="Expert" required>
    <label for="Profissional" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Profissional</label>
    <input type="radio" name="experiencia" value="Profissional" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>Qual?</summary>
    <br>
    <div class="color3">
    <label for="Conhecido" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Conhecido</label>
    <input type="radio" name="nivel_social" value="Conhecido" required>
    <label for="Desconhecido" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Desconhecido</label>
    <input type="radio" name="nivel_social" value="Desconhecido" required>
    <label for="Flûente" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Flûente</label>
    <input type="radio" name="nivel_social" value="Flûente" required>
    <label for="Inflûente" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Inflûente</label>
    <input type="radio" name="nivel_social" value="Inflûente" required>
    <label for="Mediano" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Mediano</label>
    <input type="radio" name="nivel_social" value="Mediano" required>
    <label for="Famosinho" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Famosinho</label>
    <input type="radio" name="nivel_social" value="Famosinho" required>
    <label for="Tiktoker" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Tiktoker</label>
    <input type="radio" name="nivel_social" value="Tiktoker" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de classe social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>Qual?</summary>
    <br>
    <div class="color4">
    <label for="Classe A" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Classe A</label>
    <input type="radio" name="classe_social" value="Classe A" required>
    <label for="Classe B" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Classe B</label>
    <input type="radio" name="classe_social" value="Classe B" required>
    <label for="Classe C" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Classe C</label>
    <input type="radio" name="classe_social" value="Classe C" required>
    <label for="Classe D" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Classe D</label>
    <input type="radio" name="classe_social" value="Classe D" required>
    <label for="Classe E" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Classe E</label>
    <input type="radio" name="classe_social" value="Classe E" required>
    <label for="Classe F" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Classe F</label>
    <input type="radio" name="classe_social" value="Classe F" required>
    <label for="Classe X" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Classe X</label>
    <input type="radio" name="classe_social" value="Classe X" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é o seu signo?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:black;color:white;border:3px solid white;box-shadow:5px 5px 5px yellow;">Qual?</summary>
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
    <option value="Virgem">Virgem</option>
    <option value="Gêmeos">Gêmeos</option>
    <option value="Touro">Touro</option>
    <option value="Peixes">Peixes</option>
    <option value="Ofiúco">Ofiúco</option>
    </select>
</details></div></div>
    <br>
    <br>
    <h2><big>Me Fale sobre a sua experiencia</big></h2>
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
    <nav style="background-color:darkblue;">
    <p>Retorne para minha <a href="index.php" target="_blank" rel="noopener" style="background-color: white;color:red;border:3px solid black;box-shadow:4px 4px 4px black;text-shadow:9px;text-decoration:none;border-radius:10px 10px;cursor:grabbing;border-radius:10px 10px;">1Página</a></p>
    </nav>
    </div>
    <br>
    <div class="footer">
    <footer style="background-color:darkred;"><p>@GuilhermeBarbosaDaSilva, todos os direitos autorais.</p>
    </footer>
    </div>
    </form>
    </main>
</details></div>
    <script>
    alert(1000*2233);
    alert('Ola Mundo');
    alert('Bem Vindo');
    alert('Ao Meu Form');
    alert(399/333);
    alert('Formulário');
    document.write('Segue');
    document.write('Meu Form');
    document.write('Acima');
    document.write('Feito');
    document.write('Com');
    document.write('Cuidado');
    document.getElementById('Script').innerHTML='Ola';
    document.getElementById('Hello').innerHTML='Seja';
    document.getElementById('Word').innerHTML='Bem vindo';
    document.getElementById('Best').innerHTML='Ao meu Formulário';
    document.getElementById('Friend').innerHTML='Logo';
    document.getElementById('Night').innerHTML='Abaixo';
    console.log('Hello');
    console.log(39393*333);
    console.log('Word');
    console.log('Bem');
    console.log('Vindo');
    console.log(1222+3333);
    function name()
    {
        console.log('Ola');
        console.log('Seja bem vindo');
        console.log(222*333);
        console.log('ao');
        console.log('form');
    }
    function age()
    {
        console.log('Qual');
        console.log(333*333);
        console.log('Sua idade');
        console.log('Não sei');
        console.log(444+444);
    }
    function altura ()
    {
        console.log('tenho');
        console.log('1 metro');
        console.log(444*444);
        console.log('Sou velho');
        console.log(333+333);
    }
    function cor()
    {
        console.log('Nenhuma');
        console.log(111+111);
        console.log(333*333);
        console.log('Sou');
        console.log('Branco');
    }
    </script>
    <?php
    $host='127.0.0.1';
    $username='guitabela';
    $dbname='bancodogui';
    $password='';
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $nome=$_POST['nome']??null;
    $idade=$_POST['idade']??null;
    $genero=$_POST['genero']??null;
    $rg=$_POST['rg']??null;
    $cpf=$_POST['cpf']??null;
    $telefone=$_POST['telefone']??null;
    $data_nasc=$_POST['data_nasc']??null;
    $estado_civil=$_POST['estado_civil']??null;
    $email=$_POST['email']??null;
    $endereco=$_POST['endereco']??null;
    $cep=$_POST['cep']??null;
    $altura=$_POST['altura']??null;
    $nivel=$_POST['nivel']??null;
    $cor=$_POST['cor']??null;
    $data_hora=$_POST['data_hora']??null;
    $conhecimento=$_POST['conhecimento']??null;
    $experiencia=$_POST['experiencia']??null;
    $nivel_social=$_POST['nivel_social']??null;
    $classe_social=$_POST['classe_social']??null;
    $signo=$_POST['signo']??null;
    $experience_text=$_POST['experience_text']??null;
    $sql = "INSERT INTO guitabela (nome, idade, genero, rg, cpf, telefone, data_nasc, estado_civil, email, endereco, cep, altura, nivel, cor, data_hora, conhecimento, experiencia, nivel_social, classe_social, signo, experience_text)
    VALUES ('$nome','$idade','$genero','$rg','$cpf','$telefone','$data_nasc','$estado_civil','$email','$endereco','$cep','$altura','$nivel','$cor','$data_hora','$conhecimento','$experiencia','$nivel_social','$classe_social','$signo','$experience_text')";
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