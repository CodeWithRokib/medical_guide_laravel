@extends('frontEnd.layout.master')
@section('title')
Gallery
@endsection
@section('content')
<!-- breadcrumbs start -->
<section class="breadcrumbs-area ptb-120 bg-1 fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="breadcrumbs">
                                    <h2 class="page-title">our Gallery</h2>
                                    <ul>
                                        <li>
                                            <a class="active" href="{{route('/')}}">Home</a>
                                        </li>
                                        <li>our Gallery</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- breadcrumbs end -->
                <!--Start of Gallery Area-->
                <div id="gallery" class="gallery-area ptb-100">
                    <div class="container">
                        <div class="row">
                			<div class="col-12">
                				<div class="section-title mb-50">
                				    <h2>our gallery</h2>
                				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod incidi.</p>
                				</div>
                			</div>
                			<div class="col-md-12">
                			    <div class="portfolio-menu mb-40 text-start">
                                    <button class="active" data-filter="*">all</button>
                                    <button data-filter=".cat1">dental</button>
                                    <button data-filter=".cat2">kid dental</button>
                                    <button data-filter=".cat3">implants</button>
                                    <button data-filter=".cat4">video</button>
                                </div>
                			</div>
                		</div>
                    </div>
                	<div class="container-fluid">
                        <div class="grid row mb-n30">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 grid-item cat1 mb-30">
                                <div class="single-port">
                                    <img src="{{asset('frontEndAsset')}}/images/gallery/1.webp" alt="gallery" />
                                    <div class="portfolio-hover">
                                        <a class="img-poppu" href="{{asset('frontEndAsset')}}/images/gallery/1.webp">
                                            <i class="zmdi zmdi-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 grid-item cat4 mb-30">
                                <div class="single-port">
                                    <img src="{{asset('frontEndAsset')}}/images/gallery/2.webp" alt="gallery" />
                                    <div class="portfolio-hover">
                                        <a class="img-poppu" href="{{asset('frontEndAsset')}}/images/gallery/2.webp">
                                            <i class="zmdi zmdi-search"></i>
                                        </a>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 grid-item cat1 cat2 mb-30">
                                <div class="single-port">
                                    <img src="{{asset('frontEndAsset')}}/images/gallery/3.webp" alt="gallery" />
                                    <div class="portfolio-hover">
                                        <a class="img-poppu" href="{{asset('frontEndAsset')}}/images/gallery/3.webp">
                                            <i class="zmdi zmdi-search"></i>
                                        </a>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 grid-item cat2 mb-30">
                                <div class="single-port">
                                    <img src="{{asset('frontEndAsset')}}/images/gallery/4.webp" alt="gallery" />
                                    <div class="portfolio-hover">
                                        <a class="img-poppu" href="{{asset('frontEndAsset')}}/images/gallery/4.webp">
                                            <i class="zmdi zmdi-search"></i>
                                        </a>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 grid-item cat2 cat3 mb-30">
                                <div class="single-port">
                                    <img src="{{asset('frontEndAsset')}}/images/gallery/5.webp" alt="gallery" />
                                    <div class="portfolio-hover">
                                        <a class="img-poppu" href="{{asset('frontEndAsset')}}/images/gallery/5.webp">
                                            <i class="zmdi zmdi-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 grid-item cat1 cat3 cat4 mb-30">
                                <div class="single-port">
                                    <img src="{{asset('frontEndAsset')}}/images/gallery/6.webp" alt="gallery" />
                                    <div class="portfolio-hover">
                                        <a class="img-poppu" href="{{asset('frontEndAsset')}}/images/gallery/6.webp">
                                            <i class="zmdi zmdi-search"></i>
                                        </a>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 grid-item cat3 cat4 mb-30">
                                <div class="single-port">
                                    <img src="{{asset('frontEndAsset')}}/images/gallery/7.webp" alt="gallery" />
                                    <div class="portfolio-hover">
                                        <a class="img-poppu" href="{{asset('frontEndAsset')}}/images/gallery/7.webp">
                                            <i class="zmdi zmdi-search"></i>
                                        </a>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 grid-item cat1 cat3 cat2 mb-30">
                                <div class="single-port">
                                    <img src="{{asset('frontEndAsset')}}/images/gallery/8.webp" alt="gallery" />
                                    <div class="portfolio-hover">
                                        <a class="img-poppu" href="{{asset('frontEndAsset')}}/images/gallery/8.webp">
                                            <i class="zmdi zmdi-search"></i>
                                        </a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <!-- portfolio_gallery_area End -->  
                	</div>
                </div>
                <!--End of Gallery Area-->
@endsection