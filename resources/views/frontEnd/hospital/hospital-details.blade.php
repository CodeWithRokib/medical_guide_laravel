@extends('frontEnd.layout.master')
@section('title')
    Hospital Details
@endsection
@section('content')
<!-- Start of contact area -->
            <!--  End ambulance-->
            <div class="container">
                <div class="row">
                    <form id="contact-form" action="mail.php" method="post" class="col-lg-12 col-12">
                        <div class="all-contact-text">
                            <div class="row">
                                <div class="col-lg-6 bm-t">
                                    <h4 class="book-an-appointment-h">Hospital Information</h4>
                                </div>
                                <div id="contact" class="contact-area gray-bg ptb-100 bc-m">
                                    <!--  Start ambulance-->
                                    <div class="container am-t">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="hospital-details">
                                                 <img src="{{($hospital->image)? asset('admin/product/upload/'.$hospital->image): url('public/admin/product/upload/hospital.jpg') }}" class="hospital-details-img">
                                                    <!-- <img class="hospital-details-img" src="{{asset($hospital->about)}}" alt=""> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <h3 class="details-h">CURE WAYS</h3>
                                                <ul class="nav-res nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                    <li class="nav-li nav-item" role="presentation">
                                                        <button class="nav-button details-b nav-link active" id="pills-about-tab" data-bs-toggle="pill" data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about" aria-selected="true">About</button>
                                                    </li>
                                                    <li class="nav-li nav-item" role="presentation">
                                                        <button class="nav-button details-b nav-link" id="pills-address-tab" data-bs-toggle="pill" data-bs-target="#pills-address" type="button" role="tab" aria-controls="pills-address" aria-selected="false">Address</button>
                                                    </li>
                                                    <li class="nav-li nav-item" role="presentation">
                                                        <button class="nav-button details-b nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                                                    </li>
                                                    <li class="nav-li nav-item" role="presentation">
                                                        <button class="nav-button details-b nav-link" id="pills-location-tab" data-bs-toggle="pill" data-bs-target="#pills-location" type="button" role="tab" aria-controls="pills-location" aria-selected="false">Location</button>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab" tabindex="0">
                                                        <p>{{$hospital->about}}</p>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-address" role="tabpanel" aria-labelledby="pills-address-tab" tabindex="0">
                                                            <span class="text-center">{{$hospital->address}}</span> 
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                                        <!-- Start of contact area -->
    
                                                            <div class="container">
                                                                <span class="text-center">{{$hospital->phone}}</span> 
                                                        
                                                        </div>

                                                        <!-- End of contact area -->
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-location" role="tabpanel" aria-labelledby="pills-location-tab" tabindex="0">
                                                        <div class="map-area">
                                                            <div class="contact-map">
                                                                <iframe id="gmap_canvas" style="height: 360px; width: 100%;" src="https://maps.google.com/maps?q=121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                                                            </div>
                                                        </div>
                                                
                                                </div>    </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of contact area -->
@endsection