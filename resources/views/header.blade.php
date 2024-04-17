<!DOCTYPE html>
<html lang="en">

<head>
<title>{{ env('COMPANY_NAME') }} - @yield('title') </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/assets/stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/assets/css/animate.css">
<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="/assets/css/magnific-popup.css">
<link rel="stylesheet" href="/assets/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="/assets/css/jquery.timepicker.css">
<link rel="stylesheet" href="/assets/css/flaticon.css">
<link rel="stylesheet" href="/assets/css/style.css">
<script nonce="15266a51-15a8-428e-8aae-2242b9e071e5">(function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})))))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
<div class="py-1 top">
<div class="container">
<div class="row">
<div class="col-sm text-center text-md-left mb-md-0 mb-2 pr-md-4 d-flex topper align-items-center">
<p class="mb-0 w-100">
<span class="fa fa-envelop"></span>
<span class="text"><a href="mailto:{{ env('COMPANY_EMAIL') }}" class="__cf_email__"  >{{ env('COMPANY_EMAIL') }}</a></span>
</p>
</div>
<div class="col-sm justify-content-center d-flex mb-md-0 mb-2">
<div class="social-media">
<p class="mb-0 d-flex">
 
</p>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-7 d-flex topper align-items-center text-lg-right justify-content-end">
 </div>
</div>
</div>
</div>
<div class="pt-4 pb-5">
<div class="container">
<div class="row d-flex align-items-start align-items-center px-3 px-md-0">
<div class="col-md-4 d-flex mb-2 mb-md-0">
<a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}">
<span class="flaticon flaticon-crane"></span>
<span class="ml-2">{{ env('COMPANY_NAME') }}<small>Construction Company</small></span>
</a>
</div>
<div class="col-md-4 d-flex topper mb-md-0 mb-2 align-items-center">
<div class="icon d-flex justify-content-center align-items-center">
<span class="fa fa-map"></span>
</div>
<div class="pr-md-4 pl-md-3 pl-3 text">
<p class="con"><span>Call</span> <span>{{ env('COMPANY_PHONE') }}</span></p>
<p class="con">Call Us Now 24/7 Customer Support</p>
</div>
</div>
<div class="col-md-4 d-flex topper mb-md-0 align-items-center">
<div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-paper-plane"></span>
</div>
<div class="text pl-3 pl-md-3">
<p class="hr"><span>Our Location</span></p>
<p class="con">{{ env('COMPANY_ADDRESS') }}</p>
</div>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container d-flex align-items-center">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="fa fa-bars"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav mr-auto">
<li class="nav-item {{ request()->route()->named('index') ? 'active' : '' }}"><a href="{{ route('index') }}" class="nav-link">Home</a></li>
<li class="nav-item {{ request()->route()->named('about') ? 'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">About</a></li>
<li class="nav-item {{ request()->route()->named('services') ? 'active' : '' }}"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
<li class="nav-item {{ request()->route()->named('team') ? 'active' : '' }}"><a href="{{ route('team') }}" class="nav-link">Team</a></li>
<li class="nav-item {{ request()->route()->named('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
</ul>
</div>
</div>
</nav>