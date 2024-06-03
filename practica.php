
<?php 
 $name = "luis";
 $isDev = true;
 $age = 18;
 $isOld = $age > 40;
 var_dump($name);
 echo gettype($isDev);
const IMAGEN = "https://www.php.net//images/logos/new-php-logo.svg";
// if que verifica la edad
 $outputAge = $isOld
    ? 'Eres viejo'
    : 'eres joven, felicidades';
    //Variable que verifica la edad con un match
    $outputMatch = match(true){
        $age < 2 => "Eres un bebé 👶",
        $age < 11 => "Eres un niño 👦",
        $age < 18 => "Eres un adolecente 👨",
        $age < 40 => "Eres un adulto 👨",
        $age >= 40 => "Eres adulto viejo 👨‍🦳",



    };
//arrays
$array = ["Hola","asd","primer array","php"];
$array[] = "Hola otra vez";
//array asosiativo

$persona =[
    "name" => "Miguel",
    "age" => 32,
    "isDev" => true,
    "array" => ["Hola","asd","primer array","php"]


    ];
?>

<img src="<?= IMAGEN ?>" alt="logo php" width="200"/>

<h1>
    <?= "Hola soy ". $name . " Tengo " . $age; ?>
</h1>
<h2><?= $outputAge; ?></h2>

<h2><?= $outputMatch; ?></h2>

<h3>
    <?= $array[3]; ?>
</h3>

<ul>
    <?php foreach ($array as $key => $posicion) : ?>
        <li> <?= $key . " " . $posicion; ?></li>
    <?php endforeach; ?>
    

</ul>





<style> 

    :root{
        color-scheme: light dark;

    }

    body{
        display: grid;
        place-content: center;

    }
</style>