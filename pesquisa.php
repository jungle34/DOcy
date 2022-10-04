<?php   

class pricesearch {
    public $results;
    public $array;
    public $arrayProvisorio;
    public $x;
    public $y;
    public $z;
    public $coeficiente;
    public $bestPrice;
    
    function buscaMeli ($titulo){
        $search_title = urlencode($titulo);
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.mercadolibre.com/sites/MLB/search?q='.$search_title.'',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $json = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($json, true);
        $this->results = $response['results'];
    }

    function estomago($resultados){
        foreach($resultados as $key => $value){
            $price = $value['price'];
            $sold = $value['sold_quantity'];
            $sales = $value['seller']['seller_reputation']['transactions']['total'];
            $link = $value['permalink'];
            $this->x = (($sold / $sales) * 100);
            $this->arrayProvisorio .= $this->x."$".$price."*".$link."#";
            
        }
        $this->array = explode("#", $this->arrayProvisorio);        
    }
    function anus ($dados){
        $data = explode("$", max($dados));
        $this->coeficiente = $data[0];
        $precolink = explode("*", $data[1]);
        $this->bestPrice = $precolink[0];
        echo "Preço Recomendado:  R$ ".$this->bestPrice;
        echo "<br>";
        echo "Pontuação de Vendas: ".$this->coeficiente;
        echo "<br>";
        echo "<a href='".$precolink[1]."'>Ver Produto</a>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<a href='index.php'>Voltar</a>";
    }
}

$pesquisa = new pricesearch ();
$pesquisa->buscaMeli($_POST['input_search']);

$acido_estomacal = new pricesearch ();
$acido_estomacal->estomago($pesquisa->results);

$orgaoExcretor = new pricesearch();
$orgaoExcretor->anus($acido_estomacal->array);





