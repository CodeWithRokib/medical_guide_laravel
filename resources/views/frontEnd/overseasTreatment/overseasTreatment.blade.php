@extends('frontEnd.layout.master')
@section('title')
    Overseas Treatment
@endsection
@section('content')
<!-- Start of contact area -->
<div id="contact" class="contact-area gray-bg ptb-100 bc-m">
            <div class="container">
                <div class="row">
                        <div class="all-contact-text">
                            <div class="row">
                                <div class="col-lg-6 bm-t">
                                    <h4 class="book-an-appointment-h">Overseas Treatment</h4>
                                </div>
                                <div class="col-lg-12 cirtual-m">
                                    <h5>Accessing World-Class Healthcare Beyond Borders</h5><br>
                                    <p class="cirtual-p">
                                        CureWays specializes in facilitating overseas treatment,
                                        offering individuals the opportunity to access world-class
                                        healthcare services globally. We understand that some
                                        medical conditions require specialized expertise or
                                        advanced treatment options that may not be readily
                                        available in their home country. Our comprehensive
                                        Overseas Treatment program aims to connect patients
                                        with renowned medical institutions abroad, ensuring
                                        they receive the best possible care and treatment.<br>

                                    <h5>Standard Operating Procedure (SOP) for Overseas Treatment:</h5><br>

                                    <h5>Initial Assessment and Consultation:</h5><br>
                                    <b>a.</b> Contact our Overseas Treatment team to discuss your medical
                                    condition, treatment requirements, and preferences.<br>
                                    <b>b.</b> Provide relevant medical reports and diagnostic information
                                    to aid in the assessment process.<br><br>

                                    <h5>Medical Evaluation and Recommendations:</h5><br>
                                    <b>a.</b> Our team of medical experts reviews your case, considering
                                    your unique needs and treatment options.<br>
                                    <b>b.</b> We collaborate with renowned healthcare institutions abroad
                                    to obtain expert opinions and personalized treatment plans.<br><br>

                                    <h5>Treatment Proposal and Cost Estimate:</h5><br>
                                    <b>a.</b> Based on the medical evaluation, we provide you with a
                                    detailed treatment proposal, including recommended healthcare providers,
                                    treatment options, and estimated costs.<br>
                                    <b>b.</b> We ensure transparency and discuss the available financing
                                    options and payment procedures.<br><br>

                                    <h5>Travel and Logistics:</h5><br>
                                    <b>a.</b> Once you approve the treatment plan, we assist with travel
                                    arrangements, including flights, accommodation, and transportation.<br>
                                    <b>b.</b> Our team provides guidance on visa requirements, necessary
                                    documentation, and any additional logistics involved.<br><br>

                                    <h5>Appointments and Treatment:</h5><br>
                                    <b>a.</b> We coordinate with the chosen healthcare facility to secure
                                    appointments and arrange for your admission.<br>
                                    <b>b.</b> Throughout your treatment journey, our team remains in contact,
                                    ensuring seamless communication between you, the healthcare providers,
                                    and any necessary caregivers.<br><br>

                                    <h5>Post-Treatment Follow-up:</h5><br>
                                    <b>a.</b> After completion of the treatment, we facilitate post-treatment
                                    consultations, if required.<br>
                                    <b>b.</b> We assist with medical reports, discharge summaries, and follow-up
                                    care instructions for continued treatment in your home country, if
                                    applicable.<br>

                                    Our Overseas Treatment program is designed to provide you with comprehensive
                                    support and guidance throughout the entire process. We understand that
                                    seeking treatment abroad can be a significant decision, and we strive
                                    to make it as smooth and comfortable as possible.<br><br>

                                    Our Overseas Treatment program is designed to provide you with comprehensive
                                    support and guidance throughout the entire process. We understand that
                                    seeking treatment abroad can be a significant decision, and we strive
                                    to make it as smooth and comfortable as possible.<br><br>
                                    </p>
                                </div>
                                
                                <div class="container">
                                    <form action="{{route('save_overseasTreatment')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <select class="sb-input form-control mb-3" name="division_id" id="select1">
                                                    <option value="">Select District<p class="am-c">*</p></option>
                                                    @foreach ($divisions as $division)
                                                        <option value="{{$division->id}}" >{{$division->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <select class="sb-input  form-control mb-3" name="police_station_id" id="select22">
                                                    <option value="" data-section1="1">Select Police Station<p class="am-c">*</p></option>
                                                    @foreach ($policeStation as $policeStations)
                                                        <option value="{{$policeStations->id}}" >{{$policeStations->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <select class="sb-input  form-control mb-3" name="area_id" id="select3">
                                                    <option value="1">Select Area<p class="text-danger am-c">*</p></option>
                                                    @foreach ($area as $areas)
                                                        <option value="{{$areas->id}}" >{{$areas->name}}</option>
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