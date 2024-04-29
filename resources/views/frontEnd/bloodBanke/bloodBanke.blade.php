@extends('frontEnd.layout.master')
@section('title')
    Blood Bank
@endsection
@section('content')
  <!-- Start of contact area -->
  <div id="contact" class="contact-area gray-bg ptb-100 bc-m">
            <!--  Start ambulance-->
            <div class="container am-t">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ambulance-img">
                            <img class="ambulance-img" src="{{asset('frontEndAsset')}}/images/blood bank/blood bank.PNG" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--  End ambulance-->
            <div class="container">
                <div class="row">
                        <div class="all-contact-text">
                            <div class="row">
                                <div class="col-lg-6 bm-t">
                                    <h4 class="book-an-appointment-h">Blood Bank</h4>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="container">
                                    <form action="{{route('save_bloodBank')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <select class="sb-input form-control mb-3" name="division_id" id="select1">
                                                    <option value="">Select District<p class="am-c">*</p></option>
                                                    @foreach ($divisions as $division)
                                                    <option value="{{$division->id}}">{{$division->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <select class="sb-input  form-control mb-3" name="police_station_id" id="select22">
                                                    <option value="" data-section1="1">Select Police Station<p class="am-c">*</p></option>
                                                    @foreach ($policeStation as $policeStations)
                                                    <option value="{{$policeStations->id}}">{{$policeStations->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <select class="sb-input  form-control mb-3" name="area_id" id="select3">
                                                    <option value="">Select Area<p class="text-danger am-c">*</p></option>
                                                    @foreach ($area as $areas)
                                                    <option value="{{$areas->id}}">{{$areas->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="main-contact">
                                                    <input name="phone" class="form-control input-book" type="text" required="" placeholder="Enter Your Mobile Number">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-4 sb-t">
                                                <div class="submit">
                                                    <input class="submit" type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of contact area -->
@endsection