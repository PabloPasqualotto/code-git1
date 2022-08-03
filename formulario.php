<?php

    if(isset($_POST['submit']))
    {
        // print_r($_POST['nome']);
        // print_r($_POST['email']);
        // print_r($_POST['telefone']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $data_nasc = $_POST['data_nascimento'];
        $sexo = $_POST['genero'];
        $data_ini = $_POST['data_inicio'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $estado_civil = $_POST['estado_civil'];
        $nome_pai = $_POST['nome_pai'];
        $nome_mae = $_POST['nome_mae'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $fone_res = $_POST['fone_res'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $grupo_miss = $_POST['grupo']; 
        

        $result = mysqli_query($conexao, "INSERT INTO cad_membros(nome,data_nasc,sexo,data_ini,rg,cpf,estado_civil,nome_pai,nome_mae,cep,endereco,numero,complemento,bairro,cidade,estado,fone_res,celular,email,grupo_miss) VALUES ('$nome','$data_nasc','$sexo','$data_ini','$rg','$cpf','$estado_civil','$nome_pai','$nome_mae','$cep','$endereco','$numero','$complemento','$bairro','$cidade','$estado','$fone_res','$celular','$email','$grupo_miss')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css" />
    <title>Cadastro de Membros</title>
</head>

<body>
    <div class="box">
    <div class="scroll">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Membros IEQ Sarandi</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>

                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br><br>

                <label for="data_inicio"><b>Data de Início de Frequência:</b></label>
                <input type="date" name="data_inicio" id="data_inicio" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="rg" id="rg" class="inputUser" required>
                    <label for="rg" class="labelInput">RG</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado_civil" id="estado_civil" class="inputUser" required>
                    <label for="estado_civil" class="labelInput">Estado Civil</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome_pai" id="nome_pai" class="inputUser" required>
                    <label for="nome_pai" class="labelInput">Nome do Pai</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome_mae" id="nome_mae" class="inputUser" required>
                    <label for="nome_mae" class="labelInput">Nome da Mãe</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser" required>
                    <label for="cep" class="labelInput">CEP</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="numero" id="numero" class="inputUser" required>
                    <label for="numero" class="labelInput">Número</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="complemento" id="complemento" class="inputUser" required>
                    <label for="complemento" class="labelInput">Complemento</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="inputUser" required>
                    <label for="bairro" class="labelInput">Bairro</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="fone_res" id="fone_res" class="inputUser" required>
                    <label for="fone_res" class="labelInput">Fone Residencial</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="celular" id="celular" class="inputUser" required>
                    <label for="celular" class="labelInput">Celular</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>

      <div class="container">
      <p>Grupo Missionário:</p>
      <div class="select-box">
        <div class="options-container">
          
          <div class="option">
            <input type="radio" id="jovens" name="grupo" value="jovens" />
            <label for="jovens">Jovens</label>
          </div>

          <div class="option">
            <input type="radio" id="homens" name="grupo" value="homens" />
            <label for="homens">Homens</label>
          </div>

          <div class="option">
            <input type="radio" id="mulheres" name="grupo" value="mulheres" />
            <label for="mulheres">Mulheres</label>
          </div>

          <div class="option">
            <input type="radio" id="casais" name="grupo" value="casais" />
            <label for="casais">Casais</label>
          </div>

          <div class="option">
            <input type="radio" id="cdl" name="grupo" value="cdl" />
            <label for="cdl">CDL</label>
          </div>

          <div class="option">
            <input type="radio" id="louvor" name="grupo" value="louvor" />
            <label for="louvor">Louvor</label>
          </div>

          <div class="option">
            <input type="radio" id="diaconato" name="grupo" value="diaconato" />
            <label for="diaconato">Diaconato</label>
          </div>

          <div class="option">
            <input type="radio" id="midia" name="grupo" value="midia" />
            <label for="midia">Mídia</label>
          </div>
        </div>
        <div class="selected">
          Selecione 
        </div>
      </div>
    </div>
    <script src="select-box.js"></script>
                 <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
        </div>
    </div>
</body>
</html>