<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta name="theme-color" content="#f4545">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<style>
body{margin: auto;align-items: center;justify-content: center;text-align: center;background:linear-gradient(to right,blue,black,blue);}
h1{white-space:nowrap;text-shadow:9px;text-decoration: underline;font-size: 30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;color: white;cursor: text;}
h2{white-space:nowrap;text-shadow:9px;text-decoration: none;font-size: 16px;font-family: Arial, Helvetica, sans-serif;font-style: oblique;color: black;cursor: text;}
p{text-shadow: 9px;text-decoration: none;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;color: white;}
a{text-decoration: none;text-shadow: 9px;font-size: 16px;font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-style: oblique;border-radius: 10px 10px;}
summary{cursor: grab;width: 100px;margin: auto;border-radius: 10px 10px;padding: 5px;font-size: 18px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: brown;color: white;border: 4px solid white;box-shadow: 8px 8px 8px black;}
footer{align-items: center;justify-content: center;text-align: center;margin: auto;border-radius: 10px 10px;width: 300px;padding: 30px;cursor:grab;border:5px solid white;}
nav{align-items: center;justify-content: center;text-align: center;margin: auto;border-radius: 10px 10px;width: 300px;padding: 30px;cursor:grab;border:5px solid whitesmoke;}
.summary:hover{transition: ease s;transform: scale(1.05);}
.footer:hover{transition: ease s;transform: scale(1.07);}
.nav:hover{transition: ease s;transform: scale(1.08);}
form{margin: auto;align-items: center;justify-content: center;text-align: center;display: flex;flex-direction: column;}
fieldset{cursor: text;width: 300px;margin: auto;border-radius: 10px 10px;padding: 14px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;background-color: whitesmoke;border: 3px solid black;box-shadow: 5px 5px 5px red;}
label{text-shadow: 9px;margin: auto;padding: 20px;font-size: 18px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;color: black;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;cursor: grab;}
.color1{display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;gap: 6px;padding: 10px;cursor: grabbing;width: 800px;border-radius: 10px 10px;background-color:blue;border: 4px solid white;box-shadow: 6px 6px 6px black;}
.color2{display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;gap: 6px;padding: 10px;cursor: grabbing;width: 800px;border-radius: 10px 10px;background-color:darkred;border: 4px solid white;box-shadow: 6px 6px 6px black;}
.color3{display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;gap: 6px;padding: 10px;cursor: grabbing;width: 800px;border-radius: 10px 10px;background-color:darkgoldenrod;border: 4px solid white;box-shadow: 6px 6px 6px black;}
.color4{display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;gap: 6px;padding: 10px;cursor: grabbing;width: 800px;border-radius: 10px 10px;background-color:darkorange;border: 4px solid white;box-shadow: 6px 6px 6px black;}
input{margin: auto;text-align: left;padding: 4px;width: 300px;margin: auto;border-radius: 10px 10px;cursor: auto;background-color: whitesmoke;border: 3px solid black;color: black;font-size: 16px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;display: flex;flex-direction: column;}
select{cursor: move;width: 200px;margin: auto;border-radius: 10px 10px;padding: 6px;background-color: black;color: yellow;border: 4px solid white;box-shadow: 6px 6px 6px black;font-size: 16px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
textarea{cursor: text;margin: auto;height: 200px;width: 300px;border-radius: 10px 10px;padding: 12px;background-color: antiquewhite;border: 3px solid black;color: black;font-size: 16px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-style: oblique;}
button{cursor: progress;width: 280px;margin: auto;border-radius: 10px 10px;padding: 5px;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: black;color: yellow;border: 4px solid white;box-shadow: 6px 6px 6px black;}
</style>
<body>
<h1><big>Meu Form</big></h1>
    <br>
    <p id="script"></p>
    <br>
    <p id="text"></p>
    <br>
    <p id="windows"></p>
    <br>
    <p id="alert"></p>
    <br>
    <p id="summary"></p>
    <br>
    <p id="suport"></p>
    <br>
    <p id="form"></p>
    <br>
    <p id="fieldset"></p>
    <br>
    <div id="text"><details><summary style="background-color:white;color:black;width:300px;border:4px solid black;box-shadow:5px 5px 5px red;">Formulário</summary>
    <br>
    <form action="form.php" method="post">
    <header>
    <h1><big>Cadastro de <b style="color:red;">BRS</b></big></h1>
    </header>
    <fieldset>
    <label for="Nome">Nome</label>
    <input type="text" id="Nome" name="nome" title="" placeholder="Exemplo: Guilherme Barbosa Da Silva" max="30" maxlength="30">
    <label for="Idade">Idade</label>
    <input type="number" id="Idade" name="idade" title="Digite a sua idade" placeholder="Exemplo: 23 ou 39 anos??" max="30" maxlength="30">
    <label for="Sexo">Sexo</label>
    <select name="genero" id="Sexo" required style="font-size:14px;padding:3px;width:160px;background-color:white;color:red;border:3px solid black;box-shadow:4px 4px 4px black;">
    <option value="" selected disabled>Selecione</option> 
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Cisgênero">Cisgênero</option>
    <option value="Bigênero">Bigênero</option>
    <option value="Transgênero">Transgênero</option>
    <option value="Homossexual">Homossexual</option>
    </select>
    <br>
    <label for="RG">RG</label>
    <input type="text" id="RG" name="rg" title="Digite o seu RG" placeholder="Exemplo: 53.742.867-7" max="30" maxlength="30">
    <label for="Data de Nascimento">Data de Nascimento</label>
    <input type="date" id="Data de Nascimento" name="data_nasc" title="Digite sua Data de Nascimento" placeholder="Exemplo: 22/05/2001" max="30" maxlength="30">
    <label for="CPF">CPF</label>
    <input type="text" id="CPF" name="cpf" title="Digite o seu CPF" placeholder="Exemplo: 503.552.748-41" max="30" maxlength="30">
    <label for="Cep">Cep</label>
    <input type="text" id="Cep" name="cep" title="Digite o seu CEP" placeholder="Exemplo: 03936-000" max="30" maxlength="30">
    <label for="Endereço">Endereço</label>
    <input type="text" id="Endereço" name="endereco" title="Digite o seu Endereço" placeholder="Exemplo: Av Rio das Pedras Nª4100" max="30" maxlength="30">
    <label for="Telefone">Telefone</label>
    <input type="tel" id="Telefone" name="telefone" title="Digite o seu Telefone" placeholder="Exemplo:(11) 98341-7590" max="30" maxlength="30">
    <label for="Email">Email</label>
    <input type="email" id="Email" name="email" title="Digite o seu Email" placeholder="Exemplo: guilherme8876sk@gmail.com" max="30" maxlength="30">
    <label for="Estado cívil">Estado cívil</label>
    <select name="estado_civil" id="Estado Civil" required style="font-size:14px;padding:4px;width:140px;background-color:blue;color:white;border:3px solid white;box-shadow:5px 5px 5px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="Solteiro">Solteiro</option>
    <option value="Casado">Casado</option>
    <option value="Divorciado">Divorciado</option>
    <option value="Separado">Separado</option>
    <option value="Viúvo">Viúvo</option>
    <option value="Compromissado">Compromissado</option>
    </select>
    <br>
    <label for="Nível">Nível</label>
    <input type="range" id="Nível" name="nivel" title="" placeholder="Digite o seu nível" max="30" maxlength="30">
    <label for="Sua Cor">Sua Cor</label>
    <input type="color" id="Sua Cor" name="cor" title="Digite a sua Cor" placeholder="Exemplo: branco ou negro" max="30" maxlength="30">
    <label for="Sua altura">Sua altura</label>
    <select name="altura" id="Sua altura" required style="font-size:14px;padding:4px;width:140px;background-color:black;color:white;border:3px solid white;box-shadow:3px 3px 3px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="1.50cm">1.50cm</option>
    <option value="1.60cm">1.60cm</option>
    <option value="1.70cm">1.70cm</option>
    <option value="1.80cm">1.80cm</option>
    <option value="1.90cm">1.90cm</option>
    <option value="2.00cm">2.00cm</option>
    </select>
    <br>
    <label for="Data e Hora">Data e Hora</label>
    <input type="datetime-local" id="Data e Hora" name="data_hora" title="Digite a sua Data e Hora" placeholder="Exemplo: 22/05 ás 10 AM" max="30" maxlength="30">
    <br>
    <br>
    <h2><big>Qual o seu nível de conhecimento ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL</summary>
    <br>
    <div class="color1">
    <label for="Jûnior" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Jûnior</label>
    <input type="radio" name="conhecimento" value="Jûnior" required>
    <label for="Aprendiz" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Aprendiz</label>
    <input type="radio" name="conhecimento" value="Aprendiz" required>
    <label for="Pleno" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Pleno</label>
    <input type="radio" name="conhecimento" value="Pleno" required>
    <label for="Sênior" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Sênior</label>
    <input type="radio" name="conhecimento" value="Sênior" required>
    <label for="Master" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Master</label>
    <input type="radio" name="conhecimento" value="Master" required>
    <label for="Profissional" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Profissional</label>
    <input type="radio" name="conhecimento" value="Profissional" required>
    <label for="Excelente" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Excelente</label>
    <input type="radio" name="conhecimento" value="Excelente" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de experiencia ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL</summary>
    <br>
    <div class="color2">
    <label for="Aprendiz" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Aprendiz</label>
    <input type="radio" name="experiencia" value="Aprendiz" required>
    <label for="Iniciante" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Iniciante</label>
    <input type="radio" name="experiencia" value="Iniciante" required>
    <label for="Intermediário" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Intermediário</label>
    <input type="radio" name="experiencia" value="Intermediário" required>
    <label for="Mediano" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Mediano</label>
    <input type="radio" name="experiencia" value="Mediano" required>
    <label for="Avançado" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Avançado</label>
    <input type="radio" name="experiencia" value="Avançado" required>
    <label for="Master" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Master</label>
    <input type="radio" name="experiencia" value="Master" required>
    <label for="Expert" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Expert</label>
    <input type="radio" name="experiencia" value="Expert" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível social ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL</summary>
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
    <label for="Famoso" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Famoso</label>
    <input type="radio" name="nivel_social" value="Famoso" required>
    <label for="Tiktoker" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:whitJûniore;">Tiktoker</label>
    <input type="radio" name="nivel_social" value="Tiktoker" required>
    <label for="Famosinho" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Famosinho</label>
    <input type="radio" name="nivel_social" value="Famosinho" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual a sua postura ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL</summary>
    <br>
    <div class="color4">
    <label for="Normal" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Normal</label>
    <input type="radio" name="postura" value="Normal" required>
    <label for="Eréta" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Eréta</label>
    <input type="radio" name="postura" value="Eréta" required>
    <label for="Corcûnda" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Corcûnda</label>
    <input type="radio" name="postura" value="Corcûnda" required>
    <label for="Posicionada" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Posicionada</label>
    <input type="radio" name="postura" value="Posicionada" required>
    <label for="Alinhada" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Alinhada</label>
    <input type="radio" name="postura" value="Alinhada" required>
    <label for="Desalinhada" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Desalinhada</label>
    <input type="radio" name="postura" value="Desalinhada" required>
    <label for="Desengonçada" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Desengonçada</label>
    <input type="radio" name="postura" value="Desengonçada" required>
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
    <option value="Capricôrnio">Capricôrnio</option>
    <option value="Gêmeos">Gêmeos</option>
    <option value="Leão">Leão</option>
    <option value="Libra">Libra</option>
    <option value="Sagitário">Sagitário</option>
    <option value="Peixes">Peixes</option>
    <option value="Escorpião">Escorpião</option>
    <option value="Touro">Touro</option>
    <option value="Virgem">Virgem</option>
    <option value="Câncer">Câncer</option>
    <option value="Besta">Besta</option>
    </select>
</details></div></div>
    <br>
    <br>
    <h2><big>Me fale sobre a sua experiencia</big></h2>
    <br>
    <textarea name="experience_text" id="experience_text" required rows="9"></textarea>
    <br>
    <br>
    <button value="experience_text">Cadastre</button>
    <br>
    </fieldset>
    <br>
    <br>
    <div class="nav">
    <nav style="background-color:darkblue;">
    <p style="color:white;">Retorne para a minha <a href="index.php" target="_blank" rel="noopener" style="text-shadow:9px;text-decoration:none;border-radius:10px 10px;background-color:white;color:red;border:3px solid black;box-shadow:3px 3px 3px white;cursor:alias;font-size:14px;">1ªPágina</a></p>
    </nav>
    </div>
    <br>
    <div class="footer">
    <footer style="background-color:darkred;">
    <p style="color:white;">@GuilhermeBarbosaDaSilva,todos os direitos autorais reservados.</p>
    </footer>
    </div>
    </form>
</details></div>
    <script>
    alert('Olá Mundo !!');
    alert('Bem-Vindo');
    alert(10000*303030);
    alert(122/333);
    alert(1232-4949);
    document.write('Olá');
    document.write('Segue');
    document.write('Meu Form');
    document.write('Acima');
    document.write('Thanks');
    document.write(202020*2222);
    document.getElementById('script').innerHTML='Ola';
    document.getElementById('text').innerHTML='Segue';
    document.getElementById('windows').innerHTML='Abaixo';
    document.getElementById('alert').innerHTML='A criação';
    document.getElementById('summary').innerHTML='do';
    document.getElementById('suport').innerHTML='meu';
    document.getElementById('form').innerHTML='formulário';
    document.getElementById('fieldset').innerHTML='Thanks';
    console.log('');
    console.log('');
    console.log('');
    console.log('');
    console.log('');
    console.log('');
    console.log('');
    function name()
    {
        console.log('');
        console.log('');
        console.log('');
    }
    function idade()
    {
        console.log('');
        console.log('');
        console.log('');
    }
    function idade()
    {
        console.log('');
        console.log('');
        console.log('');
        console.log('');
    }
    function altura()
    {
        console.log('');
        console.log('');
        console.log('');
        console.log('');
    }
    </script>
    <?php
    $host="127.0.0.1";
    $dbname="jefreiddahmer";
    $username="serialkiller";
    $password="";
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $nome=$_POST['nome']??null;
    $idade=$_POST['idade']??null;
    $genero=$_POST['genero']??null;
    $rg=$_POST['rg']??null;
    $data_nasc=$_POST['data_nasc']??null;
    $cpf=$_POST['cpf']??null;
    $cep=$_POST['cep']??null;
    $endereco=$_POST['endereco']??null;
    $telefone=$_POST['telefone']??null;
    $email=$_POST['email']??null;
    $estado_civil=$_POST['estado_civil']??null;
    $nivel=$_POST['nivel']??null;
    $cor=$_POST['cor']??null;
    $altura=$_POST['altura']??null;
    $data_hora=$_POST['data_hora']??null;
    $conhecimento=$_POST['conhecimento']??null;
    $experiencia=$_POST['experiencia']??null;
    $nivel_social=$_POST['nivel_social']??null;
    $postura=$_POST['postura']??null;
    $signo=$_POST['signo']??null;
    $experience_text=$_POST['experience_text']??null;
    $sql = "INSERT INTO serialkiller (nome, idade, genero, rg, data_nasc, cpf, cep, endereco, telefone, email, estado_civil, nivel, cor, altura, data_hora, conhecimento, experiencia, nivel_social, postura, signo, experience_text)
    VALUES ('$nome','$idade','$genero','$rg','$data_nasc','$cpf','$cep','$endereco','$telefone','$email','$estado_civil','$nivel','$cor','$altura','$data_hora','$conhecimento','$experiencia','$nivel_social','$postura','$signo','$experience_text')";
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