<?php
include __DIR__ . "/../Model/db.php";
// var_dump($hotels);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div id="hero" class="mb-5">
            <h1><a href="index.php">PHP Hotels</a></h1>
        </div>
        <div class="container">
            <div class="card p-2 mb-5">
                <h2>Filter your research</h2>
                <form role="search" method="GET" action="index.php">
                    <div class="d-flex g-3">
                        <div class="w-25 pe-3">
                            <select class="form-select" placeholder="Search" aria-label="Search" name="parking">
                                <option value="all">Parking available <i class="fa-solid fa-chevron-down"></i> </option>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <div class="w-25 pe-3">
                            <select class="form-select" placeholder="Search" aria-label="Search" name="vote">
                                <option value="all">Vote</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="w-25 pe-3">
                            <select class="form-select" placeholder="Search" aria-label="Search"
                                name="distance_to_center">
                                <option value="all">Distance to Center</option>
                                <option value="1">1 km or less</option>
                                <option value="2">2 km or less</option>
                                <option value="5">5 km or less</option>
                                <option value="10">10 km or less</option>
                                <option value="50">50 km or less</option>

                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Search</button>

                    </div>
                </form>
            </div>

        </div>
    </header>