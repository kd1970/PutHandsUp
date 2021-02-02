<!-- Call to Action -->
<section class="row" id="tmCallToAction">
            <div class="col-12 tm-page-cols-container tm-call-to-action-col">
                <div class="tm-page-col-right">
                    <div class="tm-call-to-action-box">
                        <i class="fas fa-3x fa-rss-square tm-call-to-action-icon"></i>
                        <div class="tm-call-to-action-text">
                            <h3 class="tm-call-to-action-title">
                                Levante as mãos e saiba mais
                            </h3>
                            <p class="tm-call-to-action-description">
                                Inscreva-se e seja o primeiro a receber informações de tudo que rola nas festas Brasil afora .
                            </p>
                            <form action="#" method="GET" class="tm-call-to-action-form">
                                <input type="email" name="email" placeholder="Email" class="tm-email-input" required />
                                <button type="submit" class="btn btn-primary">
                    Inscrever
                  </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- Page footer -->
      <footer class="row tm-page-footer text-center">
        <p class="col-12 tm-copyright-text mb-0">
          Copyright &copy; 2020 - Todos os Direitos Reservados. <span>  <a href="http://www.rexxdevs.com" target="_blank">   www.rexxdevs.com   </a></span>
        </p>
      </footer>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    
    <script>
      $(function() {
        // Tabs
        $(".tabgroup > div").hide();
        $(".tabgroup > div:first-of-type").show();
        $(".tabs a").click(function(e) {
          e.preventDefault();
          var $this = $(this),
            tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
            others = $this
              .closest("li")
              .siblings()
              .children("a"),
            target = $this.attr("href");
          others.removeClass("active");
          $this.addClass("active");
          $(tabgroup)
            .children("div")
            .hide();
          $(target).show();

          // Scroll to tab content (for mobile)
          if ($(window).width() < 992) {
            $("html, body").animate(
              {
                scrollTop: $("#first-tab-group").offset().top
              },
              200
            );
          }
        });
      });
       /* Isotope Gallery */

        // init isotope
        var $gallery = $(".tm-gallery").isotope({
          itemSelector: ".tm-gallery-item",
          layoutMode: "fitRows"
        });
        // layout Isotope after each image loads
        $gallery.imagesLoaded().progress(function() {
          $gallery.isotope("layout");
        });

        $(".filters-button-group").on("click", "a", function() {
          var filterValue = $(this).attr("data-filter");
          $gallery.isotope({ filter: filterValue });
          console.log("Filter value: " + filterValue);
        });

        /* Tabs */
        $(".tabgroup > div").hide();
        $(".tabgroup > div:first-of-type").show();
        $(".tabs a").click(function(e) {
          e.preventDefault();
          var $this = $(this),
            tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
            others = $this
              .closest("li")
              .siblings()
              .children("a"),
            target = $this.attr("href");
          others.removeClass("active");
          $this.addClass("active");

          // Scroll to tab content (for mobile)
          if ($(window).width() < 992) {
            $("html, body").animate(
              {
                scrollTop: $("#tmGallery").offset().top
              },
              200
            );
          }
        });
      });

      $(document).on("change", ":file", function() {
        var input = $(this),
          numFiles = input.get(0).files ? input.get(0).files.length : 1,
          label = input
            .val()
            .replace(/\\/g, "/")
            .replace(/.*\//, "");
        input.trigger("fileselect", [numFiles, label]);
      });

      $(document).ready(function() {
        $(":file").on("fileselect", function(event, numFiles, label) {
          $("#file_name_label").attr("placeholder", label);
        });
      });
    </script>
  </body>
</html>