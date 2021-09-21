<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    
<?php
$testo =
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex architecto unde, ullam aperiam repellendus eligendi ea exercitationem reiciendis iste ratione excepturi atque neque, nulla illum. Nulla saepe sapiente consectetur enim? Lorem';
echo $testo . '<br />';
echo strlen($testo) . '<br />';
?>


<?php
$parole_da_sostituire = ['consectetur', 'Lorem', ' reiciendis '];
$asterischi = '***';
$frase =
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex architecto unde, ullam aperiam repellendus eligendi ea exercitationem reiciendis iste ratione excepturi atque neque, nulla illum. Nulla saepe sapiente consectetur enim? Lorem';
$frase_corretta = str_ireplace($parole_da_sostituire, $asterischi, $frase);
echo '<br />' . $frase_corretta;
?>

</body>
</html>