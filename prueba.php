<?php


$nacionales=[
            ["Iguazú", "iguazu"],
            ["Usuhaia", "Usuhaia"]
];
var_dump($nacionales);
echo "<br>";
echo $nacionales[0][1];
echo "<br>";
$imagenNacional = $nacionales[0][1];
echo $imagenNacional;
echo "<br>"
 ?>
<html>

<p>"'img/nacionales/<?php echo$imagenNacional ?>.jpg"</p>

<p>
<div>
  <img src="img/nacionales/<?php echo$imagenNacional ?>.jpg">
  <button type="submit" value="s">
</div>
</html>
