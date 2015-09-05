<!doctype html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='description' content='Responsive Bootstrap 3 Startup and Multipurpose Template'>
    <meta name='keywords' content='Stamp, Startup, Multipurpose, Bootstrap, Landing page, Template, Registration, Landing'>
    <meta name='author' content='David Rees'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    
    <!-- SITE TITLE -->
    <title>Digital Feedback | Professional feedback about your music.</title>
    
    <!-- =========================
     FAV AND TOUCH ICONS AND FONT  
    ============================== -->
    <link rel='icon' href='images/favicons/favicon.ico'>
    <link rel='apple-touch-icon-precomposed' sizes='152x152' href='images/favicons/favicon-152.png'>
    <link rel='apple-touch-icon-precomposed' sizes='120x120' href='images/favicons/favicon-120.png'>
    <link rel='apple-touch-icon-precomposed' sizes='72x72' href='images/favicons/favicon-72.png'>
    <link rel='apple-touch-icon-precomposed' href='images/favicons/favicon-57.png'>
    
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,600|Open+Sans:300,600,400' rel='stylesheet'>
    
    <!-- =========================
     STYLESHEETS   
    ============================== -->
    <!-- BOOTSTRAP AND ANIMATION -->
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel='stylesheet' href='css/animate.min.css'>
    
    <!-- FONT ICONS -->
    <link rel='stylesheet' href='icons.css'>
    
    <!-- CAROUSEL AND LIGHTBOX -->
    <link rel='stylesheet' href='css/owl.theme.css'>
    <link rel='stylesheet' href='css/owl.carousel.css'>
    <link rel='stylesheet' href='css/nivo-lightbox.css'>
    <link rel='stylesheet' href='css/nivo_themes/default/default.css'>
    
    <!-- CUSTOM STYLESHEETS -->
    <link rel='stylesheet' href='css/styles.css'>
    
    <!-- RESPONSIVE FIXES -->
    <link rel='stylesheet' href='css/responsive.css'>
    
    <!-- COLORS -->
    <link rel='stylesheet' href='css/colors/blue.css'>
    <!-- DEFAULT COLOR/ CURRENTLY USING -->
    <!-- <link rel='stylesheet' href='css/colors/red.css'> -->
    <!-- <link rel='stylesheet' href='css/colors/green.css'> -->
    <!-- <link rel='stylesheet' href='css/colors/green2.css'> -->
    <!-- <link rel='stylesheet' href='css/colors/purple.css'> -->
    <!-- <link rel='stylesheet' href='css/colors/orange.css'> -->
    
    <!--[if lt IE 9]>
			<script src='js/html5shiv.min.js'></script>
    <![endif]-->
    <!--[if gte IE 9]>
      <style type='text/css'>
        .standard-button,
        .navbar-register-button {
       filter: none;
        }
      </style>
    <![endif]-->
    <!-- ****************
      After neccessary customization/modification, Please minify HTML/CSS according to http://browserdiet.com/en/ for better performance
     **************** -->
</head>

<body>
    

    
    <!-- =========================
     SECTION: HOME / HEADER  
    ============================== -->
    <header class='header' data-stellar-background-ratio='0.5' id='home'>
        
        <!-- COLOR OVER IMAGE -->
        <div class='overlay-layer'>
            
       
            

                
                <!-- /END ONLY LOGO ON HEADER -->
                <div class='row'>
                    <div class='col-md-12'>
                        
                        <!-- HEADING AND BUTTONS -->
                        <div class='intro-section'>
                            
                            <!-- WELCOM MESSAGE -->
                            <h1 class='intro white-text'>Thankyou!</h1>
                            <h5 class='white-text'>We will contact you in the next 48 hours to arrange your order.</h5>
                            
                            <!-- BUTTON -->
                  
                            <!-- /END BUTTON -->
                            
                        </div>
                        <!-- /END HEADNING AND BUTTONS -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- =========================
     SECTION: CLIENTS LOGOs
    ============================== -->

    

    
 
     
    <!-- FOOTER -->
    <footer class="footer grey-bg">
	  
        ©<? echo date("Y");?> Digital Feedback. All Rights Reserved
        
        <!-- OPTIONAL FOOTER LINKS -->
        <!--
        <ul class="footer-links small-text">
            <li><a href="" class="dark-text">About</a>
            </li>
            <li><a href="" class="dark-text">Terms</a>
            </li>
            <li><a href="" class="dark-text">Privacy</a>
            </li>
        </ul>
        -->
        
        <!-- SOCIAL ICONS -->
        <ul class="social-icons">
            <li><a href=""><span class="icon-social-facebook transparent-text-dark"></span></a>
            </li>
            <li><a href=""><span class="icon-social-twitter transparent-text-dark"></span></a>
            </li>

        </ul>
        
    </footer>
    
    
    <!-- =========================
     SCRIPTS   
    ============================== -->


 
  <!-- jQuery is used only for this example; it isn't required to use Stripe -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script type=text/javascript>

$(function() {
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(e.target).closest('form'),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault(); // cancel on first error
      }
    });
    
 
  });
});



$(function() {
  var $form = $("#payment-form");
  
$('.products').on('change', function() {
 $('.links').hide();


if(this.value=="1") {
$('.amount').text('$14.99'); 
}

if(this.value=="2") {
$('.amount').text('$39.99'); 
}

if(this.value=="3") {
$('.amount').text('$99.99'); 
}
})
});
</script>


    <script>
        /* PRE LOADER */
        jQuery(window).load(function () {
            "use strict";
            jQuery(".status").fadeOut();
            jQuery(".preloader").delay(1000).fadeOut("slow");
        })
    </script>
    

    <script src="js/smoothscroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    
    <!-- GOGLE MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    
    <!-- CUSTOM JS  -->
    <script src="js/custom.js"></script>
    
</body>

</html>