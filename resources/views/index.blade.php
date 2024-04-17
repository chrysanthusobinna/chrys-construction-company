@section('title', 'Home Page')
@include("header")

<section class="hero-wrap js-fullheight" style="background-image: url('/assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
<div class="col-lg-6 ftco-animate">
<div class="mt-5">
<h1 class="mb-4">"We Create <br>Exceptional Projects"</h1>
<p class="mb-4">Experts in Structural Engineering, Design, and Construction</p>
 
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2">
<div class="container">
<div class="row no-gutters d-flex">
<div class="col-lg-4 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services d-flex">
<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-engineer-1"></span></div>
<div class="media-body pl-4">
<h3 class="heading mb-3">Excellence</h3>
<p>We are committed to delivering construction solutions of the highest quality, setting industry standards with every project.</p>
 </div>
</div>
</div>
<div class="col-lg-4 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services services-2 d-flex">
<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-worker-1"></span></div>
<div class="media-body pl-4">
<h3 class="heading mb-3">Integrity</h3>
<p>Our company operates with honesty, transparency, and ethical practices, building trust with clients, partners, and communities.</p>
 </div>
</div>
</div>
<div class="col-lg-4 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services d-flex">
<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-engineer"></span></div>
<div class="media-body pl-4">
<h3 class="heading mb-3">Innovation</h3>
<p>We embrace creativity and forward-thinking approaches, leveraging technology and expertise to drive continuous improvement in construction practices.</p>
 </div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section" id="about-section">
<div class="container">
<div class="row">
<div class="col-md-6 d-flex align-items-stretch">
<div class="about-wrap img w-100" style="background-image: url(/assets/images/about.jpg);">
<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-crane"></span></div>
</div>
</div>
<div class="col-md-6 py-5 pl-md-5">
<div class="row justify-content-center mb-4 pt-md-4">
<div class="col-md-12 heading-section ftco-animate">
<span class="subheading">Welcome to {{ env('COMPANY_NAME') }}</span>
<h2 class="mb-4"> Building Dreams, Crafting Excellence: Introducing {{ env('COMPANY_NAME') }} Construction Company</h2>
<div class="d-flex about">
<div class="icon"><span class="flaticon-hammer"></span></div>
<h3>Your Trusted Partner for Residential and Commercial Construction Solutions</h3>
</div>
<p style="text-align:justify;">

    {{ env('COMPANY_NAME') }} is a leading provider of construction services, specializing in residential and commercial projects. 
    With a team of experienced professionals and a commitment to excellence, we deliver high-quality construction solutions tailored to 
    meet the unique needs of our clients. Whether you're planning a new build, renovation, or restoration project, trust {{ env('COMPANY_NAME') }} Construction Company to bring your vision to life.
</p>
 
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-intro">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12 text-center">
<div class="img" style="background-image: url(/assets/images/bg_2.jpg);">
<div class="overlay"></div>
<h2>Bespoke Excellence: Delivering Personalized and High-Quality Services</h2>
 </div>
</div>
</div>
</div>
</section>



<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter">
<div class="img image-overlay" style="background-image: url(/assets/images/about-3.jpg);"></div>
<div class="container">
<div class="row no-gutters">
<div class="col-md-6 py-5 bg-secondary aside-stretch">
<div class="heading-section heading-section-white p-4 pl-md-0 py-md-5 pr-md-5">
<span class="subheading">{{ env('COMPANY_NAME') }} Construction Company</span>
<h2 class="mb-4">"Crafting Your Vision: Our Approach to Every Project"</h2>
<h4> At {{ env('COMPANY_NAME') }}, we understand that your home or business is more than just a building – it's a reflection of your personality, style, and vision for the future. That's why we approach every project with care, attention to detail, and a focus on quality that sets us apart from the rest.</h4>
 


</div>
</div>
<div class="col-md-6 d-flex align-items-center">
<div class="row">
<div class="col-md-12 d-flex counter-wrap ftco-animate">
<div class="block-18 bg-primary d-flex align-items-center justify-content-between">
<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-engineer"></span></div>
<div class="text">
<strong class="number" data-number="148000">0</strong>
<span>Project Completed</span>
</div>
</div>
</div>
<div class="col-md-12 d-flex counter-wrap ftco-animate">
<div class="block-18 d-flex align-items-center justify-content-between">
<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-worker-1"></span></div>
<div class="text">
<strong class="number" data-number="154900">0</strong>
<span>Happy Customers</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 text-center heading-section ftco-animate">
<span class="subheading">We provide a variety of services tailored to fulfill your construction requirements.</span>
<h2 class="mb-4">Our services include</h2>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="project">
<a  class="img   d-flex align-items-center" style="background-image: url(/assets/images/services-3.jpg);">
<div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
</a>
<div class="text">
 <h3>New construction</h3>
<p><span class="fa fa-circle"></span> 
Discover innovative and sustainable new construction solutions tailored to your needs. Trust us to bring your vision to life. 

 
</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="project">
<a  class="img   d-flex align-items-center" style="background-image: url(/assets/images/services-1.jpg);">
<div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
</a>
<div class="text">
<h3>Interior and exterior finishing</h3>
<p><span class="fa fa-circle"></span> 
    Crafting exquisite interior and exterior finishes, transforming spaces with attention to detail and timeless elegance.</p>
 
</p>
</div>
</div>
</div>
 
<div class="col-md-4">
<div class="project">
<a  class="img   d-flex align-items-center" style="background-image: url(/assets/images/project-1.jpg);">
<div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
</a>
<div class="text">
<h3>Project Management</h3>
<p><span class="fa fa-circle"></span> 
    Efficient project management ensuring timelines, budgets, and quality standards are met with precision and expertise.</p>
</div>
</div>
</div>
 </div>
</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb testimony-section img" id="testimonylist">
<div class="overlay"></div>
<div class="container">
<div class="row ftco-animate justify-content-center">
<div class="col-md-6 p-4 pl-md-0 py-md-5 pr-md-5 aside-stretch d-flex align-items-center">
<div class="heading-section heading-section-white">
<span class="subheading" style="color:#fff;">Read Testimonials</span>
<h2 class="mb-4" style="font-size: 50px;">It's always gratifying to receive positive feedback about the work we've accomplished.</h2>
</div>
</div>
<div class="col-md-6 pl-md-5 py-4 py-md-5 aside-stretch-right">
<div class="carousel-testimony owl-carousel ftco-owl">
<div class="item">
<div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
<div class="user-img" style="background-image: url(/assets/images/person_1.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="fa fa-quote-left"></i>
</span>
</div>
<div class="text">
<p class="mb-4">Working with {{ env('COMPANY_NAME') }} Construction Company was an absolute pleasure. Their attention to detail and dedication to quality craftsmanship exceeded our expectations. Our project was completed on time and within budget, and we couldn't be happier with the results.</p>
<p class="name"> John Smith</p>
<span class="position">Homeowner</span>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
<div class="user-img" style="background-image: url(/assets/images/person_2.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="fa fa-quote-left"></i>
</span>
</div>
<div class="text">
<p class="mb-4">"I highly recommend {{ env('COMPANY_NAME') }} Construction Company for any construction project. Their team of professionals demonstrated exceptional skill, professionalism, and reliability throughout the entire process. From concept to completion, they were there every step of the way, ensuring our vision became a reality.</p>
<p class="name"> Peter Johnson </p>
<span class="position">Commercial Developer</span>
</div>
</div>
</div>
 
 
 
</div>
</div>
</div>
</div>
</section>
 
<section class="ftco-section bg-half-light" id="teamlist">
<div class="container">
<div class="row justify-content-center mb-5 pb-2">
<div class="col-md-8 text-center heading-section ftco-animate">
<span class="subheading">Bringing Your Vision to Reality</span>
<h2 class="mb-4">Skilled Professionals Dedicated to Fulfilling Your Construction Dreams</h2>
</div>
</div>
<div class="row">



 

 
 <p>Our team of skilled architects, engineers, and builders works tirelessly to bring your ideas to life, from initial concept to final construction. Whether you're looking to build a custom home, renovate your existing space, or undertake a commercial development, we have the expertise and resources to make it happen. </p>


 


</div>
</div>
</section>

@include("footer")