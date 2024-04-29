@extends('frontEnd.layout.master')
@section('title')
    Hospital Information
@endsection
@section('content')
    <!-- Start of contact area -->
    <div id="contact" class="contact-area gray-bg ptb-100 bc-m">
            <div class="container">
                <div class="row">
                    <form id="contact-form" action="mail.php" method="post" class="col-lg-12 col-12">
                        <div class="all-contact-text">
                            <div class="row">
                                <div class="col-lg-6 bm-t">
                                    <h4 class="book-an-appointment-h">Hospital</h4>
                                </div>
                               
                                <div class="col-md-12 display-flex">
                                    @foreach ($hospital as $hospitals)
                                    <div class="col-md-4">
                                        <div class="md-cart">
                                            <div class="card">
                                                    <div class="card-body medi-cart">
                                                        <div class="card-img">
                                                        <img src="{{($hospitals->image)? asset('admin/product/upload/'.$hospitals->image): url('public/admin/product/upload/hospital.jpg') }}" >
                                                        </div>
                                                        <div class="card-text">
                                                            <h4>{{substr($hospitals->name,0,30)}}</h4>
                                                            <p>{{$hospitals->division->name}}</p>  
                                                            <a class="h-a" href="{{route('hospital.details',$hospitals->id)}}">Details ></a>
                                                        </div>
                                                    </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End of contact area -->
@endsection