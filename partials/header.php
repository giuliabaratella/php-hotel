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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">PHP Hotel</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
            <div class="card p-2 mb-5">
                <h2>Filter your research</h2>
                <form class="d-flex" role="search" method="GET" action="index.php">
                    <select class="form-control me-2" placeholder="Search" aria-label="Search" name="parking">
                        <option value="all">Parking available <i class="fa-solid fa-chevron-down"></i> </option>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>

        </div>
    </header>