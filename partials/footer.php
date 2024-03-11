<footer id="footer" class="footer">

  <div class="footer-legal text-center">
    <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

      <div class="d-flex flex-column align-items-center align-items-lg-start">
        <div class="copyright">
          <?php echo '<strong>nishule '. date("Y"). '</strong>' ?> 
        </div>
        <div class="credits">All Rights Reserved</div>
      </div>

      <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </div>

</footer>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="http://localhost/necta-v3/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost/necta-v3/assets/vendor/aos/aos.js"></script>
<script src="http://localhost/necta-v3/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="http://localhost/necta-v3/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="http://localhost/necta-v3/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="http://localhost/necta-v3/assets/js/main.js"></script>

<script>
  var as_opt = {};
  as_opt.providers = {
    "whatsapp":"WhatsApp"
  };
  as_opt.template = {
    corners:"50%",
    interface:"floating",
    topoffset:"80%",
    alignment: {
      desktop: "right",
      mobile: "bottom"
    }
  };
  new ass_SocialShare(as_opt);
</script>