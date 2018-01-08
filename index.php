<!-- HEADER & BODY (start) -->
<?php require 'includes/header.php'; ?>

<main class="container">
    <!-- HERO IMAGE (start) -->
    <picture>
        <source srcset="#" media="min-width: 1290px"> <!-- Desktop Screens -->
        <source srcset="#" media="min-width: 960px"> <!-- Tablet Screens -->
        <source srcset="#" media="min-width: 0px"> <!-- Mobile Screens -->
        <img src="#" alt="">
    </picture>
    <!-- HERO IMAGE (end) -->

    <div class="row">
        <!-- POPULAR BRANDS (start) -->
        <section class="col-md-4">
            <h3>Populære bilmærker</h3>
            <ul>
                <li><a href="#">Audi</a></li>
                <li><a href="#">BMW</a></li>
                <li><a href="#">Ford</a></li>
                <li><a href="#">Mazda</a></li>
                <li><a href="#">Mercedes</a></li>
                <li><a href="#">Peugeot</a></li>
                <li><a href="#">Renault</a></li>
                <li><a href="#">Seat</a></li>
                <li><a href="#">Toyota</a></li>
                <li><a href="#">VW</a></li>
            </ul>
        </section>
        <!-- POPULAR BRANDS (end) -->

        <!-- NEWEST ADDS (start) -->
        <section class="col-md-8">
            <h3>Nyeste bilannoncer</h3>
            <?php
            /* - Newest products selection & while loop - */
            $query = "SELECT * FROM products ORDER BY creation_date DESC LIMIT 8";
            $result = $con->query($query);
            while ($row = $result->fetch_assoc()) : ?>
                <?php
                /* - Image Query - */
                $imgQuery = "SELECT image_path FROM product_image WHERE product_id = " . $row['id'] . " LIMIT 1";
                $imgResult = $con->query($imgQuery);
                $imgRow = $imgResult->fetch_assoc();
                ?>

                <div class="card products col-sm-3">
                    <img class="card-img-top" src="assets/img/products/<?= $imgRow['image_path'] ?>"
                         alt="produkt-billede">
                    <div class="card-block">
                        <h4 class="card-title products__name"><?= $row['model'] ?></h4>
                        <p class="card-text products__description"><?= $row['mileage'] ?></p>
                        <a href="#" class="products__price"><?= $row['price'] ?> kr</a>
                    </div>
                </div>

            <?php endwhile; ?>
        </section>
    </div>
    <!-- NEWEST ADDS (end) -->

    <!-- SEARCH INSPIRATION (start) -->
    <section>
        <h3>Inspiration til din Søgning</h3>
        <!-- First Row -->
        <a href="#" class="col-md-6">Søg på 5 sæder</a>
        <a href="#" class="col-md-6">Søg på 7 sæder</a>
        <!-- Second Row -->
        <a href="#" class="col-md-3">Søg på 3 dørs</a>
        <a href="#" class="col-md-3">Søg på 5 dørs</a>
        <a href="#" class="col-md-3">Søg på elbil</a>
        <a href="#" class="col-md-3">Søg på bybil</a>
    </section>
    <!-- SEARCH INSPIRATION (end) -->

</main>


<!-- FOOTER & BODY (end) -->
<?php require 'includes/footer.php'; ?>
