<link rel="stylesheet" href="css/header/header.css">

<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color bg-dark smart-scroll">
	<div class="container">
  <a class="navbar-brand" href="#">TecnoGOO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fab fa-inicio-f"></i> Inicio
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#qsomos">
          <i class="fab fa-qsomos"></i> Quienes somos</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fab fa-clientes"></i> Clientes</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fab fa-contacto"></i> Contacto</a>
      </li>
    </ul>
  </div>
</div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  // add padding top to show content behind navbar
  $('body').css('padding-top', $('.navbar').outerHeight() + 'px')
  
  // detect scroll top or down
  if ($('.smart-scroll').length > 0) { // check if element exists
      var last_scroll_top = 0;
      $(window).on('scroll', function() {
          scroll_top = $(this).scrollTop();
          if(scroll_top < last_scroll_top) {
              $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
          }
          else {
              $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
          }
          last_scroll_top = scroll_top;
      });
  }
  </script>
  <script>
  $(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
  
  
  </script>
