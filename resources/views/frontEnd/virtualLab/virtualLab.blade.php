@extends('frontEnd.layout.master')
@section('title')
    Virtual Lab
@endsection
@section('content')
 <!-- Start of contact area -->
    <div id="contact" class="contact-area gray-bg ptb-100 bc-m">
            <div class="container">
                <div class="row">
                        <div class="all-contact-text">
                            <div class="row">
                                <div class="col-lg-6 bm-t">
                                    <h4 class="book-an-appointment-h">Virtual Lab</h4>
                                </div>
                                <div class="col-lg-12 cirtual-m">
                                    <h5>Revolutionizing Healthcare Diagnostics</h5><br>
                                    <p class="cirtual-p">
                                        CureWays introduces Virtual Lab, a cutting-edge technology
                                        that brings diagnostic laboratory services directly to your
                                        doorstep. Our Virtual Lab service leverages advanced digital
                                        platforms and skilled professionals to provide convenient
                                        and reliable diagnostic testing, enabling you to monitor
                                        your health from the comfort of your own home. With Virtual
                                        Lab, healthcare diagnostics have never been more accessible
                                        and efficient.<br>

                                        <h5>Standard Operating Procedure (SOP) for Virtual Lab:</h5><br>

                                        <h5>Sample Collection:</h5><br>
                                        <b>a.</b> Request a Virtual Lab service through our website or
                                        customer service helpline.<br>
                                        <b>b.</b> Provide necessary information, including the type of
                                        test required and your preferred date and time for sample collection.<br><br>

                                        <h5>Sample Collection Appointment:</h5><br>
                                        <b>a.</b> Our trained phlebotomists will visit your location at the
                                        scheduled appointment time.<br>
                                        <b>b.</b> They will collect the required samples using sterilized
                                        equipment and following proper safety protocols.<br><br>

                                        <h5>Sample Transportation:</h5><br>
                                        <b>a.</b> Collected samples are carefully packaged and transported to
                                        our accredited partner laboratories using specialized cold chain
                                        logistics, if necessary.<br>
                                        <b>b.</b> We ensure proper handling and transportation conditions to
                                        maintain sample integrity and accuracy.<br><br>

                                        <h5>Laboratory Testing:</h5><br>
                                        <b>a.</b> Samples are processed and tested at our partner laboratories
                                        by skilled technicians and under stringent quality control measures.<br>
                                        <b>b.</b> Our partner laboratories are equipped with state-of-the-art
                                        equipment and technologies to deliver accurate and reliable results.<br><br>

                                        <h5>Result Delivery:</h5><br>
                                        <b>a.</b> Once the laboratory testing is completed, we promptly deliver
                                        the test results to you via your preferred communication method, such as
                                        email, SMS, or our secure online portal.<br>
                                        <b>b.</b> Results are presented in a clear and understandable format,
                                        providing you with comprehensive insights into your health status.<br><br>

                                        <h5>Consultation and Follow-up:</h5><br>
                                        <b>a.</b> If required, we offer consultation services with qualified
                                        healthcare professionals who can interpret and explain the test results
                                        in detail.<br>
                                        <b>b.</b> Our healthcare experts can provide guidance, answer your queries,
                                        and recommend appropriate next steps based on the test findings.<br>

                                        Virtual Lab empowers you to take control of your health by eliminating
                                        the need to visit a physical laboratory or clinic. With our advanced
                                        technology and dedicated professionals, you can access high-quality
                                        diagnostic services with ease and convenience.<br><br>

                                        Contact us today to experience the benefits of Virtual Lab and discover
                                        a new level of healthcare diagnostics from the comfort of your home.<br><br>
                                    </p>
                                </div>
                                <div class="container">
                                    <form action="{{route('save_virtualLab')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <select class="sb-input form-control mb-3" name="division_id" id="select1">
                                                    <option value="">Select District<p class="am-c">*</p></option>
                                                    @foreach($divisions as $division)  
                                                    <option value="{{$division->id}}">{{$division->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
    
                                                <select class="sb-input  form-control mb-3" name="police_station_id" id="select22">
                                                    <option value="" >Select Police Station<span class="am-c">*</span></option>
                                                   
                                                    @foreach($policeStation as $policeStations)  
                                                        <option value="{{$policeStations->id}}">{{$policeStations->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <select class="sb-input  form-control mb-3" name="area_id" id="select3">
                                                    <option value="">Select Area<p class="text-danger am-c">*</p></option>
                                                        @foreach($area as $areas)  
                                                        <option value="{{$areas->id}}">{{$areas->name}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <select class="sb-input  form-control mb-3" name="type" id="select3">
                                                    <option value="">Service Type<p class="text-danger am-c">*</p></option>
                                                    @foreach(trans('serviceType') as $key => $value)
                                                    <option value="{{$key}}">{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="main-contact">
                                                    <input name="name" class="form-control input-book" type="text" required="" placeholder="Enter Your Name">
                                                </div>
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