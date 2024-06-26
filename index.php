<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>PHP Hotel</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>
        <body>
            <header>
                <div class="container">
                    <h1 class=text-center> HOTEL IN ZONA </h1>

                </div>
            </header>
            <main>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Distanza dal centro</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    for($i = 0; $i < count($hotels); $i++) {
                        $hotel = $hotels[$i];

                        $name = $hotel['name'];
                        $description = $hotel['description'];
                        $hotel['parking'] == true ? $has_parking = "sì" : $has_parking = "no";
                        $vote = $hotel['vote'];
                        $distance_to_center = $hotel['distance_to_center'];
                    ?>
                        <tr>
                            <td><?php echo $name ?></td>
                            <td><?php echo $description ?></td>
                            <td><?php echo $has_parking ?></td>
                            <td><?php echo $vote ?></td>
                            <td><?php echo "$distance_to_center km" ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>

            </main>
            
        </body>
        </html>

