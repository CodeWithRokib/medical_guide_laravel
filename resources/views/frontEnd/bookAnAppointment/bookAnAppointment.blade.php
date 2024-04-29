@extends('frontEnd.layout.master')
@section('title')
    Book An Appointment
@endsection
@section('content')
</div>
       <!-- Start Appointment text-->
       <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md col-sm col">
                <div class="local-foreign">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="local-foreign-btn nav-link active" id="pills-local-tab" data-bs-toggle="pill" data-bs-target="#pills-local" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Local</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="local-foreign-btn nav-link" id="pills-foreign-tab" data-bs-toggle="pill" data-bs-target="#pills-foreign" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Foreign</button>
                        </li>
                    </ul>
                </div>
                <div class="local-content">
                    <div class="tab-content tab-menu-1" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-local" role="tabpanel" aria-labelledby="pills-local-tab">
                            <div class="tab-ul">
                                <ul class="nav-res nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-li nav-item" role="presentation">
                                        <button class="nav-button nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                                    </li>
                                    <li class="nav-li nav-item" role="presentation">
                                        <button class="nav-button nav-link" id="pills-dental-tab" data-bs-toggle="pill" data-bs-target="#pills-dental" type="button" role="tab" aria-controls="pills-dental" aria-selected="false">Dental</button>
                                    </li>
                                    <li class="nav-li nav-item" role="presentation">
                                        <button class="nav-button nav-link" id="pills-kid-dental-tab" data-bs-toggle="pill" data-bs-target="#pills-kid-dental" type="button" role="tab" aria-controls="pills-kid-dental" aria-selected="false">Kid Dental</button>
                                    </li>
                                    <li class="nav-li nav-item" role="presentation">
                                        <button class="nav-button nav-link" id="pills-implants-tab" data-bs-toggle="pill" data-bs-target="#pills-implants" type="button" role="tab" aria-controls="pills-implants" aria-selected="false">implants</button>
                                    </li>
                                    <li class="nav-li nav-item" role="presentation">
                                        <button class="nav-button nav-link" id="pills-video-tab" data-bs-toggle="pill" data-bs-target="#pills-video" type="button" role="tab" aria-controls="pills-video" aria-selected="false">video</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content tab-margin" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                                    <div class="col-lg-12 tab-display">
                                        @foreach ($doctor as $item)
                                        <div class="col-lg-3">
                                            <div class="tab-box">
                                                <div class="doctor-img">
                                                    <img src="{{asset('frontEndAsset')}}/images/team/1.webp" alt="">
                                                </div>
                                                <div class="doctor-details">
                                                    <h4 style="font-size:15px;">{{$item->name}}</h4>
                                                    <p>{{$item->specialist->name}}</p>
                                                    <div class="doctor-content">
                                                        <a href="doctor profile.html">Profile</a>
                                                        <a href="book an appointment.html">Appointment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                    
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-dental" role="tabpanel" aria-labelledby="pills-dental-tab">
                                    <div class="col-lg-12 tab-display">
                                        
                                        @foreach ($doctor as $item)
                                        <div class="col-lg-3">
                                            <div class="tab-box">
                                                <div class="doctor-img">
                                                    <img src="{{asset('frontEndAsset')}}/images/team/1.webp" alt="">
                                                </div>
                                                <div class="doctor-details">
                                                    <h4 style="font-size:15px;">{{$item->name}}</h4>
                                                    <p>{{$item->specialist->name}}</p>
                                                    <div class="doctor-content">
                                                        <a href="doctor profile.html">Profile</a>
                                                        <a href="book an appointment.html">Appointment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                    
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-kid-dental" role="tabpanel" aria-labelledby="pills-kid-dental-tab">
                                    <div class="col-lg-12 tab-display">
                                        @foreach ($doctor as $item)
                                        <div class="col-lg-3">
                                            <div class="tab-box">
                                                <div class="doctor-img">
                                                    <img src="{{asset('frontEndAsset')}}/images/team/1.webp" alt="">
                                                </div>
                                                <div class="doctor-details">
                                                    <h4 style="font-size:15px;">{{$item->name}}</h4>
                                                    <p>{{$item->specialist->name}}</p>
                                                    <div class="doctor-content">
                                                        <a href="doctor profile.html">Profile</a>
                                                        <a href="book an appointment.html">Appointment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-implants" role="tabpanel" aria-labelledby="pills-implants-tab">
                                    <div class="col-lg-12 tab-display">
                                        @foreach ($doctor as $item)
                                        <div class="col-lg-3">
                                            <div class="tab-box">
                                                <div class="doctor-img">
                                                    <img src="{{asset('frontEndAsset')}}/images/team/1.webp" alt="">
                                                </div>
                                                <div class="doctor-details">
                                                    <h4 style="font-size:15px;">{{$item->name}}</h4>
                                                    <p>{{$item->specialist->name}}</p>
                                                    <div class="doctor-content">
                                                        <a href="doctor profile.html">Profile</a>
                                                        <a href="book an appointment.html">Appointment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                    
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                                    <div class="col-lg-12 tab-display">
                                        @foreach ($doctor as $item)
                                        <div class="col-lg-3">
                                            <div class="tab-box">
                                                <div class="doctor-img">
                                                    <img src="{{asset('frontEndAsset')}}/images/team/1.webp" alt="">
                                                </div>
                                                <div class="doctor-details">
                                                    <h4 style="font-size:15px;">{{$item->name}}</h4>
                                                    <p>{{$item->specialist->name}}</p>
                                                    <div class="doctor-content">
                                                        <a href="doctor profile.html">Profile</a>
                                                        <a href="book an appointment.html">Appointment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-foreign" role="tabpanel" aria-labelledby="pills-foreign-tab">
                            <div class="tab-ul">
                                <ul class="nav-res nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-li nav-item" role="presentation">
                                        <button class="nav-button nav-link active" id="pills-all-1-tab" data-bs-toggle="pill" data-bs-target="#pills-all-1" type="button" role="tab" aria-controls="pills-all-1" aria-selected="true">All</button>
                                    </li>
                                    <li class="nav-li nav-item" role="presentation">
                                        <button class="nav-button nav-link" id="pills-dental-1-tab" data-bs-toggle="pill" data-bs-target="#pills-dental-1" type="button" role="tab" aria-controls="pills-dental-1" aria-selected="false">Dental</button>
                                    </li>
                                    <li class="nav-li nav-item" role="presentation">
                                        <button class="nav-button nav-link" id="pills-kid-dental-1-tab" data-bs-toggle="pill" data-bs-target="#pills-kid-dental-1" type="button" role="tab" aria-controls="pills-kid-dental-1" aria-selected="false">Kid Dental</button>
                                    </li>
                                    <li class="nav-li nav-item" role="presentation">
                                        <button class="nav-button nav-link" id="pills-implants-1-tab" data-bs-toggle="pill" data-bs-target="#pills-implants-1" type="button" role="tab" aria-controls="pills-implants-1" aria-selected="false">implants</button>
                                    </li>
                                    <li class="nav-li nav-item" role="presentation">
                                        <button class="nav-button nav-link" id="pills-video-1-tab" data-bs-toggle="pill" data-bs-target="#pills-video-1" type="button" role="tab" aria-controls="pills-video-1" aria-selected="false">video</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content tab-margin" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-all-1" role="tabpanel" aria-labelledby="pills-all-1-tab">
                                    <div class="col-lg-12 tab-display">
                                        @foreach ($doctor as $item)
                                        <div class="col-lg-3">
                                            <div class="tab-box">
                                                <div class="doctor-img">
                                                    <img src="{{asset('frontEndAsset')}}/images/team/1.webp" alt="">
                                                </div>
                                                <div class="doctor-details">
                                                    <h4 style="font-size:15px;">{{$item->name}}</h4>
                                                    <p>{{$item->specialist->name}}</p>
                                                    <div class="doctor-content">
                                                        <a href="doctor profile.html">Profile</a>
                                                        <a href="book an appointment.html">Appointment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                    
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-dental-1" role="tabpanel" aria-labelledby="pills-dental-1-tab">
                                    <div class="col-lg-12 tab-display">
                                        @foreach ($doctor as $item)
                                        <div class="col-lg-3">
                                            <div class="tab-box">
                                                <div class="doctor-img">
                                                    <img src="{{asset('frontEndAsset')}}/images/team/1.webp" alt="">
                                                </div>
                                                <div class="doctor-details">
                                                    <h4 style="font-size:15px;">{{$item->name}}</h4>
                                                    <p>{{$item->specialist->name}}</p>
                                                    <div class="doctor-content">
                                                        <a href="doctor profile.html">Profile</a>
                                                        <a href="book an appointment.html">Appointment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                    
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-implants-1" role="tabpanel" aria-labelledby="pills-implants-1-tab">
                                    <div class="col-lg-12 tab-display">
                                        @foreach ($doctor as $item)
                                        <div class="col-lg-3">
                                            <div class="tab-box">
                                                <div class="doctor-img">
                                                    <img src="{{asset('frontEndAsset')}}/images/team/1.webp" alt="">
                                                </div>
                                                <div class="doctor-details">
                                                    <h4 style="font-size:15px;">{{$item->name}}</h4>
                                                    <p>{{$item->specialist->name}}</p>
                                                    <div class="doctor-content">
                                                        <a href="doctor profile.html">Profile</a>
                                                        <a href="book an appointment.html">Appointment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                    
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-video-1" role="tabpanel" aria-labelledby="pills-video-tab-1">
                                    <div class="col-lg-12 tab-display">
                                        @foreach ($doctor as $item)
                                        <div class="col-lg-3">
                                            <div class="tab-box">
                                                <div class="doctor-img">
                                                    <img src="{{asset('frontEndAsset')}}/images/team/1.webp" alt="">
                                                </div>
                                                <div class="doctor-details">
                                                    <h4 style="font-size:15px;">{{$item->name}}</h4>
                                                    <p>{{$item->specialist->name}}</p>
                                                    <div class="doctor-content">
                                                        <a href="doctor profile.html">Profile</a>
                                                        <a href="book an appointment.html">Appointment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Appointment text-->

@endsection