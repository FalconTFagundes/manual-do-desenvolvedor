<?php
echo ("<div class='fonteprojetos'>");
echo ("<pre>");

echo ("<div class='comeco'>");
echo ("< ?php<hr>");
echo ("</div>");
echo ("<div class='passo1'>");
echo ("1 passo :$ x = 2; <br><br><hr>");
echo ("</div>");
echo ("<div class='passo2'>");
echo ("2 passo :for($ i = 0; $ i < 11; $<br> i++){<br><br><hr>");
echo ('</div>');
echo ("<div class='passo3'>");
echo ("3 passo :  $ result = $ i * $ x <br><hr>");
echo ("</div>");
echo ("<div class='passo4'>");
echo (" echo $ x x $ i = $ result; <br><br><br><hr>");
echo ("</div>");
echo ("<div class='fim'>");
echo (" < ? <br><br><br>");
echo ("</div>");
echo ("</pre>");

echo ("<pre id='comandopre'>");
echo ("<div class='textoexplicacao'> codigo explicado<br><hr></div>");
echo ("<div class='comecoexp'>");
echo ("Inicio do campo php <br><hr>");
echo ("</div>");
echo ("<div class='passo1exp'>");
echo ("1 passo =//Variável x recebe o valor<br><br><hr>");
echo ("</div>");
echo ("<div class='passo2exp'>");
echo ("2 passo = // Laço de Repetição - Variável $ i recebe o valor 0 - Enquanto variável $ i for menor que 11 <br> É acrescentado mais um na variável que já passa a ser 1.<br><br><hr>");
echo ("</div>");
echo ("<div class='passo3exp'>");
echo ("3 passo =//Variável $ result recebe a multiplicação ($ i * $ x(2))<br><br><hr>");
echo ("</div>");
echo ("<div class='passo4exp'>");
echo ("//Resultado apresentado<br><br><hr>");
echo ("</div>");
echo ("<div class='fimexp'>");
echo ("//fim codigo php<br><br>");
echo ("</div>");
echo ("</pre>");
echo ("</div>");




//Comando javascript para iluminar as explicaçoes do site
?>
<br>
<div class='campotextorec'>
<h1>Alguma reclamação, sujestão ou elogio?  Digite para gente.</h1>
<hr>
<input type='text' placeholder='Digite aqui' class='reclamacaocampo'>
<button type='submit' class='buttonprojeto'>ENVIAR</button>
</div>


<script>
  const passo1 = document.querySelector('.passo1');
  const passo1exp = document.querySelector('.passo1exp');
  const passo2 = document.querySelector('.passo2');
  const passo2exp = document.querySelector('.passo2exp');
  const passo3 = document.querySelector('.passo3');
  const passo3exp = document.querySelector('.passo3exp');
  const passo4 = document.querySelector('.passo4');
  const passo4exp = document.querySelector('.passo4exp');
  const fim = document.querySelector('.fim');
  const fimexp = document.querySelector('.fimexp');
  const comeco = document.querySelector('.comeco');
  const comecoexp = document.querySelector('.comecoexp');

  passo1.addEventListener('mouseover', function () {
    passo1.style.backgroundColor = 'yellow';
    passo1exp.style.backgroundColor = 'yellow';
   
  });
  passo1.addEventListener('mouseout', function () {
    passo1.style.backgroundColor = '';
    passo1exp.style.backgroundColor = '';
  
  });
  passo2.addEventListener('mouseover', function () {
    passo2.style.backgroundColor = 'yellow';
    passo2exp.style.backgroundColor = 'yellow';
  });
  passo2.addEventListener('mouseout', function () {
    passo2.style.backgroundColor = '';
    passo2exp.style.backgroundColor = '';
  });
  passo3.addEventListener('mouseover', function () {
    passo3.style.backgroundColor = 'yellow';
    passo3exp.style.backgroundColor = 'yellow';
  });
  passo3.addEventListener('mouseout', function () {
    passo3.style.backgroundColor = '';
    passo3exp.style.backgroundColor = '';
  });
  passo4.addEventListener('mouseover', function () {
    passo4.style.backgroundColor = 'yellow';
    passo4exp.style.backgroundColor = 'yellow';
  });
  passo4.addEventListener('mouseout', function () {
    passo4.style.backgroundColor = '';
    passo4exp.style.backgroundColor = '';
  });
  fim.addEventListener('mouseover', function () {
    fim.style.backgroundColor = 'yellow';
    fimexp.style.backgroundColor = 'yellow';
  });
  fim.addEventListener('mouseout', function () {
    fim.style.backgroundColor = '';
    fimexp.style.backgroundColor = '';
  });
  comeco.addEventListener('mouseover', function () {
    comeco.style.backgroundColor = 'yellow';
    comecoexp.style.backgroundColor = 'yellow';
  });
  comeco.addEventListener('mouseout', function () {
    comeco.style.backgroundColor = '';
    comecoexp.style.backgroundColor = '';
  });

</script>