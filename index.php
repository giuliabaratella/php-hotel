<?php
include __DIR__ . "/partials/header.php";
if (isset($_GET["parking"])) {
    $parking = $_GET["parking"];
    if ($parking !== "all") {
        $tempArray = [];
        foreach ($hotels as $hotel) {
            if ($hotel['parking'] === (bool) $parking) {
                $tempArray[] = $hotel;
            }
        }
        $hotels = $tempArray;
    }
}
if (isset($_GET["vote"]) && $_GET["vote"] !== "all") {
    $vote = intval($_GET["vote"]);
    $tempArray = [];
    foreach ($hotels as $hotel) {
        if ($hotel['vote'] >= $vote) {
            $tempArray[] = $hotel;
        }
    }
    $hotels = $tempArray;
}
?>

<main>
    <div class="container mb-5">
        <?php if (count($hotels) > 0) { ?>
            <h4>We found
                <?php echo count($hotels) ?> results for your research.
            </h4>
            <div class="card p-2">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Parking</th>
                            <th scope="col">Vote</th>
                            <th scope="col">Distance to center</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hotels as $hotel) { ?>
                            <tr>
                                <?php foreach ($hotel as $key => $value) { ?>
                                    <td>
                                        <?php
                                        if ($key === 'parking' && $value === true) {
                                            echo "yes";
                                        } elseif ($key === 'parking' && $value === false) {
                                            echo 'no';
                                        } else {
                                            echo $value;
                                        }
                                        ?>
                                    </td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php } else { ?>
            <div class="alert alert-danger">Currently there are no results with these features, please try searching again
                by modifying the filters.</div>
        <?php } ?>
    </div>


    <div class="container">

    </div>


</main>

<?php
include __DIR__ . "/partials/footer.php";
?>