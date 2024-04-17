@section('title', 'Contact')
@include("header")


<section class="hero-wrap hero-wrap-2" style="background-image: url('/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-start">
<div class="col-md-9 ftco-animate pb-5">
<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
<h1 class="mb-3 bread">Contact us</h1>
</div>
</div>
</div>
</section>
<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 heading-section text-center ftco-animate">
<span class="subheading">Contact us</span>
<h2 class="mb-4">Get in Touch</h2>
<p>Ready to start your construction project? Have questions about our services or capabilities? Contact 
    {{ env('COMPANY_NAME') }} Construction Company today to speak with a member of our team. We're here to answer your questions, 
    provide expert guidance, and help you get started on your next project. 
    Reach out to us via phone, email, or through our online contact form. We look forward to hearing from you!
</p>
 </div>
</div>
<div class="row block-9">
<div class="col-md-8">
<form action="#" class="p-4 p-md-5 contact-form">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" placeholder="Subject">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
</div>
</div>
</div>
</form>
</div>
<div class="col-md-4 d-flex pl-md-5">
<div class="row">
<div class="dbox w-100 d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-map-marker"></span>
</div>
<div class="text">
<p><span>Address:</span> {{ env('COMPANY_ADDRESS') }}</p>
</div>
</div>
<div class="dbox w-100 d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-phone"></span>
</div>
<div class="text">
<p><span>Phone:</span> <a href="tel:{{ env('COMPANY_PHONE') }}">{{ env('COMPANY_PHONE') }}</a></p>
</div>
</div>
<div class="dbox w-100 d-flex ftco-animate">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-paper-plane"></span>
</div>
<div class="text">
<p><span>Email:</span> <a href="mailto:{{ env('COMPANY_EMAIL') }}#721b1c141d320b1d0700011b06175c111d1f"><span class="__cf_email__" >{{ env('COMPANY_EMAIL') }}</span></a></p>
</div>
</div>
 
</div>
</div>
<div class="col-md-12">

<iframe src="https://maps.google.it/maps?q={{ env('COMPANY_ADDRESS') }}&output=embed" width="600" height="450" frameborder="0" style="border:0; width:100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>
</div>
</div>
</section>

@include("footer")
