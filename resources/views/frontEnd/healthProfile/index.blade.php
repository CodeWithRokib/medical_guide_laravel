@extends('frontEnd.layout.master')
@section('title')
    Doctor Appoinment
@endsection
@section('content')
    <div id="contact" class="contact-area gray-bg ptb-100 bc-m">
        {{-- <div class="container am-t">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ambulance-img">
                        <img class="ambulance-img"
                            src="{{ asset('frontEndAsset') }}/images/Cure-Ways-Icons/Health profile.png" alt="">
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="all-contact-text">
                    <div class="row">
                        <div class="col-lg-6 bm-t">
                            <h4 class="book-an-appointment-h">Health Profile</h4>
                        </div>
                        {{-- <div class="col-lg-12">
                            <p>
                            <h4>About Doctor Appointment and How It Works</h4><br>

                            At CureWays, we offer a seamless and convenient way for
                            individuals to schedule doctor appointments, both domestically
                            and internationally. We understand that finding the right doctor
                            and booking appointments can be time-consuming and challenging,
                            especially when seeking specialized care or exploring medical
                            tourism options. Our streamlined process simplifies the entire
                            experience, ensuring that you receive the medical attention you
                            need efficiently and effectively.<br><br>

                            <b>Standard Operating Procedure (SOP) for Doctor Appointments:</b><br><br>

                            <h5>Request and Consultation:</h5><br>
                            a. Visit our website or contact our dedicated customer service
                            team to request a doctor's appointment.
                            b. Provide relevant information, including your medical history,
                            symptoms, and any specific preferences or requirements.<br><br>

                            <h5>Assessment and Recommendations:</h5><br>
                            a. Our experienced team reviews your request and assesses the
                            best available options based on your needs.
                            b. We provide you with personalized recommendations, including
                            information about suitable doctors, úmedical facilities, and
                            appointment availability.<br><br>

                            <h5>Appointment Confirmation:</h5><br>
                            a. Once you choose a preferred doctor and appointment time, we
                            coordinate with the healthcare provider to secure your appointment.
                            b. We confirm the appointment details and provide you with the
                            necessary information, including date, time, location, and any
                            specific instructions.<br><br>

                            <h5>Travel Assistance (if applicable):</h5><br>
                            a. For international appointments, we offer comprehensive travel
                            assistance services, including visa invitation letters, travel
                            arrangements, and accommodation recommendations.
                            b. We ensure that you have all the necessary information and support
                            for a smooth travel experience.<br><br>

                            <h5>Appointment Reminders:</h5><br>
                            a. We send you timely reminders about your upcoming appointment,
                            ensuring that you are well-prepared and informed.
                            b. Reminders may be sent via email, SMS, or through our dedicated
                            patient portal.<br><br>

                            <h5>Appointment Follow-up:</h5><br>
                            a. After your appointment, we follow up to gather feedback on your
                            experience and address any concerns or additional needs you may have.
                            b. We value your feedback and use it to continuously improve our
                            services and enhance the patient experience.<br><br>

                            At CureWays, we prioritize your convenience, comfort, and well-being
                            throughout the doctor appointment process. Our commitment to quality
                            healthcare and personalized service ensures that you receive the best
                            possible care, tailored to your unique requirements.<br><br>

                            Contact us today to schedule your doctor appointment and let us guide
                            you towards optimal health and well-being with our efficient and
                            reliable services.<br><br>
                            </p>
                        </div> --}}
                        @error('date')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <form id="" action="{{ route('health_profile_store') }}" method="POST" class="col-lg-12 col-12">
                            @csrf
                            <div class="col-md-12 col-12">
                                <div class="main-contact">
                                    <select name="gender" id="" class="sb-input book-select form-control">
                                        @foreach (trans('gender') as $key => $val)
                                         <option {{   $healthprofile->gender == $key ? 'selected' : null }} value="{{ $key  }}">{{ $val }}</option>
                                        @endforeach                                        
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-12 col-12">
                                <div class="main-contact">
                                    <input name="age" class="form-control input-book" type="text" required="" value="{{ $healthprofile ? $healthprofile->age : null }}"
                                        placeholder="age">
                                </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="main-contact">
                                    <input name="height" class="form-control input-book" type="text" required="" value="{{ $healthprofile ? $healthprofile->height : null }}"
                                        placeholder="Height">
                                </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="main-contact">
                                    <input name="weight" class="form-control input-book" type="text" required="" value="{{ $healthprofile ? $healthprofile->weight : null }}"
                                        placeholder="Weight">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="main-contact contact-mrgn">
                                    <input name="marital" class="form-control input-book" type="text" required="" value="{{ $healthprofile ? $healthprofile->marital : null }}"
                                        placeholder="Marital">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="main-contact contact-mrgn">
                                    <input name="weight" class="form-control input-book" type="text" required="" value="{{ $healthprofile ? $healthprofile->weight : null }}"
                                        placeholder="Weight">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="main-contact contact-mrgn">
                                    <input name="chief_complain" class="form-control input-book" type="text"  value="{{ $healthprofile ? $healthprofile->chief_complain : null }}"
                                        required="" placeholder="Chief Complain">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="main-contact contact-mrgn">
                                    <input name="prev_disease" class="form-control input-book" type="text" required=""  value="{{ $healthprofile ? $healthprofile->prev_disease : null }}"
                                        placeholder="Previous Disease">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="main-contact contact-mrgn">
                                    <input name="ot_history" class="form-control input-book" type="text" required="" value="{{ $healthprofile ? $healthprofile->ot_history : null }}"
                                        placeholder="OT History">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="main-contact contact-mrgn">
                                    <input name="medication" class="form-control input-book" type="text" required="" value="{{ $healthprofile ? $healthprofile->medication : null }}"
                                        placeholder="Medication">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="main-contact contact-mrgn">
                                    <input name="disabilities" class="form-control input-book" type="text" required="" value="{{ $healthprofile ? $healthprofile->disabilities : null }}"
                                        placeholder="Disabilities">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="main-contact contact-mrgn">
                                    <input name="test_result" class="form-control input-book" type="text" required="" value="{{ $healthprofile ? $healthprofile->test_result : null }}"
                                        placeholder="Test Result">
                                </div>
                            </div>
                            <div class="col-lg-4 sb-t">
                                <div class="submit">
                                    <input class="submit" type="submit" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });


        $(document).ready(function() {
            $('#specialist_id').on('change', function() {
                var specialist_id = $(this).val();

                $.ajax({
                    url: "{{ route('getdoctor') }}",
                    method: 'get',
                    data: {
                        specialist_id: specialist_id
                    },
                    success: function(data) {
                        console.log(data);
                        populateDependentSelectBox(data);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            });

            function populateDependentSelectBox(options) {
                $('#doctor_id').empty();
                for (var i = 0; i < options.length; i++) {
                    $('#doctor_id').append('<option value="' + options[i].id + '">' + options[i].name +
                        '</option>');
                }
            }
        });
    </script>
@endsection
