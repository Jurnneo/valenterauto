
  $(function() {
      var shrinkHeader = 55;
      $(window).scroll(function() {
          var scroll = getCurrentScroll();
          if (scroll >= shrinkHeader) {
              $('header, .registration, .bar, .top2, .logimg, .navigation, .navigation1234, .navigation12345, .navigation1234567,.buttP, .navigation1234k, .navigation12345korzina, .navigation12345Language, .navigation1234Language, .contentCatalog122, .nasnceniebutton12, .navbarButt2413, .navigation123korzinaNrOfProducts, .sliskSlider, .mobversioncatalogcontentCollection, .navigation1234SearchAllSite, .CatalogGrid1, .CatalogGridBackDiv, .LoadFilter1OpenFilter, .navigation123reSearch, .blockSearchForWrite, .divcatalogunderheader').addClass('shrink');
          } else {
              $('header, .registration, .bar, .top2, .logimg, .navigation, .navigation1234, .navigation12345, .navigation1234567, .buttP, .navigation1234k, .navigation12345korzina, .navigation12345Language, .navigation1234Language, .contentCatalog122, .nasnceniebutton12, .navbarButt2413, .navigation123korzinaNrOfProducts, .sliskSlider, .mobversioncatalogcontentCollection, .navigation1234SearchAllSite, .CatalogGrid1, .CatalogGridBackDiv, .LoadFilter1OpenFilter, .navigation123reSearch, .blockSearchForWrite, .divcatalogunderheader').removeClass('shrink');
          }
      });
      function getCurrentScroll() {
          return window.pageYOffset || document.documentElement.scrollTop;
      }
  });



  // window.onload = function () {

  //     let preloader = document.getElementById('preloader');

  //     preloader.style.display = 'none';

  // };



  $(document).ready(function() {

      $('.demo').slick({
          arrows: true,
          autoplay: true,
          speed: 1500,
          autoplaySpeed: 4500,
          dots: true,

      });


      $('.responsiveSale').slick({
          infinite: false,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 4,
          responsive: [{
                  breakpoint: 1024,
                  settings: {
                      slidesToShow: 3,
                      slidesToScroll: 3,
                      infinite: true,
                  }
              },
              {
                  breakpoint: 600,
                  settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                  }
              },
              {
                  breakpoint: 480,
                  settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                  }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
          ]
      });

  });


  var links = document.getElementsByClassName('link')
  for (var i = 0; i <= links.length; i++)
      addClass(i)


  function addClass(id) {
      setTimeout(function() {
          if (id > 0) links[id - 1].classList.remove('hover')
          if (links[id] !== undefined) {
              links[id].classList.add('hover')
          }
      }, id * 750)
  }


  var granimInstance = new Granim({
      element: '#canvas-basic',
      direction: 'left-right',
      isPausedWhenNotInView: true,
      states: {
          "default-state": {
              gradients: [
                  ['#ffffff', '#c5bbbb'],
                  ['#c5bbbb', '#ebdfdf'],
                  ['#ffffff', '#ffffff']
              ]
          }
      }
  });


  $(document).ready(function() {
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
              }, 800, function() {
                  // Add hash (#) to URL when done scrolling (default click behavior)
                  window.location.hash = hash;
              });
          } // End if
      });
  });


        function validate_password() { 
            var pass = document.getElementById('pass').value;
            var confirm_pass = document.getElementById('confirm_pass').value;
            if (pass != confirm_pass) {
                document.getElementById('wrong_pass_alert').style.color = '#c5635a';
                document.getElementById('wrong_pass_alert').innerHTML
                    = 'Parola nu coincide';
                document.getElementById('create').disabled = true;
                document.getElementById('create').style.opacity = (0.7);
            } else {
                document.getElementById('wrong_pass_alert').style.color = '#84c666';
                document.getElementById('wrong_pass_alert').innerHTML =
                    'OK';
                document.getElementById('create').disabled = false;
                document.getElementById('create').style.opacity = (1);
            }
        }