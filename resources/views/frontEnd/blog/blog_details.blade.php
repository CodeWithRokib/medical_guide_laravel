@extends('frontEnd.layout.master')
@section('title')
Blog Details
@endsection
@section('content')
 <!-- breadcrumbs start -->
 <section class="breadcrumbs-area ptb-120 bg-1 fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="breadcrumbs">
                                    <h2 class="page-title">Blog details</h2>
                                    <ul>
                                        <li>
                                            <a class="active" href="{{route('/')}}">Home</a>
                                        </li>
                                        <li>Blog details</li>
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
                                <div class="blog-details-left">
                                    <div class="blog-part">
                                        <div class="blog-img">
                                            <img src="{{asset('frontEndAsset')}}/images/slider/1.webp" alt="">
                                        </div>
                                        <div class="blog-info-2">
                                            <div class="blog-meta">
                                                <span>
                                                    <i class="fa fa-user"></i>
                                                    Salim Rana
                                                </span>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    14 October,2022
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                                        0 Comments
                                                    </a>
                                                </span>
                                            </div>
                                            <h3>Lorem Ipsum is simply dummy text of the printing</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. U enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dol in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, s in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa  </p>
                                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. U enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod consequat. Duis aute irure dol in reprehenderit in voluptate velit</blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. U enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dol in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, s in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta s explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur </p>
                                        </div>
                                    </div>
                                    <div class="news-details-bottom mtb-60">
                                        <h3 class="leave-comment-text">Comments</h3>
                                        <div class="blog-top">
                                            <div class="news-allreply">
                                                <a href="#"><img src="{{asset('frontEndAsset')}}/images/blog/5.webp" alt=""></a>
                                                <div class="nes-icon">
                                                    <a href="#">
                                                        reply
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="blog-img-details">
                                                <div class="blog-title">
                                                    <h3>Salim Rana akter</h3>
                                                    <span>14 October, 2022 at 6 : 00 pm</span>
                                                </div>
                                                <p class="p-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore i aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons. Duis aute irure dolor in reprehenderit in </p>
                                            </div>
                                        </div>
                                        <div class="blog-top blog-middle-mrg">
                                            <div class="news-allreply">
                                                <a href="#"><img src="{{asset('frontEndAsset')}}/images/blog/6.webp" alt=""></a>
                                                <div class="nes-icon">
                                                    <a href="#">
                                                        reply
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="blog-img-details">
                                                <div class="blog-title">
                                                    <h3>Tayeb Rayed</h3>
                                                    <span>14 October, 2022 at 6 : 00 pm</span>
                                                </div>
                                                <p class="p-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore i aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons. Duis aute irure dolor in reprehenderit in </p>
                                            </div>
                                        </div>
                                        <div class="blog-top">
                                            <div class="news-allreply">
                                                <a href="#"><img src="{{asset('frontEndAsset')}}/images/blog/7.webp" alt=""></a>
                                                <div class="nes-icon">
                                                    <a href="#">
                                                        reply
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="blog-img-details">
                                                <div class="blog-title">
                                                    <h3>farhana shuvo</h3>
                                                    <span>14 October, 2022 at 6 : 00 pm</span>
                                                </div>
                                                <p class="p-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore i aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons. Duis aute irure dolor in reprehenderit in </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leave-comment">
                                        <h3 class="leave-comment-text">Write a comment</h3>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="leave-form">
                                                        <input placeholder="Name*" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="leave-form">
                                                        <input placeholder="Email*" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="text-leave">
                                                        <textarea placeholder="Comment*"></textarea>
                                                        <button class="submit" type="submit">Send Commant</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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