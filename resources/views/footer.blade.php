
 


   <footer class="ftco-footer">
    <div class="container mb-5 pb-4">
    <div class="row">
    <div class="col-lg col-md-6">
    <div class="ftco-footer-widget">
    <h2 class="ftco-heading-2 d-flex align-items-center">{{ env('COMPANY_NAME') }} Construction Company</h2>
    <p> we specialize in delivering high-quality construction solutions tailored to meet your unique needs.</p>
    <ul class="ftco-footer-social list-unstyled mt-4">
    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
    <li><a href="#"><span class="fa fa-instagram"></span></a></li>
    </ul>
    </div>
    </div>
    <div class="col-lg-4 col-md-6">
    <div class="ftco-footer-widget">
    <h2 class="ftco-heading-2">Links</h2>
    <div class="d-flex">
    <ul class="list-unstyled mr-md-4">
    <li><a href="{{ route('index') }}"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
    <li><a href="{{ route('about') }}"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
    <li><a href="{{ route('services') }}"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
    <li><a href="{{ route('team') }}"><span class="fa fa-chevron-right mr-2"></span>Team</a></li>
    <li><a href="{{ route('contact') }}"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
    </ul>
  
    </div>
    </div>
    </div>
    <div class="col-lg col-md-6">
    <div class="ftco-footer-widget">
    <h2 class="ftco-heading-2">Services</h2>
    <ul class="list-unstyled">
        <li><a href="{{ route('index') }}">Construction Services</a></li>
        <li><a href="{{ route('index') }}">Project Portfolio</a></li>
        <li><a href="{{ route('index') }}">Equipment Rentals</a></li>
        <li><a href="{{ route('index') }}">Safety Standards</a></li>
        <li><a href="{{ route('index') }}">Testimonials</a></li>
    </ul>
    </div>
    </div>
    <div class="col-lg col-md-6">
    <div class="ftco-footer-widget">
    <h2 class="ftco-heading-2">Have a Questions?</h2>
    <div class="block-23 mb-3">
    <ul>
    <li><span class="fa fa-map-marker mr-3"></span><span class="text">{{ env('COMPANY_ADDRESS') }} </span></li>
    <li><a href="#"><span class="fa fa-phone mr-3"></span><span class="text">{{ env('COMPANY_PHONE') }} </span></a></li>
    <li><a href="#"><span class="fa fa-paper-plane mr-3"></span><span class="text">{{ env('COMPANY_EMAIL') }}</span></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container-fluid bg-primary">
    <div class="container">
    <div class="row">
    <div class="col-md-6 aside-stretch py-3">
    <p class="mb-0">
        {{ env('COMPANY_NAME') }} Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved   | Designed by <a href="https://www.linkedin.com/in/chrysanthus-obinna">Chrysanthus.C.</a> 
    </p>
    </div>
    </div>
    </div>
    </div>
    </footer>

   
    
   <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
   <script src="/assets/js/jquery.min.js"></script>
   <script src="/assets/js/jquery-migrate-3.0.1.min.js"></script>
   <script src="/assets/js/popper.min.js"></script>
   <script src="/assets/js/bootstrap.min.js"></script>
   <script src="/assets/js/jquery.easing.1.3.js"></script>
   <script src="/assets/js/jquery.waypoints.min.js"></script>
   <script src="/assets/js/jquery.stellar.min.js"></script>
   <script src="/assets/js/owl.carousel.min.js"></script>
   <script src="/assets/js/jquery.magnific-popup.min.js"></script>
   <script src="/assets/js/jquery.animateNumber.min.js"></script>
   <script src="/assets/js/bootstrap-datepicker.js"></script>
   <script src="/assets/js/jquery.timepicker.min.js"></script>
   <script src="/assets/js/scrollax.min.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
   <script src="/assets/js/google-map.js"></script>
   <script src="/assets/js/main.js"></script>
   <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vb26e4fa9e5134444860be286fd8771851679335129114" integrity="sha512-M3hN/6cva/SjwrOtyXeUa5IuCT0sedyfT+jK/OV+s+D0RnzrTfwjwJHhd+wYfMm9HJSrZ1IKksOdddLuN6KOzw==" data-cf-beacon='{"rayId":"7acf02878f0a54bd","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
   </body>
   
   </html>