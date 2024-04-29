@extends('frontEnd.layout.master')
@section('title')
    Ambulance
@endsection
@section('content')
<!-- Start of contact area -->
<div id="contact" class="contact-area gray-bg ptb-100 bc-m">
            <!--  Start ambulance-->
            <div class="container am-t">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ambulance-img">
                            <img class="ambulance-img" src="{{asset('frontEndAsset')}}/images/ambulance/1.png" alt="">
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
                                    <h4 class="book-an-appointment-h">Ambulance</h4>
                                </div>

                                <div class="col-lg-12 cirtual-m">
                                    <h5>Swift and Reliable Emergency Medical Assistance</h5><br>
                                    <p class="cirtual-p">
                                        CureWays provides a professional and efficient Ambulance
                                        Service to ensure prompt medical care during emergencies. O
                                        ur dedicated team of trained paramedics and state-of-the-art
                                        ambulances are equipped to handle critical situations and
                                        transport patients safely to healthcare facilities. With
                                        our Ambulance Service, we prioritize your well-being and
                                        strive to deliver swift and reliable medical assistance
                                        when you need it the most.<br>

                                    <h5>Standard Operating Procedure (SOP) for Ambulance Service:</h5><br>

                                    <h5>Emergency Call:</h5><br>
                                    <b>a.</b> Dial our designated emergency helpline number to request
                                    an ambulance.<br>
                                    <b>b.</b> Provide essential information about the emergency situation,
                                    including the location, nature of the medical condition, and any
                                    specific requirements or instructions.<br><br>

                                    <h5>Dispatch and Response:</h5><br>
                                    <b>a.</b> Our emergency response team promptly dispatches the nearest
                                    available ambulance equipped with advanced life-support systems and
                                    medical equipment.<br>
                                    <b>b.</b> The team coordinates with the caller to gather additional
                                    details, assess the severity of the situation, and provide initial
                                    medical guidance, if applicable.<br><br>

                                    <h5>On-site Medical Assistance:</h5><br>
                                    <b>a.</b> The ambulance arrives at the location and our trained
                                    paramedics promptly assess and stabilize the patient.<br>
                                    <b>b.</b> Depending on the medical condition, necessary medical
                                    interventions are initiated, including first aid, administering
                                    medications, and cardiac life support.<br><br>

                                    <h5>Patient Transportation:</h5><br>
                                    <b>a.</b> Our skilled paramedics carefully transfer the patient
                                    to the ambulance, ensuring their comfort and safety throughout
                                    the process.<br>
                                    <b>b.</b> Medical equipment and monitoring devices are used to
                                    continuously assess and monitor vital signs during transportation<br><br>

                                    <h5>Communication and Coordination:</h5><br>
                                    <b>a.</b> The ambulance team maintains constant communication with
                                    the healthcare facility to inform them about the patient's condition
                                    and estimated time of arrival.<br>
                                    <b>b.</b> Updates are provided to the patient's family or emergency
                                    contacts, ensuring transparency and reassurance during the transport
                                    process.<br><br>

                                    <h5>Safe Handover at Healthcare Facility:</h5><br>
                                    <b>a.</b> The ambulance team coordinates with the receiving healthcare
                                    facility to ensure a smooth handover of the patient.<br>
                                    <b>b.</b> Relevant medical information and documentation are handed
                                    over to the healthcare professionals for seamless continuation of
                                    medical care.<br>

                                    Our Ambulance Service follows stringent protocols and adheres to
                                    all safety and medical standards to provide timely and effective
                                    emergency medical assistance. We understand the critical nature
                                    of emergencies and prioritize swift response and expert care to
                                    enhance the chances of positive outcomes<br><br>

                                    Contact our dedicated emergency helpline to access our reliable
                                    Ambulance Service and rest assured that you will receive
                                    professional medical assistance during times of emergencies.<br><br>
                                    </p>
                                </div>

                                <div class="container">
                                    <form action="{{route('save_ambulance')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <select class="sb-input form-control mb-3" name="division_id" id="select1">
                                                    <option>Select District<p class="am-c">*</p></option>
                                                    @foreach($divisions as $division)
                                                        <option value="{{$division->id}}">{{$division->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <select class="sb-input  form-control mb-3" name="police_station_id" id="select21">
                                                    <option value="" data-section1="1">Select Police Station<p class="am-c">*</p></option>
                                                    @foreach($policeStation as $policeStations)
                                                        <option value="{{$policeStations->id}}">{{$policeStations->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <select class="sb-input  form-control mb-3" name="area_id" id="select3">
                                                    <option value="1">Select Area<p class="text-danger am-c">*</p></option>
                                                        @foreach($area as $areas)
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
        <!-- End of contact area -->
@endsection