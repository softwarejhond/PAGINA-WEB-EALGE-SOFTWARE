<div class="footer-bottom pt-5 pb-5">
    <div class="container">
      <div class="row text-center text-white">
        <div class="col-12">
          <div class="footer-bottom__copyright">
            &COPY; Copyright <span id="copyrightYear"></span> | Created by <a href="http://www.agenciaeaglesoftware.com" target="_blank">Agencia de Desarrollo Eagle Software</a><br>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    // Obtiene el año actual
    var currentYear = new Date().getFullYear();

    // Actualiza el elemento HTML con el año actual
    document.getElementById("copyrightYear").innerHTML = currentYear;
</script>