<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Drinks</title>
<link rel="stylesheet" href="style/style.css">

</head>
<body>

<center><h1>Drinks</h1></center>


<?php
/*bibliote de leitura api */
function my_file_get_contents($site_url){
$ch = curl_init();
$timeout = 10;	curl_setopt ($ch, CURLOPT_URL, $site_url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$file_contents = curl_exec($ch);
curl_close($ch);
return $file_contents;
}

$idDrink = $_GET[idDrink];

$arquivo = "https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=$idDrink";
$info = my_file_get_contents($arquivo);
$lendo = json_decode($info);
foreach($lendo->drinks as $campo){;
?>

<table border="0" align="center">
<tr><td width="200px" height="200px" bgcolor="#cccccc">
    
<table border="0">
<tr>
    <td width=""><p><img src="<?php print_r($campo->strDrinkThumb);?>" width="200" height="200"/></p></td>
</tr>
</table> 

</td><td bgcolor="#eeeeee">

<table border="0">
<tr><td width=""><div class="label"><b>Drink: <?php print_r($campo->strDrink);?> [<?php print_r($campo->idDrink);?>]</b></div></td></tr>
<tr><td width="">Drink Alternate: <?php print_r($campo->strDrinkAlternate);?></td></tr>
<tr><td width="">Drink ES: <?php print_r($campo->strDrinkES);?></td></tr>
<tr><td width="">Drink DE: <?php print_r($campo->strDrinkDE);?></td></tr>
<tr><td width="">Drink FR: <?php print_r($campo->strDrinkFR);?></td></tr>
<tr><td width="">Drink ZH-HANS: <?php print_r($campo->strDrinkZH-HANS);?></td></tr>
<tr><td width="">Drink ZH-HANT: <?php print_r($campo->strDrinkZH-HANT);?></td></tr>
<tr><td width="">Tags: <?php print_r($campo->strTags);?></td></tr>
<tr><td width="">Video: <?php print_r($campo->strVideo);?></td></tr>
<tr><td width="">Category: <?php print_r($campo->strCategory);?></td></tr>
<tr><td width="">IBA: <?php print_r($campo->strIBA);?></td></tr>
<tr><td width="">Alcoholic: <?php print_r($campo->strAlcoholic);?></td></tr>
<tr><td width="">Glass: <?php print_r($campo->strGlass);?></td></tr>
<tr><td width="">Instructions: <?php print_r($campo->strInstructions);?></td></tr>
<tr><td width="">Instructions ES: <?php print_r($campo->strInstructionsES);?></td></tr>
<tr><td width="">Instructions DE: <?php print_r($campo->strInstructionsDE);?></td></tr>
<tr><td width="">Instructions FR: <?php print_r($campo->strInstructionsFR);?></td></tr>
<tr><td width="">Instructions ZH-HANS: <?php print_r($campo->strInstructionsZH-HANS);?></td></tr>
<tr><td width="">Instructions ZH HANT: <?php print_r($campo->strInstructionsZH-HANT);?></td></tr>
<tr><td width="">Ingredients: <?php print_r($campo->strIngredient1);?><?php print_r($campo->strIngredient2);?><?php print_r($campo->strIngredient3);?><?php print_r($campo->strIngredient4);?><?php print_r($campo->strIngredient5);?><?php print_r($campo->strIngredient6);?><?php print_r($campo->strIngredient7);?><?php print_r($campo->strIngredient8);?><?php print_r($campo->strIngredient9);?><?php print_r($campo->strIngredient10);?><?php print_r($campo->strIngredient11);?><?php print_r($campo->strIngredient12);?><?php print_r($campo->strIngredient13);?><?php print_r($campo->strIngredient14);?><?php print_r($campo->strIngredient15);?></td></tr>
<tr><td width="">Measures: <?php print_r($campo->strMeasure1);?><?php print_r($campo->strMeasure2);?><?php print_r($campo->strMeasure3);?><?php print_r($campo->strMeasure4);?><?php print_r($campo->strMeasure5);?><?php print_r($campo->strMeasure6);?><?php print_r($campo->strMeasure7);?><?php print_r($campo->strMeasure8);?><?php print_r($campo->strMeasure9);?><?php print_r($campo->strMeasure10);?><?php print_r($campo->strMeasure11);?><?php print_r($campo->strMeasure12);?><?php print_r($campo->strMeasure13);?><?php print_r($campo->strMeasure14);?><?php print_r($campo->strMeasure15);?></td></tr>
<tr><td width="">Image Source: <?php print_r($campo->strImageSource);?></td></tr>
<tr><td width="">Image Attribution: <?php print_r($campo->strImageAttribution);?></td></tr>
<tr><td width="">Creative Commons Confirmed: <?php print_r($campo->strCreativeCommonsConfirmed);?></td></tr>
<tr><td width="">Date Modified: <?php print_r($campo->dateModified);?></td></tr>
<tr><td width=""><a href="#"><button type="button" class="button">Share</button></a>&nbsp;&nbsp;<a href="#"><button id="myBtn" type="button" class="button">Evaluate</button></a></td></tr>
</table> 

</td>
</tr>
</table> 

<!-- Modal -->
<div id="myModal" class="modal">

  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Your Evaluation</h2>
    </div>
    <div class="modal-body">
      
      <br><br><br><br><br>

<table border="0" align="center">
<tr>
<td><a href="script_rating.php?idDrink=<?php echo $idDrink;?>&star=1"><img src="images/star1.png" width="30px"/></a></td>
<td><a href="script_rating.php?idDrink=<?php echo $idDrink;?>&star=2"><img src="images/star1.png" width="30px"/></a></td>
<td><a href="script_rating.php?idDrink=<?php echo $idDrink;?>&star=3"><img src="images/star1.png" width="30px"/></a></td>
<td><a href="script_rating.php?idDrink=<?php echo $idDrink;?>&star=4"><img src="images/star1.png" width="30px"/></a></td>
<td><a href="script_rating.php?idDrink=<?php echo $idDrink;?>&star=5"><img src="images/star1.png" width="30px"/></a></td>
</tr>
</table> 
 
      
      <br><br><br><br><br>
    </div>
  </div>

</div>

<?php
}
?>


<script>
// script modal //
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>