<?php require 'partials/head.php'; ?>
<title>NECTA matokeo</title>
</head>

<style>
  .necta {
    line-height: 1.7;
    background-image: url('view-source:http://localhost/necta-v3/assets/media/necta.png');
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
            <div class="row align-items-center">
                <div class="row">
                    <h3 data-aos="fade-right" data-aos-delay="100" class="text-warning text-center">Something went wrong</h3>
                </div>
            </div>
        </div>
    </section>

<?php require 'partials/footer.php'; ?>

</body>
</html>