@extends('frontEnd.layout.master')
@section('title')
Blog Right SideBar
@endsection
@section('content')
  <!-- breadcrumbs start -->
  <section class="breadcrumbs-area ptb-120 bg-1 fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="breadcrumbs">
                                    <h2 class="page-title">Blog Right Sidebar</h2>
                                    <ul>
                                        <li>
                                            <a class="active" href="{{route('/')}}">Home</a>
                                        </li>
                                        <li>Blog Right Sidebar</li>
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
                            <div class="col-lg-9">
                                <div class="row mb-n30">
                                    <div class="col-md-6 col-12 mb-30">
                                        <div class="single-blog">
                                            <div class="blog-img">
                                                <img src="{{asset('frontEndAsset')}}/images/blog/1.webp" alt="blog">
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
                                    <div class="col-md-6 col-12 mb-30">
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
                                    <div class="col-md-6 col-12 mb-30">
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
                                    <div class="col-md-6 col-12 mb-30">
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
                                    <div class="col-md-6 col-12 mb-30">
                                        <div class="single-blog">
                                            <div class="blog-img">
                                                <img src="{{asset('frontEndAsset')}}/images/blog/2.webp" alt="blog">
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
                                    <div class="col-md-6 col-12 mb-30">
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
                                </div>
                            </div>    
                            <div class="col-lg-3">
                                <div class="blog-right-sidebar">
                                    <div class="blog-search mb-60">
                                        <h3 class="leave-comment-text">Search</h3>
                                        <form action="#">
                                            <input value="" placeholder="Search" type="text">
                                            <button class="submit" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                    <div class="blog-right-sidebar-top mb-60">
                                        <h3 class="leave-comment-text">Recent Posts</h3>
                                        <ul>
                                            <li><a href="#">Designer habits</a></li>
                                            <li><a href="#">Lifestyle: eating healthy</a></li>
                                            <li><a href="#">New project: Web design</a></li>
                                            <li><a href="#">Industrial design</a></li>
                                            <li><a href="#">The retro look</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-right-sidebar-top mb-60">
                                        <h3 class="leave-comment-text">dental services</h3>
                                        <ul>
                                            <li><a href="#">cosmetic dentistry</a></li>
                                            <li><a href="#">preventive dentistry</a></li>
                                            <li><a href="#">mini implants</a></li>
                                            <li><a href="#">emergency services</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-right-sidebar-top mb-60">
                                        <h3 class="leave-comment-text">Categories</h3>
                                        <ul>
                                            <li><a href="#">Web Design</a></li>
                                            <li><a href="#">Web Development</a></li>
                                            <li><a href="#">Clean</a></li>
                                            <li><a href="#">Fashion</a></li>
                                            <li><a href="#">Journal</a></li>
                                            <li><a href="#">Photography</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-right-sidebar-bottom">
                                        <h3 class="leave-comment-text">Tags</h3>
                                        <ul>
                                            <li><a href="#">Photography</a></li>
                                            <li><a href="#">Fashion</a></li>
                                            <li><a href="#">Journal</a></li>
                                            <li><a href="#">Web Design</a></li>
                                            <li class="nn"><a href="#">Web Development</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of blog area -->
@endsection