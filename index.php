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
        </head>
        <body>

        <?php
        for($i = 0; $i < count($hotels); $i++) {
            $hotel = $hotels[$i];

            $name = $hotel['name'];
            $description = $hotel['description'];
            $hotel['parking'] == true ? $has_parking = "yes" : $has_parking = "no";
            $vote = $hotel['vote'];
            $distance_to_center = $hotel['distance_to_center'];
        ?>
            
            <p>
                <?php echo "Hotel name: $name <br>" ?>
                <?php echo "Hotel description: $description <br>"?>
                <?php echo "The hotel has parking: $has_parking <br>"?>
                <?php echo "The hotel's rating is $vote <br>"?>
                <?php echo "The hotel's distance to the center is $distance_to_center km <br>"?>
            </p>

        <?php
        }
        ?>
            
        </body>
        </html>

