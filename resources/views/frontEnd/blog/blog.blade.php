@extends('frontEnd.layout.master')
@section('title')
Blog
@endsection
@section('content')
 <!-- breadcrumbs start -->
 <section class="breadcrumbs-area ptb-120 bg-1 fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="breadcrumbs">
                                    <h2 class="page-title">our blog</h2>
                                    <ul>
                                        <li>
                                            <a class="active" href="{{route('/')}}">Home</a>
                                        </li>
                                        <li>our blog</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- breadcrumbs end -->
                <!-- Start of blog area -->
                <div id="blog" class="blog-area ptb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2>our latest blog</h2>
                				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod incidi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-n30">    
                            <div class="col-lg-4 col-md-6 col-12 mb-30">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <img src="{{asset('frontEndAsset')}}/images/blog/1.webp" alt="blog">
                                    </div>
                                    <div class="blog-info">
                                        <h4><a href="#">Contrary to popular belief Lorem Ipsum</a></h4>
                                        <ul>
                                            <li><i class="zmdi zmdi-calendar-note"></i>14 Sep 2022</li>
                                            <li><i class="zmdi zmdi-comment-alt-text"></i>By Robi</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur agr elit, sed do eiusmod tempor incididunt uteto labore etrt dolore. </p>
                                        <a href="#" class="read-more">read more</a>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-lg-4 col-md-6 col-12 mb-30">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <img src="{{asset('frontEndAsset')}}/images/blog/2.webp" alt="blog">
                                    </div>
                                    <div class="blog-info">
                                        <h4><a href="#">Need to be sure there isn't anythi</a></h4>
                                        <ul>
                                            <li><i class="zmdi zmdi-calendar-note"></i>14 Sep 2022</li>
                                            <li><i class="zmdi zmdi-comment-alt-text"></i>By Robi</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur agr elit, sed do eiusmod tempor incididunt uteto labore etrt dolore. </p>
                                        <a href="#" class="read-more">read more</a>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-lg-4 col-md-6 col-12 mb-30">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <img src="{{asset('frontEndAsset')}}/images/blog/3.webp" alt="blog">
                                    </div>
                                    <div class="blog-info">
                                        <h4><a href="#">Many web sites still in their infancy</a></h4>
                                       <ul>
                                            <li><i class="zmdi zmdi-calendar-note"></i>14 Sep 2022</li>
                                            <li><i class="zmdi zmdi-comment-alt-text"></i>By Robi</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur agr elit, sed do eiusmod tempor incididunt uteto labore etrt dolore. </p>
                                        <a href="#" class="read-more">read more</a>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-lg-4 col-md-6 col-12 mb-30">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <img src="{{asset('frontEndAsset')}}/images/blog/3.webp" alt="blog">
                                    </div>
                                    <div class="blog-info">
                                        <h4><a href="#">Contrary to popular belief Lorem Ipsum</a></h4>
                                        <ul>
                                            <li><i class="zmdi zmdi-calendar-note"></i>14 Sep 2022</li>
                                            <li><i class="zmdi zmdi-comment-alt-text"></i>By Robi</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur agr elit, sed do eiusmod tempor incididunt uteto labore etrt dolore. </p>
                                        <a href="#" class="read-more">read more</a>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-lg-4 col-md-6 col-12 mb-30">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <img src="{{asset('frontEndAsset')}}/images/blog/2.webp" alt="blog">
                                    </div>
                                    <div class="blog-info">
                                        <h4><a href="#">Need to be sure there isn't anythi</a></h4>
                                        <ul>
                                            <li><i class="zmdi zmdi-calendar-note"></i>14 Sep 2022</li>
                                            <li><i class="zmdi zmdi-comment-alt-text"></i>By Robi</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur agr elit, sed do eiusmod tempor incididunt uteto labore etrt dolore. </p>
                                        <a href="#" class="read-more">read more</a>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-lg-4 col-md-6 col-12 mb-30">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <img src="{{asset('frontEndAsset')}}/images/blog/1.webp" alt="blog">
                                    </div>
                                    <div class="blog-info">
                                        <h4><a href="#">Many web sites still in their infancy</a></h4>
                                       <ul>
                                            <li><i class="zmdi zmdi-calendar-note"></i>14 Sep 2022</li>
                                            <li><i class="zmdi zmdi-comment-alt-text"></i>By Robi</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur agr elit, sed do eiusmod tempor incididunt uteto labore etrt dolore. </p>
                                        <a href="#" class="read-more">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of blog area -->
@endsection