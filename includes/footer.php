     <style type="text/css">
       
section#contact {
    background-color: #f4f4f4;
    
}
footer#footer{
      background-color: #000;
      opacity: 0.8;
      color: #fff;
}
.copyright{
    height: 30px;
    padding: 8px;
    font-size: 10px;
}
span.links {
    color: #000;
}
p.desc {
    font-size: 12px;
}

span.icons {
    font-size: 12px;
}
     </style>

      <section id="contact">
         <div class="container">
            <div class="row wow fadeInUp animated">
               <div class="col-xs-12 col-sm-12 col-lg-3 col-md-3">
                  <div class="contact-body">
                    <h5 style="" class="dest-center">Contact</h5>
                     	<p class="desc">Lorem Ipsum cras fermentum odio eu feugiat. Lorem Ipsum cras fermentum odio eu feugiat.</p>
             		</div>  
                <div>                            
                        <i class="fa fa-map-marker"></i>&nbsp;  
                       <span class="icons"> Bur Dubai, 250C ST, Dubai, U.A.E </span>            
                 </div>

                    <div>
                       <i class="fa fa-envelope"></i>&nbsp;
                       <span class="icons">info@naresco.com</span>                     
                    </div>
              
                    <div>
                      <i class="fa fa-phone"></i>&nbsp;
                      <span class="icons">+971 4 3399888</span>
                    </div>
                  	</div>

                <div class="col-xs-6 col-sm-6 col-lg-3 col-md-3">
                  	<div class="contact-body">
                     	<h5 style="" class="dest-center">About</h5>  
                      </div>
                      <div><i class="fa fa-angle-right"></i>&nbsp; &nbsp;<a><span class="links">Vision</span></a></div>
                      <div><i class="fa fa-angle-right"></i>&nbsp; &nbsp;<a><span class="links">Mission</span></a></div>
                      <div><i class="fa fa-angle-right"></i>&nbsp; &nbsp;<a><span class="links">About Us</span></a></div>
                      <div><i class="fa fa-angle-right"></i>&nbsp; &nbsp;<a><span class="links">Chairman's message</span></a></div>
                  	
              	</div>
           
            	<div class="col-xs-6 col-sm-6 col-lg-3 col-md-3">
                  	<div class="contact-body">
                    	 <h5 style="" class="dest-center">Services</h5>
					</div>     
                      <div><i class="fa fa-angle-right"></i>&nbsp; &nbsp;<a><span class="links">Vision</span></a></div>
                      <div><i class="fa fa-angle-right"></i>&nbsp; &nbsp;<a><span class="links">Mission</span></a></div>
                      <div><i class="fa fa-angle-right"></i>&nbsp; &nbsp;<a><span class="links">About Us</span></a></div>
                      <div><i class="fa fa-angle-right"></i>&nbsp; &nbsp;<a><span class="links">Chairman's message</span></a></div>       
                </div>               
               	<div class="col-xs-12 col-sm-12 col-lg-3 col-md-3 form">
               	   <div class="subscribe">
                     	<h5 style="" class="dest-center">Subscribe</h5>
					</div>
	                  <div class="form">
	                     <form class="contactForm">
	                        <div class="form-group">
	                           <input type="text" class="form-control" placeholder="Name"/>
	                        </div>
	                        <div class="form-group">
	                           <input type="text" class="form-control" placeholder="Email"/>
	                        </div>
	                        <div><button type="submit" class="btn btn-outline-info" title="Send Message">Submit</button></div>
                          <br>
	                     </form>
	                  </div>
               </div>
            </div>
         
         </div>
      </section>
      <!-- Footer -->
      <section id="footer">
         <footer id="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 text-center">
                     <div class="copyright">
                        &copy; Copyright <strong>DESTINATION</strong>. All Rights Reserved
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </section>


</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick/slick.js"></script>
<script src="js/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
    <script type="text/javascript">

      $(function() {
        $('#slider').carouFredSel({
          width: '100%',
          align: false,
          items: 3,
          items: {
            width: $('#wrapper').width() * 0.15,
            height: 500,
            visible: 1,
            minimum: 1
          },
          scroll: {
            items: 1,
            timeoutDuration : 5000,
            onBefore: function(data) {
      
              //  find current and next slide
              var currentSlide = $('.slide.active', this),
                nextSlide = data.items.visible,
                _width = $('#wrapper').width();
      
              //  resize currentslide to small version
              currentSlide.stop().animate({
                width: _width * 0.15
              });   
              currentSlide.removeClass( 'active' );
      
              //  hide current block
              data.items.old.add( data.items.visible ).find( '.slide-block' ).stop().fadeOut();         
      
              //  animate clicked slide to large size
              nextSlide.addClass( 'active' );
              nextSlide.stop().animate({
                width: _width * 0.7
              });           
            },
            onAfter: function(data) {
              //  show active slide block
              data.items.visible.last().find( '.slide-block' ).stop().fadeIn();
            }
          },
          onCreate: function(data){
      
            //  clone images for better sliding and insert them dynamacly in slider
            var newitems = $('.slide',this).clone( true ),
              _width = $('#wrapper').width();

            $(this).trigger( 'insertItem', [newitems, newitems.length, false] );
      
            //  show images 
            $('.slide', this).fadeIn();
            $('.slide:first-child', this).addClass( 'active' );
            $('.slide', this).width( _width * 0.15 );
      
            //  enlarge first slide
            $('.slide:first-child', this).animate({
              width: _width * 0.7
            });
      
            //  show first title block and hide the rest
            $(this).find( '.slide-block' ).hide();
            $(this).find( '.slide.active .slide-block' ).stop().fadeIn();
          }
        });
      
        //  Handle click events
        $('#slider').children().click(function() {
          $('#slider').trigger( 'slideTo', [this] );
        });
      
        //  Enable code below if you want to support browser resizing
        $(window).resize(function(){
      
          var slider = $('#slider'),
            _width = $('#wrapper').width();
      
          //  show images
          slider.find( '.slide' ).width( _width * 0.15 );
      
          //  enlarge first slide
          slider.find( '.slide.active' ).width( _width * 0.7 );
      
          //  update item width config
          slider.trigger( 'configuration', ['items.width', _width * 0.15] );
        });

      });


$(document).ready(function () {
   $('.card-slider').slick({
    dots: false,
    infinite: true,
    draggable: true,
    speed: 300,
    slidesToShow: 3,
    mobileFirst: true,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
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
        breakpoint: 320,
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

</script>

</html>