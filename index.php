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

    <!-- Bootstrap 5.2.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-center m-4">PHP Hotel</h1>

    <!-- Table start -->
    <table class="table table-striped-columns text-center w-75 m-auto">

        <!-- Table head -->
        <thead class="table-info border border-info">
            <tr>
                <?php
                    $keys = array_keys($hotels[0]);
                    foreach ($keys as $key) {
                ?>
                        <th>
                            <?php
                                echo $key;
                            ?>
                        </th>
                <?php
                    }
                ?>
            </tr>
        </thead>

        <!-- Table body -->
        <tbody class="border border-info">
            <?php
                foreach ($hotels as $hotel) {
            ?>
                    <tr>
                        <td>
                            <?php
                                echo $hotel['name'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $hotel['description'];
                            ?>
                        </td>
                        <td>
                            <?php
                                if ($hotel['parking'] === true) {
                                    echo 'true';
                                } else {
                                    echo 'false';
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $hotel['vote'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $hotel['distance_to_center'];
                            ?>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>