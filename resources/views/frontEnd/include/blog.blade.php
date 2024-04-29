<div id="blog" class="blog-area pb-100 pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Health Tips</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod incidi.</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-n30">
                @foreach($healthips as  $healthip) 
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                      
                        <div class="single-blog">
                     
                            <div class="blog-img">
                            <img src="{{($healthip->image)? asset('admin/health-tips/upload/'.$healthip->image): url('admin/health-tips/upload/hospital.jpg') }}" >
                            </div>
                            <div class="blog-info">
                                <h4><a href="#">{{$healthip->title}}</a></h4>
                                <ul>
                                    <li><i class="zmdi zmdi-calendar-note"></i>14 Sep 2022</li>
                                    <li><i class="zmdi zmdi-comment-alt-text"></i>By Robi</li>
                                </ul>
                                <p>{{substr($healthip->description,0,30)}} </p>
                                <a href="#" class="read-more">read more</a>
                            </div>
                   
                        </div>
                    </div>
                
                @endforeach
                </div>
            </div>
        </div>