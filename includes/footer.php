<!-- FOOTER (start) -->
<footer class="container footer__main">
    <div class="footer__divider"></div>
    <div class="row">
        <div class="col-md-3 footer__section">
            <h3>Links</h3>
            <ul>
                <li><a href="index.php">Forside</a></li>
                <li><a href="#">Bilannoncer</a></li>
                <li><a href="#">Om</a></li>
                <li><a href="#">Kontakt</a></li>
                <li><a href="#">Service Betingelser</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer__section">
            <h3>Info</h3>
            <ul>
                <li><a href="#">Alfa Romeo</a></li>
                <li><a href="#">Audi</a></li>
                <li><a href="#">BMW</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer__section">
            <h3>Info</h3>
            <ul>
                <li><a href="#">Alfa Romeo</a></li>
                <li><a href="#">Audi</a></li>
                <li><a href="#">BMW</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer__section">
            <h3>Sociale Medier</h3>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="http://www.facebook.com"><img src="assets/img/facebook.png" class="footer__facebook"> </a></li>
                <li><a href="#">Mere Facebook</a></li>
                <li><a href="#">..... Facebook?</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- FOOTER (end) -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!-- Tether script (required fror Bootstrap 4) -->
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<!-- Bootstrap script -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script>
    var optionValues =[];
$('#category option').each(function(){
   if($.inArray(this.value, optionValues) >-1){
      $(this).remove()
   }else{
      optionValues.push(this.value);
   }
});
</script>
<script type="text/javascript">
    var opt = {};
    $("#category > option").each(function () {
        if(opt[$(this).text()]) {
            $(this).remove();
        } else {
            opt[$(this).text()] = $(this).val();
        }
    });

    </script>
    <!-- Remove doubles from selections (admin/edit/product.php) -->
    <script>
          var usedNames = {};
          $("select[name='brand'] > option").each(function () {
            if(usedNames[this.text]) {
              $(this).remove();
            } else {
              usedNames[this.text] = this.value;
            }
          });
        </script>
<!-- BODY (end) -->
</body>