<?php
 
require_once __DIR__ . 'vendor/autoload.php';
//require_once("vendor/autoload.php");
 
if(isset($_POST['matCns']) && isset($_POST['nomeCompleto']) && isset($_POST['emailCliente']) && isset($_POST['telefoneCliente'])
&& isset($_POST['enderecoCliente']) && isset($_POST['numberEnd']) && isset($_POST['cepEnd']) && isset($_POST['cityEnd']) 
&& isset($_POST['inputState']) && isset($_POST['inputSigla']) && isset($_POST['temAlergia'])
&& isset($_POST['gridRAdios1']) && isset($_POST['gridRAdios2'])
&& isset($_POST['inputFumante']) && isset($_POST['radiosFumante1']) && isset($_POST['radiosFumante2']) && isset($_POST['gestante'])
&& isset($_POST['radiosGestante1']) && isset($_POST['radiosGestante2']) && isset($_POST['inputStateDoenca']) && isset($_POST['inputDoenca'])
&& isset($_POST['relacaoDente']) && isset($_POST['inputDente']) )
{
    $matCns = $_POST['matCns'];
 
    $nomeCompleto = $_POST['nomeCompleto'];
 
    $emailCliente = $_POST['emailCliente'];
 
    $telefoneCliente = $_POST['telefoneCliente'];

    $enderecoCliente = $_POST['enderecoCliente'];

    $numberEnd = $_POST['numberEnd'];
 
    $cepEnd  = $_POST['cepEnd'];

    $cityEnd  = $_POST['cityEnd'];
     
    $inputState  = $_POST['inputState'];

    $inputSigla  = $_POST['inputSigla'];

    $inputSigla  = $_POST['inputSigla'];

    $temAlergia  = $_POST['temAlergia'];

    $gridRadios1  = $_POST['gridRadios1'];

    $gridRadios2  = $_POST['gridRadios2'];

    $inputFumante  = $_POST['inputFumante'];

    $radiosFumante1  = $_POST['$radiosFumante1'];

    $radiosFumante2  = $_POST['$radiosFumante2'];

    $gestante  = $_POST['gestante'];
     
    $radiosGestante1  = $_POST['radiosGestante1'];

    $radiosGestante2  = $_POST['radiosGestante2'];
    
    $inputStateDoenca  = $_POST['inputStateDoenca'];

    $inputDoenca  = $_POST['inputStateDoenca'];

    $relacaoDente  = $_POST['relacaoDente'];

     $inputDente  = $_POST['inputDente'];


    // uma nova instancia da classe Mpdf
 
    $mpdf = new Mpdf();
 
    $data = "";
    
 
    $data .= "<h1>Ficha de Cadastramento de Paciente Odonto Care</h1>";
 
    $data .= "<strong>Matrícula da CNS: </strong> " . $matCns  . "<br>";
 
    $data .= "<strong>Nome e Sobrenome Completos: </strong> " . $nomeCompleto . "<br>";
 
    $data .= "<strong>E-mail: </strong> " . $emailCliente . "<br>";
 
    $data .= "<strong>Telefone: </strong> " . $telefoneCliente . "<br>";

    $data .= "<strong>Endereço: </strong> " . $enderecoCliente . "<br>";

    $data .= "<strong>Número: </strong> " . $numberEnd  . "<br>";

    $data .= "<strong>Código Postal(CEP): </strong> " . $cepEnd  . "<br>";

    $data .= "<strong>Cidade: </strong> " . $cityEnd  . "<br>";

    $data .= "<strong>Estado: </strong> " . $inputState  . "<br>";

    $data .= "<strong>Sigla: </strong> " . $inputSigla  . "<br>";
   
    
    $data .= "<strong>Tem alergia a algum medicamento ou anestésico?: </strong> " . $temAlergia  . "<br>";

    $data .= "<strong>Sim</strong> " . $gridRadios1  . "<br>";

    $data .= "<strong>Não</strong> " . $gridRadios2  . "<br>";

    $data .= "<strong>É fumante?</strong> " . $inputFumante  . "<br>";

    $data .= "<strong>Sim</strong> " . $radiosFumante1  ."<br>";

    $data .= "<strong>Não</strong> " . $radiosFumante2  ."<br>";

    $data .= "<strong>Se mulher, está gestante?: </strong> " . $gestante ."<br>";

    $data .= "<strong>Sim</strong> " . $radiosGestante1 ."<br>";

    $data .= "<strong>Não</strong> " . $radiosGestante2 ."<br>";

    $data .= "<strong>Medicação atual: </strong> " . $inputStateDoenca ."<br>";

    $data .= "<strong>Selecione se tem ou teve alguma dessas doenças: </strong> " . $inputDoenca ."<br>";

    $data .= "<strong>Em relação aos dentes</strong> " . $relacaoDente ."<br>";

    $data .= "<strong>Opção</strong> " . $relacaoDente ."<br>";

    $data .= "<strong>Opção</strong> " . $inputDente ."<br>";



    $mpdf->WriteHtml($data);
 
    $mpdf->output("myfile.pdf","D");  
    
 
}
?>