<?php
include __DIR__ . "/partials/header.php";
?>

<main>
    <?php foreach ($hotels as $hotel) { ?>
        <div>
            <?php
            echo "$hotel[name] $hotel[description] $hotel[parking] $hotel[vote] $hotel[distance_to_center]"
                ?>
        </div>
    <?php } ?>


</main>

<?php
include __DIR__ . "/partials/footer.php";
?>