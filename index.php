<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Titulo do meu programa-->
    <title>Manual do Desenvolvedor</title>
    <!-- link ligando minha index a minha css-->
    <link rel="stylesheet" href="./css/style.css">
    <!-- CSS INTERNO -->
    <style>
        /* Fonte principal do projeto Nico-Moji(Não possui suporte para caracteres acentuados!) */
        @font-face {
            font-family: 'nicomoji';
            src: url(./font/NicoMoji-Regular.ttf);
        }

        @font-face{
            font-family: 'louis';
            src: url(./font/Louis\ George\ Cafe.ttf);
        }
    </style>
</head>

<body>
    <!--background do site-->
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
   
    <!--primeira imagem da index-->
    <div id="imagemindex1">






        <!-- Cabeçalho (header) -->
        <header>
            <!--logo 1 da index-->
            <div id="logoindex1">
                <a href='index.php'>
                    <img src="img/logomanual.png">
                </a>
            </div>
            <!--fim da 1 logo da index-->

            <!-- inicio div que contém os links que levam as páginas -->
            <div id="divlinks1">
                <!--links que levam as paginas-->
                <a href='index.php?page=downloads' class="styleelink">DOWNLOADS</a>
                <a href='index.php?page=cursos' class="styleelink">CURSOS</a>
                <a href='index.php?page=projetos' class="styleelink">PROJETOS</a>
                <a href='index.php?page=equipe' class="styleelink">EQUIPE</a><br><br>
                
                <!--fim dos links que levam as paginas-->
                <!-- fim div que contém os links que levam as páginas -->
            </div>
            <div id="usuario2">
            <p>Rafael Fagundes</p>
             <a href='index.php?page=usuario'><img src="../manualdodesenvolvedor/img/fael_1.png" alt="Gerente" id="imguser"></a>
            </div>
        </header>
        <!-- Fim do cabeçalho (header) -->

        <div>
            <?php

            //incluindo a página function
            
            include_once 'function/func.php';


            //recebendo o get de cada página
            
            if (isset($_GET['page']) && !empty($_GET['page'])) {
                $mostrar = $_GET['page'];
                if ($mostrar == 'downloads') {
                    include_once 'downloads.php';
                } else if ($mostrar == 'equipe') {
                    include_once 'equipe.php';
                } else if ($mostrar == 'projetos') {
                    include_once 'projetos.php';
                }
                else if ($mostrar == 'cursos') {
                    include_once 'cursos.php';
                }
                else if ($mostrar == 'soma') {
                    include_once 'soma.php';
                }
                else if ($mostrar == 'divisao') {
                    include_once 'divisao.php';
                }
                else if ($mostrar == 'percentual'){
                    include_once 'percentual.php';
                }
                else if ($mostrar == 'idade'){
                    include_once 'idade.php';
                }
                else if ($mostrar == 'tabuada'){
                    include_once 'tabuada.php';
                }
                else if ($mostrar == 'usuario'){
                    include_once 'usuario.php';
                }
            }else{


            ?>
        </div>



        <!--div da primeira escrita do site-->
        <div id="escritaindex1">
            <!--Titulo principal index-->
            <h1> APRENDA A PROGRAMAR DE UM JEITO DIFERENTE !</h1>
            <!--fim Titulo principal index-->

            <!--mensagem principal index-->
            </div>

            <div id="escritaindex2">

            <p> Site de suporte e ajuda a programadores, prezamos por trazer uma forma inteligente de
                passar
                conhecimendo e tornar a sua caminhada pela programação mais facil, com o Manual do Deselvolvedor, você
                pode aprender de uma forma interativa, interagir no nosso forum, trocar informaçoes, e o mais
                importante, se divertir. </p>

                </div>
            <!--Fim primeira mensagem do site index-->
            <div id="logos"></div>

        <!--fim a primeira escrita do site-->
        <!--div da imagem (programação)-->

    </div>
    <!--fim da primeira imagem da index-->

    <!--div corpo index-->
    <div id="corpoindex">
        <!--paragrafo e titulo texto 2 index-->
        <div id="tituloparte2index">
            <br>
            <!--inicio titulo texto 2 index-->
            <h1>Inicio da nossa Historia</h1>
            <!--fim titulo texto 2 index-->

            <!--inicio paragrafo texto 2 index-->
            <p>Seja bem vindo ao nosso site! Aqui se inicia um projeto, uma nova forma de vida e de aprendizado. Aprenda de forma intuitiva e muito
                inteligível para todos!

                Prezamos e investimos em seu conhecimento, esperamos que você faça o mesmo, se dedicando a aprender utilizando as ferramentas disponíveis aqui no Manual do Desenvolvedor e no mundo digital!
                somos alunos do Senai de Governador Valadares e assim como você, estamos buscando conhecimento, criamos este projeto com o intuito de te mostrar que é sim possível ingressas nesse mundo da programação
                onde nem tudo é fácil, mas também está longe de ser difícil, vocês já possuem tudo o que precisam para se tornarem profissionais de suscesso dentro desta incrível área
            </p>
            <!--fim paragrafo texto 2 index-->

            <br>
            <br>
            
        </div>
        <hr>
        <!--fim paragrafo e titulo texto 2 index-->


        <!--inicio imagem diegoprogramas e historia da desenvolvedora-->
        <div>
            <!--inicio imagem diegoprogramas-->
            <div id="diegoprogramaslogo">
                

           
            <!--fim imagem diegoprogramas-->
            <!--inicio texto e titulo 3 index-->
            <div id="tituloparte3index">
                <h1>Faça Acontecer</h1>
                <p  class="text"> Infelizmente sabemos o quão difícil é desenvolver uma certa ideia, ideia essa que independente de quão formal ou profssional que seja,
                    todos tem a capacidade de pensar, porém, poucos conseguem implementar. O nosso foco é fazer você deixar esse pensamento negativo e passar a pensar
                    como alguém que almeja algo grande, pois quem almeja já tem tudo o que precisa para conseguir!
                     
                    Seja bem vindo(a) ao nosso site, esperamos que você se desenolva e se sinta apoiado e motivado, iremos fazer seu tempo aqui valer a pena!
                </p>
                </div>
            </div>
            <!--fim texto e titulo 3 index-->
        </div>
        <!--fim imagem diegoprogramas e historia desenvolvedora-->
        <hr>
        <!--inicio dos cards-->
        <div id="cardsindex">
            <!--inicio do primeiro card-->
            <div class="divcard">
                <h1> Comentario dos nossos assinantes</h1>
                <!--inicio da primeira imagem e texto-->
                <div id="imagem1card">
                    <p class="textocards"> Descubra oque outras pessoas estão achando do aprendizado desse site, você
                        tambem pode dar sua opinião no site, interagir com o publico e publicar algum conhecimento
                        para o nosso site,
                        tambem temos a aba de ajuda rapida, que responde a maior parte da duvida dos usuarios.
                    </p>
                </div>
                <!--fim daprimeira imagem e texto-->
            </div>
            <!--fim do primeiro card-->
            <!--inicio do segundo card-->
            <div class="divcard">
                <h1> Aprenda em 1 clique</h1>
                <!--inicio da segunda imagem e texto-->
                <div id="imagem2card">
                    <p class="textocards"> Nosso site tem ferramentas essenciais para você que quer entrar no mercado
                        de trabalho, conteúdos simples que vão facilitar sua entrada na área da programação, que ja
                        abrange varias áreas do mundo inteiro, seja lá qualquer área, contamos com
                        suporte do php, JavaScript e muito mais!
                    </p>
                </div>
                <!--fim da segunda imagem e texto-->
            </div>
            <!--fim do segundo card-->
            <!--inicio do terceiro card-->
            <div class="divcard">
                <h1> No conforto de sua casa</h1>
                <!--inicio da terceira imagem e texto-->
                <div id="imagem3card">
                    <p class="textocards">Prezamos pelo bem estar dos nossos usuarios, com o Manual do Desenvolvedor
                        você aprende sem sair de casa, todas as funcionalidades da programação na palma da sua mão. 
            </p>
                </div>
                <!--fim da terceira imagem e texto-->

            </div>

            <!--fim do terceiro card-->


        </div>
        <!--fim dos cards-->
        <hr>
        <!--inicio das perguntas-->
        <div id=campoperguntas>
            <label id="pergunta">
                <h2>Perguntas Frenquentes</h2>
            </label>
            <section>
                <details>
                    <summary class="perguntas">Por que aprender a programar?</summary>
                    <p class="detalhes">Além de ser utilizada para desenvolver softwares e soluções tecnológicas super
                        complexas, a programação pode trazer benefícios que você nem imagina,
                        como desenvolver o seu raciocínio lógico e simplificar tarefas do dia a dia</p>
                </details><br><br>
                <details>
                    <summary class="perguntas">Mercado de trabalho</summary>
                    <p class="detalhes">Para um programador, há espaço em várias áreas, como grandes empresas de
                        software, departamentos de TI corporativos e empresas de serviços.
                        Esses profissionais também podem atuar como consultores e autônomos para pequenas e médias
                        empresas.</p>
                </details><br><br>
                <details>
                    <summary class="perguntas">O que eu preciso para começar a programar?</summary>
                    <p class="detalhes">Para aprender a programar é simples: você precisa apenas de um computador e
                        força de vontade.
                        Os profissionais que possuem conhecimento em programação estão ganhando mais destaque dentro do
                        mercado de trabalho.
                        Inclusive, podemos ver que a demanda por esse tipo de colaborador tem aumentado.</p>
                </details><br><br>
                <details>
                    <summary class="perguntas">Onde posso aprender a programar?</summary>
                    <p class="detalhes">Você pode optar por aprender por aqui, pois vamos fornecer diversos guias e
                        cursos gratuitos onde você poderá tirar suas dúvidas e aprender mais e mais.
                    </p>
                </details><br><br>
            </section>
        </div>

        <!--fim das perguntas-->
        <hr>
        <!--inicio div imagem musculos e escrita-->
            <div id='musculoescrita'>

                <div id="">

                </div>
                <div id="">

                </div>
                <div class="escritacard2">
                    <h1>Aprender é poder</h1>
                    <p>aprenda com as melhores ferramentas do mercado</p>
                </div>
        </div>

        <!--fim div imagem musculos e escrita-->

        <!--inicio card das ferramentas (js node e php)-->
   
    <!--fim corpo index-->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <script>
        function teste(){
            $('div#teste').html('aqui é o Luciano');
        }
    </script>
    <div id="divdoscards">
        <div class="cards">
            <h2>Node.js</h2>
            <img src="../manualdodesenvolvedor/img/node.png" class="imgcards">
            <div class="textocard">
                <p>Node.js é um software de código aberto, multiplataforma, baseado no interpretador
                V8 do Google e que permite a execução de códigos JavaScript fora de um navegador web. A principal característica
                do Node.js é sua arquitetura assíncrona e orientada por eventos. </p>
            </div>
        </div>
        <div class="cards" class="imgcards">
            <h2>Java Script</h2>
            <img src="../manualdodesenvolvedor/img/js.png" class="imgcards">
            <div class="textocard">
                <p>JavaScript é uma linguagem de programação interpretada estruturada, de script em alto nível com 
                tipagem dinâmica fraca e multiparadigma. Juntamente com HTML e CSS, o JavaScript é uma das três
                principais tecnologias da World Wide Web.</p>
            </div>
        </div>
        <div class="cards">
            <h2>PHP</h2>
            <img src="../manualdodesenvolvedor/img/php.jpg" class="imgcards">
            <div class="textocard">
                <p>PHP é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de
                aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World
                Wide Web.</p>
            </div>
        </div>
    </div>           
</body>
<?php
            }
?>


        
<!--inicio do rodape-->
<footer>
    <div class="footerimg">
            
    <img src="img/logoindex1.png" alt="Manual do Desenvolvedor">
        </div>

</footer>
<!--fim do rodape-->


</html>

