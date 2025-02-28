<pre>
<?php 
    $inicio = date("m");
    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'02-20-2025\'&@dataFinalCotacao=\'02-27-2025\'&\$top=1&\$orderby=dataHoraCotacao&\$format=json&\$select=cotacaoCompra,dataHoraCotacao";
    $dados = json_decode(file_get_contents($url), true);
    $cotacao = $dados["value"][0]["cotacaoCombra"];
 
?>
</pre>