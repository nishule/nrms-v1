<?php require 'partials/head.php'; ?>
<title>NECTA matokeo</title>
</head>

<style>
  .necta {
    line-height: 1.7;
    background-image: url('http://localhost/necta-v3/assets/media/necta.png');
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    color: rgba(255, 255, 255, 1);

    background-blend-mode: overlay;
    color: rgba(255, 255, 255, 0.397);
    font-weight: 300;
    font-size: 1.1rem; 
  }

  .necta:before{
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    background: black;
    opacity: .6;
    border-bottom-right-radius: 0px;
  }
</style>

<body>

  <?php require 'partials/header.php'; ?>

  <section class="hero-fullscreen d-flex align-items-center necta">
    <div class="container" data-aos="zoom-out">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 mb-4">
          <h5 class="text-white">National Examinations Results - (NECTA)</h4>
          <em class="text-white">We made it easier</em>
        </div>

        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
          <form action="?page=school" method="post" class="form-glass p-5" accept-charset="UTF-8">
            <h3 class="text-white">FILL TO FIND</h3>
            <div class="form-group mt-5">
              <select class="form-control" id="resultLevel" name="resultLevel" required>
                <option hidden>-- Select Level --</option>
                <option value="std4">STD IV</option>
                <option value="std7">STD VII</option>
                <option value="f2">Form two</option>
                <option value="f4">Form four</option>
                <option value="f6">Form Six</option>
              </select>
            </div>

            <div class="form-group mt-5">
              <select class="form-control" id="resultYear" name="resultYear" required>
                <option hidden>-- Select Year --</option>
                  <?php $endYear = 2003; while($endYear <= date("Y")){ 
                    ?> 
                    <option value="<?php echo $endYear; ?>">
                    <?php echo $endYear; ?></option> 
                    <?php $endYear++; 
                  } ?>
              </select>
            </div>

            <div class="form-group mt-5">
              <input class="form-control" type="text" name="resultSchool" minlength="5" maxlength="10" id="resultSchool" placeholder="School number example S1234 or P12345" required />
            </div>
            <div class="form-group text-center mt-5">
              <button type="submit" class="btn btn-glass btn-pill" name="tafuta">Search <i class="icon icon-search"></i></button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

<?php require 'partials/footer.php'; ?>

</body>
</html>