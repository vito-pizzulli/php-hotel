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
        ]

        ];

        if (isset($_GET['hasParkingFilter'])) {
            $hasParkingFilter = $_GET['hasParkingFilter'];
        } else {
            $hasParkingFilter = false;
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link rel="stylesheet" href="./css/style.css">

    <!-- Google Fonts VT323 Regular 400 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.2.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="my_h1">PHP Hotel</h1>

    <form action="./index.php" method="get">
        <input type="checkbox" id="hasParkingFilter" name="hasParkingFilter" value="true">
        <label for="hasParkingFilter" class="text-light"> Show only hotels that have parking</label>
        <button type="submit">Filter</button>
    </form>

    <!-- Table start -->
    <table class="table text-center w-75 m-auto text-light">

        <!-- Table head -->
        <thead class="border border-info bg-info bg-gradient text-dark">
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
        <tbody class="border border-info bg-dark bg-opacity-50">
            <?php
                foreach ($hotels as $hotel) {
                    if (!$hasParkingFilter || $hotel['parking']) {
            ?>
                        <tr>
                            <td><?php echo $hotel['name']; ?></td>
                            <td><?php echo $hotel['description']; ?></td>
                            <td>
                                <?php
                                    if ($hotel['parking']) {
                                        echo 'true';
                                    } else {
                                        echo 'false';
                                    }
                                ?>
                            </td>
                            <td><?php echo $hotel['vote']; ?></td>
                            <td><?php echo $hotel['distance_to_center']; ?></td>
                        </tr>
            <?php
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>