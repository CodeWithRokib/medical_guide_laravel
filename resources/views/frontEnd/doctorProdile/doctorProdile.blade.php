@extends('frontEnd.layout.master')
@section('title')
    Doctor Profile
@endsection
@section('content')
<!-- Start of contact area -->
<section>
            <!--  Start ambulance-->
            <div class="container am-t">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="doctor-profile-img">
                            <img src="{{asset('frontEndAsset')}}/images/doctor profile/profile.PNG" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--  End ambulance-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="doctor-profile-h">Description</h2>
                       <div class="col-lg-12 display-flex">
                           <div class="col-lg-6 doctor-profile-d">
                               <h3>Dr. Md. Harun - Or - Rashid</h3>
                               <p><b>Qualifications:</b> MD(PHYSICAL MEDICINE), FCPS(PHYSICAL MEDICINE)</p>
                               <p><b>Specialty: </b> medicine& Rehabilitation</p>
                               <p><b>Designation: </b>Consultant</p>
                           </div>
                           <div class="col-lg-6">
                               <p><b>Institute: </b> Salimullah Medical College & Mitford Hospital</p>
                               <p> <b>Department Name: </b> medicine</p>
                               <p><b>Appointment: </b>: +88-02-7763164-68; Mobile: +88-01730599171-74</p>
                               <p><b>Chamber Time: </b>:600 PM-9:00 PM</p>
                               <p> <b>Off Day: </b>Friday</p>
                           </div>
                       </div>
                    </div>
            </div>
        </div>
        </section>
    <!-- End of contact area -->
@endsection