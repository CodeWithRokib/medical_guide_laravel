@if(!blank($doctors))
<div id="team" class="team-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>meet our doctors</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod incidi. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="team-owl">
                    @foreach ($doctors as $doctor)
                    <div class="single-member">
                        <div class="member-img">
                            <img src="https://www.aucmed.edu/sites/g/files/krcnkv361/files/styles/atge_3_2_crop_md/public/2021-11/large-Smile-Guy-web.jpg?h=6b55786a&itok=Wy7cQpYS" alt="member">
                        </div>
                        <div class="member-content text-center">
                            <h3>{{ optional($doctor->user)->name }}</h3>
                            <p>{{ optional($doctor->specialist)->name }}</p>
                            <div class="doctor-btn">
                                <a href="{{ route('doctor_prodile') }}">Profile</a>
                                <a href="{{ route('doctor_appoinment') }}" class="">Appointment</a>
                            </div>
                            <span><i class="zmdi zmdi-plus"></i></span>
                            <span><i class="zmdi zmdi-minus"></i></span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif
