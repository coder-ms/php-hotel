<!--

Esercizio di oggi: PHP Hotel
nome repo: php-hotel

Descrizione
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)


-->

<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/f/fd/StPancrasMidlandHotel.jpg',
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Sheraton_Oran_Hotel_algeria.JPG',
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/56/Venetian_Las_Vegas%2C_NV.jpg',
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5,
        'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2a/Burj_Al_Arab%2C_Dubai%2C_by_Joi_Ito_Dec2007.jpg',
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8b/New_York_-_Manhattan_-_Plaza_Hotel.jpg',
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="formx">

        </div>
    </header>
    <main>
        <div class="containerx">
            <div class="hotels">
                <?php
                foreach ($hotels as $hotelBuilding) {
                ?>
                <div class="hotelCard">
                    <div class="imgHotel">
                        <img class="w-100" src="<?php echo $hotelBuilding['image'] ?>" alt="random hotel icon">
                    </div>
                    <div class="hotelInformation">
                        <h3 class="hotelName">
                            <?php echo $hotelBuilding['name'] ?>
                        </h3>
                        <p class="valutationHotel">stars:
                            <?php echo $hotelBuilding['vote'] ?>
                        </p>
                        <p class="descriptionHotel">
                            <?php echo $hotelBuilding['description'] ?>
                        </p>
                        <p class="distancefromCentre">Distance from city center(Km):
                            <?php echo $hotelBuilding['distance_to_center'] ?>
                        </p>
                        <p class="parkingSpot">Parking spot:
                            <?php echo ($hotelBuilding['parking']) ? 'Si' : 'No' ?>
                        </p>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>
</body>

</html>