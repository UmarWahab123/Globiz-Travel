
<!-- FOOTER -->
<div id="footer">
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12 address">
            <h4><?php echo SITE_COMPANY; ?></h4>
            <span class="footer_subheading"><b>Canada Office:</b></span>
            <p>
              <span class="glyphicon glyphicon-map-marker"></span>
              <span class="read_more"> 1816 Crowchild, Trail NW, Suite, 700 Calgary, <br> &nbsp;&nbsp;&nbsp;&nbsp;Alberta, Canada, T2M 3 YZ</span></p>
            
            <span class="footer_subheading"><b>Pakistan Office:</b></span>
            <p>
              <span class="glyphicon glyphicon-map-marker"></span>
              <span class="read_more"> Suit No.108, Hotel Greeh City Sitara Market,<br> &nbsp;&nbsp;&nbsp;&nbsp;G-7, Islamabad, Pakistan</span></p>
          </div>
          <div class="col-md-2 col-sm-6 col-xs-12 links">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="">Home Page</a></li>
              <li><a href="index.php/terms-and-conditions">Terms & Conditions</a></li>
              <li><a href="index.php/privacy-policy">Privacy Policy</a></li>
              <li><a href="index.php/about-us">About Us</a></li>
              <li><a href="index.php/contact-us">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-2 col-sm-6 col-xs-12 links">
            <h4>Business Hours</h4>
            <ul>
              <li><a href="#">Mon - Fri</a></li>
              <li><a href="#">09:00 AM - 05:00 PM</a></li>
              <li><a href="#">Sat - Sun</a></li>
              <li><a href="#">Closed</a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12  address">
            <h4>Contact Info</h4>
            <span class="glyphicon glyphicon-map-marker"></span>
            <a href="#">&nbsp;Proudly Serving Customers throughout the UK</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and Abroad</a></br>
            <span class="glyphicon glyphicon-earphone"></span>
            <a href="tel:<?php echo SITE_PHONE_1; ?>">&nbsp;<?php echo SITE_PHONE_1; ?>, </a> 
            <a href="tel:<?php echo SITE_PHONE_2; ?>">&nbsp;<?php echo SITE_PHONE_2; ?></a></br>
            <span class="glyphicon glyphicon-envelope"></span>
            <a href="mailto:<?php echo SITE_EMAIL; ?>">&nbsp;<?php echo SITE_EMAIL; ?></a></br>
          </div>
        </div>
      </div>
    </div>
    <div class="copyrights text-center">All Rights Reserved &copy; <?php echo date('Y'); ?> - <a href=""><?php echo SITE_COMPANY; ?></a> </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
 <?php if(uri_string() != 'downloads'){ ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
<?php } ?>
  

  <script>
  $(document).ready(function(){
    
  });
  </script>
</body>
</html>
