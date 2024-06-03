
<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializamos la api con un curl, ch = curl handler
$ch = curl_init(API_URL);
//indicamos que queremos recibir el resultado de la peticion más no mostrarlo en la pagina en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*Ejecutar peticion */
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);

?>
<head>
    <title>La proxima pelicula de marvel</title>
    <meta charset="UTF-8"/>
    <meta name="description" content="la proxima pelicula de marvel"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>

</head>
<main>
    
    <section>
    
    <img src="<?= $data["poster_url"]; ?>" width="300px" alt="poster de marvel"
    style="border-radius: 16px;"
    />

    </section>
    <hgroup>
    <h1>La proxima pelicula de marvel</h1>
    <h2> <?= $data["title"] ?> </h2>
    <h3> <?= $data["days_until"] ?> dia(s) restantes </h3>
    <p><?= $data["release_date"] ?> </p>

    <p> La siguiente es: <?= $data["following_production"]["title"] ?> </p>
    </hgroup>


</main>

<style> 

    :root{
        color-scheme: light dark;

    }

    body{
        display: grid;
        place-content: center;

    }

    section{
        display: flex;
        justify-content: center;

    }

    hgroup{
        display:flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;

    }

    img{
        margin: 0 auto;

    }
</style>