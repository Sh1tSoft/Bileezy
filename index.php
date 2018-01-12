<?php
$pageTitle = "Forside";
require 'includes/header.php'; ?>
<!-- HEADER & BODY (start) -->
<main class="container">
    <!-- HERO IMAGE (start) -->
    <picture class="hero__img--main">
        <source srcset="<?= $root ?>/assets/img/hero.jpg" media="(min-width: 1290px)"> <!-- Desktop Screens -->
        <source srcset="<?= $root ?>/assets/img/hero.jpg" media="(min-width: 960px)"> <!-- Tablet Screens -->
        <source srcset="<?= $root ?>/assets/img/hero.jpg" media="(min-width: 0px)"> <!-- Mobile Screens -->
        <img src="<?= $root ?>/assets/img/hero.jpg" alt="SMUK-bil" role="presentation">
    </picture>
    <!-- HERO IMAGE (end) -->

    <div class="row">
        <!-- POPULAR BRANDS (start) -->
        <section class="col-md-4 popular__main">
            <h3 class="popular__main--headline">Populære bilmærker</h3>
            <ul class="popular__main--list">
                <div class="row">
                    <button type="button" class="btn btn-outline-secondary btn-lg"><li class="col-md-6"><a href="#">Audi</a></li></button>
                    <button type="button" class="btn btn-outline-secondary btn-lg"><li class="col-md-6"><a href="#">BMW</a></li></button>
                </div>
                <div class="row">
                   <button type="button" class="btn btn-outline-secondary btn-lg"><li class="col-md-6"><a href="#">Ford</a></li></button>
                   <button type="button" class="btn btn-outline-secondary btn-lg"><li class="col-md-6"><a href="#">Mazda</a></li></button>
                </div>
                <div class="row">
                   <button type="button" class="btn btn-outline-secondary btn-lg"> <li class="col-md-6"><a href="#">Mercedes</a></li></button>
                   <button type="button" class="btn btn-outline-secondary btn-lg"> <li class="col-md-6"><a href="#">Peugeot</a></li></button>
                </div>
                <div class="row">
                   <button type="button" class="btn btn-outline-secondary btn-lg"> <li class="col-md-6"><a href="#">Renault</a></li></button>
                   <button type="button" class="btn btn-outline-secondary btn-lg"> <li class="col-md-6"><a href="#">Seat</a></li></button>
                </div>
                <div class="row">
                    <button type="button" class="btn btn-outline-secondary btn-lg"><li class="col-md-6"><a href="#">Toyota</a></li></button>
                    <button type="button" class="btn btn-outline-secondary btn-lg"><li class="col-md-6"><a href="#">VW</a></li></button>
                </div>
            </ul>
        </section>
        <!-- POPULAR BRANDS (end) -->

        <!-- NEWEST ADDS (start) -->
        <section class="col-md-8 products__newest--main">
            <h3 class="products__newest--headline">Nyeste bilannoncer</h3>
            <div class="row">
                <?php
                /* - Newest products selection & while loop - */
                $query = "SELECT * FROM products ORDER BY creation_date DESC LIMIT 8";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) : ?>
                    <?php
                    /* - Image Query - */
                    /*$imgQuery = "SELECT image_path FROM product_image WHERE product_id = " . $row['id'] . " LIMIT 1";
                    $imgResult = $conn->query($imgQuery);
                    $imgRow = $imgResult->fetch_assoc();
                    */?>

                    <div class="card products__newest--card col-md-3 col-sm-6">
                        <!-- PLACEHOLDER -->
                       <img src="assets/img/3.jpg">
                        <!-- <img class="card-img-top" src="assets/img/products/<?= $imgRow['image_path'] ?>"
                             alt="produkt-billede"> -->
                        <div class="card-block">
                            <h4 class="card-title products__name"><?= $row['model'] ?></h4>
                            <p class="card-text products__description">Kørt <?= $row['mileage'] ?> km</p>
                            <a href="#" class="products__price"><?= $row['price'] ?> kr</a>
                            <p class="card-text products__description"><?= $row['description_text'] ?></p>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        </section>
    </div>
    <!-- NEWEST ADDS (end) -->

    <!-- SEARCH INSPIRATION (start) -->
    <section class="inspiration__main">
        <h3 class="inspiration__main--headline">Inspiration til din søgning</h3>
        <!-- First Row -->
        <div class="row">
            <a href="#" class="col-md-6 inspiration__main--category">
                <figure>
                    <img src="assets/img/5_seats.jpg">
                    <figcaption>Søg på 5 sæder</figcaption>
                </figure>
            </a>
            <a href="#" class="col-md-6 inspiration__main--category">
                <figure>
                    <img src="assets/img/7_seats.jpg">
                    <figcaption>Søg på 7 sæder</figcaption>
                </figure>
            </a>
        </div>
        <!-- Second Row -->
        <div class="row">
            <a href="#" class="col-md-3 inspiration__main--category">
                <figure>
                    <img src="assets/img/3_doors.jpg">
                    <figcaption>Søg på 3 dørs</figcaption>
                </figure>
            </a>
            <a href="#" class="col-md-3 inspiration__main--category">
                <figure>
                    <img src="assets/img/5_doors.jpg">
                    <figcaption>Søg på 5 dørs</figcaption>
                </figure>
            </a>
            <a href="#" class="col-md-3 inspiration__main--category">
                <figure>
                    <img src="assets/img/elcar.jpg">
                    <figcaption>Søg på elbil</figcaption>
                </figure>
            </a>
            <a href="#" class="col-md-3 inspiration__main--category">
                <figure>
                    <img src="assets/img/citycar.jpg">
                    <figcaption>Søg på bybil</figcaption>
                </figure>
            </a>
        </div>
    </section>
    <!-- SEARCH INSPIRATION (end) -->

</main>


<!-- FOOTER & BODY (end) -->
<?php require 'includes/footer.php'; ?>
