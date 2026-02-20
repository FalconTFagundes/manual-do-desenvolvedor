
<?php
echo ("<div class='fonteprojetos'>");
echo ("<pre>");

echo ("<div class='comeco'>");
echo ("< ?php<hr>");
echo ("</div>");
echo ("<div class='passo1'>");
echo ("$ data = 04-12-1990; <br><br><hr>");
echo ("</div>");
echo ("<div class='passo2'>");
echo ("list($ dia, $ mes, $ ano) = explode<br>('-', $ data);<br> <br> <br><hr>");
echo ('</div>');
echo ("<div class='passo3'>");
echo ("$ hoje = mktime(0, 0,<br> 0, date('m'), date('d'), date('Y')<br><hr>");
echo ('</div>');
echo ("<div class='passo4'>");
echo ("$ nascimento = mktime( 0, 0, 0, $<br> mes, $ dia, $ ano);<hr>");
echo ('</div>');
echo ("<div class='passo5'>");
echo ("echo Sua idade é: ; <br>");
echo ("echo $ idade;");
echo ("echo anos <hr>");
echo ("</div>");
echo ("<div class='fim'>");
echo (" < ? <br><br>");
echo ("</div>");
echo ("</pre>");

echo ("<pre id='comandopreidade'>");
echo ("<div class='textoexplicacao'> codigo explicado<br><hr></div>");
echo ("<div class='comecoexp'>");
echo ("Inicio do campo php <br><hr>");
echo ("</div>");
echo ("<div class='passo1exp'>");
echo ("1 passo = digite dia, mês e ano de nascimento<br><br><hr>");
echo ("</div>");
echo ("<div class='passo2exp'>");
echo ("2 passo 1 comando = passocomando explode é responsavel por dividir uma string.<br><br><hr>");
echo ("</div>");
echo ("<div class='passo3exp'>");
echo ("3 passo  = mktime é útil para a aritmética e validação de data, já que calculará automaticamente <br> o valor correto para a entrada fora do intervalo.<br><br><hr>");
echo ("</div>");
echo ("<div class='passo4exp'>");
echo ("4 passo = introduzindo as informaçoes na variavel nascimento<br><hr>");
echo ("</div>");
echo ("<div class='passo5exp'>");
echo ("5 passo = no final damos um echo com a variavel $ soma, que contem a variavel x + y<br><br><hr>");
echo ("</div>");
echo ("<div class='fimexp'>");
echo ("fim do programa<br><br>");
echo ("</div>");
echo ("</pre>");
echo ("</div>");




//Comando javascript para iluminar as explicaçoes do site
?>
<br>
<div class='campotextorec'>
<h1>Alguma reclamação, sugestão ou elogio?  Digite para gente.</h1>
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
  const passo5 = document.querySelector('.passo5');
  const passo5exp = document.querySelector('.passo5exp');
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
  passo5.addEventListener('mouseover', function () {
    passo5.style.backgroundColor = 'yellow';
    passo5exp.style.backgroundColor = 'yellow';
  });
  passo5.addEventListener('mouseout', function () {
    passo5.style.backgroundColor = '';
    passo5exp.style.backgroundColor = '';
  });
  passo4.addEventListener('mouseover', function () {
    passo4.style.backgroundColor = 'yellow';
    passo4exp.style.backgroundColor = 'yellow';
  });
  passo4.addEventListener('mouseout', function () {
    passo4.style.backgroundColor = '';
    passo4exp.style.backgroundColor = '';
  });
</script>