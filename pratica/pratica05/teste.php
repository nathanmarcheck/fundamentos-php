<pre>
<?php 
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX
    /versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dat
    aInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'02-18-2025\'&@d
    ataFinalCotacao=\'02-25-2025\'&$top=1&$orderby
    =dataHoraCotacao%20desc&$format=
    json&$select=cotacaoCompra,dataHoraCotacao';
    $dados = json_decode(file_get_contents($url), true);
    var_dump($dados);
 
?>
</pre>