<?php
include __DIR__ . "/partials/header.php";
?>

<main>
    <div class="container">
        <table class="table">
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
                    <!-- <div>
                        <?php
                        echo "$hotel[name] $hotel[description] $hotel[parking] $hotel[vote] $hotel[distance_to_center]"
                            ?>
                    </div> -->
                <?php } ?>

            </tbody>
        </table>
    </div>


    <div class="container">

    </div>


</main>

<?php
include __DIR__ . "/partials/footer.php";
?>