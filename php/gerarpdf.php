<?php
$matCns      		= utf8_encode($_POST['matCns']);
$nomeCompleto		= utf8_encode($_POST['nomeCompleto']);
$emailCliente		= utf8_encode($_POST['emailCliente']);
$telefoneCliente	= utf8_encode($_POST['telefoneCliente']);
$enderecoCliente	= utf8_encode($_POST['enderecoCliente']);
$numberEnd      	= utf8_encode($_POST['numberEnd']);
$cepEnd      	    = utf8_encode($_POST['cepEnd']);
$cityEnd      	    = utf8_encode($_POST['cityEnd']);
$inputState      	= utf8_encode($_POST['inputState']);
$inputSigla     	= utf8_encode($_POST['inputSigla']);
$temAlergia     	= utf8_encode($_POST['temAlergia']);
$gridRadios1     	= utf8_encode($_POST['gridRAdios1']);
$gridRadios2     	= utf8_encode($_POST['gridRAdios2']);
$inputFumante    	= utf8_encode($_POST['inputFumante']);
$radiosFumante1    	= utf8_encode($_POST['radiosFumante1']);
$radiosFumante2    	= utf8_encode($_POST['radiosFumante2']);
$gestante        	= utf8_encode($_POST['gestante']);
$radiosGestante1    = utf8_encode($_POST['radiosGestante1']);
$radiosGestante2    = utf8_encode($_POST['radiosGestante2']);
$inputStateDoenca    = utf8_encode($_POST['inputStateDoenca']);
$inputDoenca         = utf8_encode($_POST['inputDoenca']);
$relacaoDente         = utf8_encode($_POST['relacaoDente']);
$inputDente         = utf8_encode($_POST['inputDente']);



// PEGA O ARQUIVO MODELO
$pdf = file_get_contents("../modelo.html");

// SUBSTITUI COM OS DADOS FORNECIDOS
$pdf = str_replace("#matCns","$matCns",$pdf);
$pdf = str_replace("#nomeCompleto","$nomeCompleto",$pdf);
$pdf = str_replace("#emailCliente","$emailCliente",$pdf);
$pdf = str_replace("#telefoneCliente","$telefoneCliente",$pdf);
$pdf = str_replace("#enderecoCliente","$enderecoCliente",$pdf);
$pdf = str_replace("#numberEnd","$numberEnd",$pdf);
$pdf = str_replace("#cepEnd","$cepEnd",$pdf);
$pdf = str_replace("#cityEnd","$cityEnd",$pdf);
$pdf = str_replace("#inputState","$inputState",$pdf);
$pdf = str_replace("#inputSigla","$inputSigla",$pdf);
$pdf = str_replace("#temAlergia","$temAlergia",$pdf);
$pdf = str_replace("#gridRAdios1","$gridRAdios1",$pdf);
$pdf = str_replace("#gridRAdios2","$gridRAdios2",$pdf);
$pdf = str_replace("#inputFumante","$inputFumante",$pdf);
$pdf = str_replace("#radiosFumante1","$radiosFumante1",$pdf);
$pdf = str_replace("#radiosFumante2","$radiosFumante2",$pdf);
$pdf = str_replace("#gestante","$gestante",$pdf);
$pdf = str_replace("#radiosGestante1","$radiosGestante1",$pdf);
$pdf = str_replace("#radiosGestante2","$radiosGestante2",$pdf);
$pdf = str_replace("#inputStateDoenca","$inputStateDoenca",$pdf);
$pdf = str_replace("#inputDoenca","$inputDoenca",$pdf);
$pdf = str_replace("#relacaoDente","$relacaoDente",$pdf);
$pdf = str_replace("#inputDente","$inputDente",$pdf);

// SOLICITA A CLASS MPDF
require_once("vendor/mpdf/mpdf.php");

// INSTANCIA A CLASS MPDF
$mpdf = new mPDF();

// ESCREVE O PDF
$mpdf->WriteHTML($pdf);

// SAIDA DO PDF NO NAVEGADOR
$mpdf->Output("Relatório - ".$nome.".pdf","D");
// SE QUISER SALVAR É SÓ DIRECIONAR O DIRETORIO
//$arquivo_contrato = $mpdf->Output("../requerimentos/".$nome.".pdf");