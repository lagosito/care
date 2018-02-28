<footer class="footer_section">
    <div id="bg-8" style="background: url(<?php the_field('footer_background_image',"options"); ?>);">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="footer_text">
            <h3><?php the_field('footer_footer_text1',"options"); ?></h3>
            <h4><?php the_field('footer_footer_text2',"options"); ?></h4>
          </div>
          <div class="footer_img">
            <div class="footer_imgpart"> 
                <img src="<?php the_field('footer_content_image',"options"); ?>"  class="img-responsive border_right"/> 
                <img src="<?php the_field('footer_content_image2',"options"); ?>"  class="img-responsive"/> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- jQuery --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.aniview.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery/jquery.min.js"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script> 

<!-- Plugin JavaScript --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 

<!-- Contact Form JavaScript --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jqBootstrapValidation.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/contact_me.js"></script> 

<!-- Theme JavaScript --> 
<!--<script src="js/freelancer.min.js"></script>--> 
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.js"></script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.main.js"></script> 

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script> 
<script>
            $(document).ready(function() {
              $('.owl-one').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('.owl-two').owlCarousel({
        loop:true,
        margin:40,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });
            })
        
// Testimonials Carousel Slider
	if ($('.testimonial-slider-content').length && $('.testimonial-slider-pager').length) {

		var $sync1 = $(".testimonial-slider-content"),
			$sync2 = $(".testimonial-slider-pager"),
			flag = false,
			duration = 500;

			$sync1
				.owlCarousel({
					loop:false,
					items: 1,
					margin: 0,
					nav: true,
					navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
					dots: false,
					autoplay: true,
					autoplayTimeout: 5000
				})
				.on('changed.owl.carousel', function (e) {
					if (!flag) {
						flag = false;
						$sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
						flag = false;
					}
				});
			$sync2
				.owlCarousel({
					loop:false,
					margin: 25,
					items: 1,
					nav: false,
					dots: false,
					navText:false,
					center: false,
					autoplay: true,
					autoplayTimeout: 5000,
					responsive: {
						0:{
				            items:1,
				            autoWidth: false
				        },
				        400:{
				            items:1,
				            autoWidth: false
				        },
				        500:{
				            items:1,
				            center: false,
				            autoWidth: false
				        },
				        600:{
				            items:1,
				            autoWidth: false
				        },
				        1200:{
				            items:1,
				            autoWidth: false
				        }
				    },
				})
				
		.on('click', '.owl-item', function () {
			$sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
		})
		.on('changed.owl.carousel', function (e) {
			if (!flag) {
				flag = true;		
				$sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
				flag = false;
			}
		});
	}
  
		  jQuery('.screen-slider').slick({
			dots: false,
			speed: 800,
			arrows: true,
			infinite: true,
			autoplay: false,
			slidesToShow: 5,
			edgeFriction: 0.15,
			respondTo:  'window',//'window', 'slider' or 'min' 
			centerMode: true,
			autoplay:true,
			autoplaySpeed: 2000,
			adaptiveHeight: false,
			variableWidth: true,
			responsive: [
				{
					breakpoint: 1630,
					settings: {
						slidesToShow: 3,
						centerPadding: '100px',
					}
				},
				
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 3,
						centerPadding: '20px',
					}
				},
				{
				breakpoint: 767,
					settings: {
						slidesToShow: 3
					}
				}
			]
		});
		
	
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

var a = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    a = 1;
  }

});

//Get App Click Scrolling
    $(document).ready(function (){
            $(".top-nav-right .rounded-btn").click(function (){
                $('html, body').animate({
                    scrollTop: $("#download-app").offset().top -20
                }, 1500);
            });
    });
</script
><?php wp_footer(); ?>
</body>
</html>