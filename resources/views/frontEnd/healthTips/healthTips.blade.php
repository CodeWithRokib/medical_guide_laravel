@extends('frontEnd.layout.master')
@section('title')
    Health Tips
@endsection
@section('content')
<!--   start Health Tips-->
<div id="blog" class="blog-area pb-100 pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 bm-t">
                        <h4 class="book-an-appointment-h">Health Tips</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="section-title s-w">
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod incidi.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod incidi
                                Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod incidi.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod incidi
                            </p> -->
                        </div>
                    </div>
                </div>
                <div class="row mb-n30">
                    @foreach($healthips as  $health)
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="single-blog">
                            <div class="blog-img">
                            <img src="{{($health->image)? asset('admin/health-tips/upload/'.$health->image): url('admin/health-tips/upload/hospital.jpg') }}" >
                                <!-- <img src="{{asset('frontEndAsset')}}/images/blog/1.webp" alt="blog"> -->
                            </div>
                            <div class="blog-info">
                                <h4><a href="#">{{$health->title}}</a></h4>
                                <ul>
                                    <li><i class="zmdi zmdi-calendar-note"></i>14 Sep 2022</li>
                                    <li><i class="zmdi zmdi-comment-alt-text"></i>By Robi</li>
                                </ul>
                                <p>{{substr($health->description,0,30)}} </p>
                                <a href="#" class="read-more">read more</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--   End Health tips-->
    </div>
    <!-- End of contact area -->
@endsection