@section('title', 'About Us')
@include("header")


<section class="hero-wrap hero-wrap-2" style="background-image: url('/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
    <div class="col-md-9 ftco-animate pb-5">
    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>About Us <i class="fa fa-chevron-right"></i></span></p>
    <h1 class="mb-3 bread">About Us</h1>
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
    <span class="subheading">About {{ env('COMPANY_NAME') }} Construction Company</span>
    <h2 class="mb-4">{{ env('COMPANY_NAME') }} Construction Company</h2>
    <div class="d-flex about">
     <h3>Discover Our Legacy, Values, and Commitment to Excellence</h3>
    </div>
    <p>At {{ env('COMPANY_NAME') }}Construction Company has been serving clients across the country for over a decade. 
        Founded on the principles of integrity, quality, and customer satisfaction, we have built a reputation for excellence 
        in the construction industry. Our team consists of skilled craftsmen, engineers, architects, and project managers who work
         collaboratively to deliver outstanding results on every project. Learn more about our history, values, and commitment to excellence.
    
     
    
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
    <h2>Providing Personalized and High Quality Services</h2>
    <p>We can manage your dream building A small river named Duden flows by their place</p>
     </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <br/>
    <br/>
    @include("footer")
