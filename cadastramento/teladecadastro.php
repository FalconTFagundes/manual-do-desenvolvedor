<?php

include_once('config.php');

    if(isset($_POST['submit'])){

        //sequência de informações enviadas na tela de cadastro (print_r - exibe na tela)

  /*       print_r('Nome completo: ' . $_POST['nome']);
        echo "<br>";
        print_r('Nickname: ' . $_POST['nick']);
        echo "<br>";
        print_r('Email: ' . $_POST['email']);
        echo "<br>";
        print_r('Senha: ' . $_POST['senha']);
        echo "<br>";
        print_r('Segunda Senha: ' .$_POST['senhaconfirmar']);
        echo "<br>";
        print_r('Telefone: ' . $_POST['telefone']);
        echo "<br>";
        print_r('Data de Nascimento: ' . $_POST['datanascimento']); */


        $nome = $_POST['nome'];
        $nickname = $_POST['nick'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senhaconfirmar = $_POST['senhaconfirmar'];
        $telefone = $_POST['telefone'];
        $datanasci = $_POST['datanascimento'];


        $result = mysqli_query($conexao, "INSERT INTO tbuser(nome,nickname,email,senha,senhaconfirm,telefone,datanasci) VALUES ('$nome','$nickname','$email','$senha','$senhaconfirmar','$telefone','$datanasci')");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        @font-face {
            font-family: "louis";
            src: url(../font/Louis\ George\ Cafe.ttf);
        }
        body{
            font-family: louis;
            background: linear-gradient(50deg, rgba(14, 0, 0, 0.836), rgba(209, 48, 48, 0.753));
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.712);
            color: white;
            padding: 35px;
            width: 35%;
            border-radius: 20px;
        }

        fieldset{
            border-radius: 15px;
            color: rgb(255, 255, 255);
            font-size: 15pt;
            border: red 3px solid;
            padding: 15px;
        }
        legend{
           background-color: red;
           padding: 3px;
           border-radius: 10px;
           border: 2px solid red;
           text-align: center;
        }

        .inputbox{
            position: relative;
        }

        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
        }

        .labelinput{
            position: absolute;
            top: 0%;
            width: 140%;
            left: 0%;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus ~ .labelinput,
        .inputUser:valid ~ .labelinput {
            top: -20px;
            font-size: 12pt;
            color: rgb(255, 73, 73);
        }

        #datanascimento{
            padding: 8px;
            border: none;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit{
            background: rgb(255,0,26);
            background: linear-gradient(257deg, rgba(255,0,26,1) 0%, rgba(255,0,185,1) 100%);
            padding: 15px;
            border: none;
            width: 100%;
            border-radius: 15px;
            color: white;
            outline: none;
            transition-duration: 0.3s;

        }

        #submit:hover{
            background: rgb(181,0,18);
            background: linear-gradient(257deg, rgba(181,0,18,1) 0%, rgba(168,0,123,1) 100%);
            cursor: pointer;
            padding: 20px;
            transition-duration: 0.3s;
            box-shadow: 2px 2px rgb(255, 137, 137), 3px 3px rgb(255, 255, 255);
        }

        summary{

            transition: 0.5s;
        }

        summary:hover{

            transition: 0.5s;
            color: red;

        }

        details{
            transition: 0.5s;
        }

        details:hover{
            transition: 0.5s;

        }

    </style>
</head>
<body>
    <div class="box">
        <form action="teladecadastro.php" method="POST">
            <fieldset>
                <legend><b>CADASTRO</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="nick" id="nick" class="inputUser" required>
                    <label for="nick" class="labelinput">Nickname</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelinput">Email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelinput">Digite sua Senha</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="password" name="senhaconfirmar" id="senhaconfirmar" class="inputUser" required>
                    <label for="senhaconfirmar" class="labelinput">Confirme sua Senha</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelinput">Telefone</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <label for="datanascimento">Data de Nascimento</label>
                    <input type="date" name="datanascimento" id="datanascimento" required>
                </div>
                <br><br>
                <div class="inputbox">
                <details>
                    <summary>Termos de Uso</summary>
                    <p>Termos de Uso & Política de Privacidade

Ao concordar com este termo você autoriza a Equipe do MANUAL DO DESENVOLVEDOR postar os projetos que o você lançar no site e verifica-los para que diversas pessoas tenham acesso e possam usufruir sobre o seu projeto, com sua imagem de Perfil, idade, E-mail, Nome de Usuário, Senha, ao se cadastrar no site será divulgada na área de cadastros para que as pessoas na qual procurem saber sobre seu projeto vejam seu perfil analisando você e seu programa. Também poderemos usar seus programas para o acesso de possíveis projetos futuros como em implementação de sites para o próprio funcionamento deste site.


</p>    
        <label>Aceitar</label>
        <input type="checkbox" name="termos" id="termos" required>
                    </details>
                    <br><br>
                </div>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>