<?php require 'includes/header.php'; ?>
<!-- HEADER & BODY (start) -->

<?php
 $pageTitle = "Forside";
 $product_select = $_GET['product'];
 $query2 = "SELECT * FROM `products` WHERE ID= $product_select";
 $result2 = $conn->query($query2);

 ?>


<section class="container">
  <div class="product-item">
    <?php while($row2 = $result2->fetch_assoc()) : ?>
      <?php $model = $row2['model'];
      $query = "SELECT * FROM `car_model_info` WHERE ID='".$model."' ";
      $result = $conn->query($query); ?>
      <img src="<?=$row2['image_path']?>" alt="">
        <h6 class="car-info">
              <?php while($row = $result->fetch_assoc()) : ?>
          <span class="car-name"><?=$row2['brand']?> <?=$row['model']?></span>
          <span class="car-info-splitter">|</span>
          <span class="car-price"><?=$row2['price']?></span>
        </h6>

    <div class="keypoint-container">

      <div class="car-keypoint">
        <p>Årgang:</p><span><?=$row['year_start']?></span>
      </div>

      <div class="car-keypoint">
        <p>Km:</p><span><?=$row2['mileage']?></span>
      </div>

      <div class="car-keypoint">
        <p>Brændstof:</p><span><?=$row['fuel_type']?></span>
      </div>

      <div class="car-keypoint">
        <p>Km/l:</p><span><?=$row['consumption']?></span>
      </div>

    </div>


    <div class="row">

      <div class="col-lg-7">

      <div class="description">
        <h6>Beskrivelse</h6>
        <p class="desc-text toggle-desc"><?=$row2['description_text']?></p>
      </div>
      <h6 class="show-desc">se mere</h6>

  </div>

  <div class="col-lg-1">
  </div>

  <div class="col-lg-4 buy-info">
    <button type="button" name="button">Skriv til Sælger</button>

    <h6 class="sell-name">Thobias Sletten</h6>

    <div class="sell-info">
      <h6>Bleggravsvej 50</h6>
      <h6>9490 Pandrup</h6>
      <h6>53347586</h6>
    </div>

  </div>

  <div class="specs col-lg-12">
    <table class="table-fill">

      <thead>
        <tr>
          <th class="text-left">Specifikationer</th>
          <th class="text-left">Viste Bil</th>
        </tr>
      </thead>

      <tbody class="table-hover">
        <tr>
          <td class="text-left">Mærke</td>
          <td class="text-left"><?=$row['brand']?></td>
        </tr>

        <tr>
          <td class="text-left">Model Navn</td>
          <td class="text-left"><?=$row['model']?></td>
        </tr>

        <tr>
          <td class="text-left">Karosseri Type</td>
          <td class="text-left"><?=$row['car_body_type']?></td>
        </tr>

        <tr>
          <td class="text-left">Udstyrs Model</td>
          <td class="text-left"><?=$row['equipment_model']?></td>
        </tr>

        <tr>
          <td class="text-left">Motor Størrelse i Liter</td>
          <td class="text-left"><?=$row['engine_size']?></td>
        </tr>

        <tr>
          <td class="text-left">Motor type</td>
          <td class="text-left"><?=$row['engine_type']?></td>
        </tr>

        <tr>
          <td class="text-left">Hestekræfter</td>
          <td class="text-left"><?=$row['horsepower']?></td>
        </tr>

        <tr>
          <td class="text-left">Moment</td>
          <td class="text-left"><?=$row['torque']?></td>
        </tr>

        <tr>
          <td class="text-left">Forbrug</td>
          <td class="text-left"><?=$row['consumption']?></td>
        </tr>

        <tr>
          <td class="text-left">Top hastighed</td>
          <td class="text-left"><?=$row['top_speed']?></td>
        </tr>

        <tr>
          <td class="text-left">Acceleration</td>
          <td class="text-left"><?=$row['acceleration']?></td>
        </tr>

        <tr>
          <td class="text-left">Gearkasse</td>
          <td class="text-left"><?=$row['transmission_type']?></td>
        </tr>

        <tr>
          <td class="text-left">Gear</td>
          <td class="text-left"><?=$row['gears']?></td>
        </tr>

        <tr>
          <td class="text-left">Ny Pris</td>
          <td class="text-left"><?=$row['new_price']?></td>
        </tr>

        <tr>
          <td class="text-left">Vægt</td>
          <td class="text-left"><?=$row['car_weight']?></td>
        </tr>

        <tr>
          <td class="text-left">Antal døre</td>
          <td class="text-left"><?=$row['doors']?></td>
        </tr>

        <tr>
          <td class="text-left">Antal airbags</td>
          <td class="text-left"><?=$row['airbags']?></td>
        </tr>

        <tr>
          <td class="text-left">Cylindere</td>
          <td class="text-left"><?=$row['cylinders']?></td>
        </tr>

        <tr>
          <td class="text-left">Trækhjul</td>
          <td class="text-left"><?=$row['drivetrain']?></td>
        </tr>

        <tr>
          <td class="text-left">Lastevne</td>
          <td class="text-left"><?=$row['load_capacity']?></td>
        </tr>

        <tr>
          <td class="text-left">Antal sæder</td>
          <td class="text-left"><?=$row['seats']?></td>
        </tr>

        <tr>
          <td class="text-left">Brændstof</td>
          <td class="text-left"><?=$row['fuel_type']?></td>
        </tr>
      <?php endwhile; ?>
    <?php endwhile; ?>
      </tbody>
    </table>
  </div>

</div>
</section>

<!-- FOOTER & BODY (end) -->
<?php require 'includes/footer.php'; ?>
