<?php 



var_dump($_GET);

$censure_word = $_GET['censure'];


$sonnet = 'A womens face with natures owne hande painted,
Haste thou, the Master Mistris of my passion.
A womens gentle hart but not acquainted
With shifting change as is false womens fashion,
An eye more bright then theirs,lesse false in rowling:
Gilding the obiect where-vpon it gazeth,
A man in hew all Hews in his controwling,
Which steales mens eyes and womens soules amaseth,
And for a woman wert thou first created,
Till nature as she wrought thee fell a dotinge,
And by addition me of thee defeated,
By adding one thing to my purpose nothing.
But since she prickt thee out for womens pleasure,
Mine be thy loue and thy loues vse their treasure.';


$sonnet_length = strlen($sonnet);

// echo "sonnete vale : ";
// var_dump($sonnet);

$censured_sonnet = str_replace($censure_word, '***', $sonnet);

$censuredSonnet_length = strlen($censured_sonnet);

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-badwords</title>
</head>
<body>
  <h1>Sonnet 21: So Is It Not With Me As With That Muse by William Shakespeare</h1>
  <p><?php echo $sonnet ?></p>

  <div>La lunghezza di questo sonetto è: <?php echo $sonnet_length ?></div>

  <p><?php echo $censured_sonnet ?></p>
  <div>La lunghezza di questo sonetto censurato è: <?php echo $censuredSonnet_length ?></div>
  
</body>
</html>