<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Drinks</title>
<link rel="stylesheet" href="../../style/style.css">

</head>
<body>

<center><h1>Drinks</h1></center>

<div style="align-items: center;display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
<?php
// bibliote de leitura api //
function my_file_get_contents($site_url){
$ch = curl_init();
$timeout = 10;	curl_setopt ($ch, CURLOPT_URL, $site_url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$file_contents = curl_exec($ch);
curl_close($ch);
return $file_contents;
}

$filter = $_GET['filter'];

// primeira leitura //
$arquivo = "https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=$filter";
$info = my_file_get_contents($arquivo);
$lendo = json_decode($info);
foreach($lendo->drinks as $campo){;
?>

    <div  class="zoom" style="float: left; width: 200px; height: 300px; background: #dddddd; padding:4px;border-style: solid;border-color: #ffffff;"><img src="<?php print_r($campo->strDrinkThumb);?>" width="200px" height="200px"/>
    <div class="label"><?php print_r($campo->strDrink);?></div>

<?php
$idDrink = $campo->idDrink;

// segunda leitura //
$arquivo = "https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=$idDrink";
$info = my_file_get_contents($arquivo);
$lendo = json_decode($info);
foreach($lendo->drinks as $campo){;
$desc = $campo->strInstructions;

echo substr($desc, 0, 55)."...";
}
?>

<br>
<a href="../../details.php?idDrink=<?php print_r($campo->idDrink);?>"><button type="button" class="button">+ Details</button></a>
    </div>


<?php
}
?>
</div>



