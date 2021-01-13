<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Drinks</title>
<link rel="stylesheet" href="style/style.css">

</head>
<body>

<center><h1>Drinks</h1></center>


<center>
    <!---- div barra de progresso ---->
<div id="loading" style="display: block">
    <img src="images/progress.gif" style="width:100px;height:100px;" />
</div>
</center>

<?php

$idDrink = $_GET['idDrink'];
$star = $_GET['star'];

echo "<div id=\"conteudo\" style=\"display: none\"><center>Thank you for your rating</center><br>";

if($star=='1'){echo '<table border="0" align="center"><tr><td><img src="images/star2.png" width="30px"/></td><td><img src="images/star1.png" width="30px"/></td><td><img src="images/star1.png" width="30px"/></td><td><img src="images/star1.png" width="30px"/></td><td><img src="images/star1.png" width="30px"/></td></tr></table>';};
if($star=='2'){echo '<table border="0" align="center"><tr><td><img src="images/star2.png" width="30px"/></td><td><img src="images/star2.png" width="30px"/></td><td><img src="images/star1.png" width="30px"/></td><td><img src="images/star1.png" width="30px"/></td><td><img src="images/star1.png" width="30px"/></td></tr></table>';};
if($star=='3'){echo '<table border="0" align="center"><tr><td><img src="images/star2.png" width="30px"/></td><td><img src="images/star2.png" width="30px"/></td><td><img src="images/star2.png" width="30px"/></td><td><img src="images/star1.png" width="30px"/></td><td><img src="images/star1.png" width="30px"/></td></tr></table>';};
if($star=='4'){echo '<table border="0" align="center"><tr><td><img src="images/star2.png" width="30px"/></td><td><img src="images/star2.png" width="30px"/></td><td><img src="images/star2.png" width="30px"/></td><td><img src="images/star2.png" width="30px"/></td><td><img src="images/star1.png" width="30px"/></td></tr></table>';};
if($star=='5'){echo '<table border="0" align="center"><tr><td><img src="images/star2.png" width="30px"/></td><td><img src="images/star2.png" width="30px"/></td><td><img src="images/star2.png" width="30px"/></td><td><img src="images/star2.png" width="30px"/></td><td><img src="images/star2.png" width="30px"/></td></tr></table>';};

echo "<br><center><a href='http://mabilete.com.br/projeto/details.php?idDrink=$idDrink'><button type=\"button\" class=\"button\">Back to the Drink</button></a></center></div>"
?>

 <script>
 //script carrega conteúdo//
 var i = setInterval(function () {
    
    clearInterval(i);
  
    document.getElementById("loading").style.display = "none";
    document.getElementById("conteudo").style.display = "inline";

}, 4000);
 </script>