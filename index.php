<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

<?php
$favourite_food = 'Enchiladas Suizas';
switch ($favourite_food) {
  case 'Pizza':
    echo "Mi comida favorita es Pizza!";
    break;
  case 'Hamburguesa':
    echo "Mi comida favorita es Hamburguea!";
    break;
  case 'Chilaquiles':
    echo "Mi comida favorita es Chilaquiles!";
    break;
  case 'Enchiladas Suizas':
    echo "Mi comida favorita es Enchiladas Suizas!";
    break;
  case 'Huevo con chorizo':
    echo "Mi comida favorita es Huevo con chorizo!";
    break;
  default:
    echo "Me gustan todas las comidas!";
}
?>
  </body>
</html>