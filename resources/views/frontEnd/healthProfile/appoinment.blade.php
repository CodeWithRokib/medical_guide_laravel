@extends('frontEnd.layout.master')
@section('title')
    Doctor Appoinment
@endsection
@section('content')
    <div id="contact" class="contact-area gray-bg ptb-100 bc-m">
        <div class="container am-t">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ambulance-img">
                        <img class="ambulance-img" src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="all-contact-text">
                    <div class="row">
                        <div class="col-lg-6 bm-t">
                            <h4 class="book-an-appointment-h"> Book Now</h4>
                        </div>
                        {{-- @error('date')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror --}}
                        <form id="" action="{{ route('booknow') }}" method="POST" class="col-lg-12 col-12">
                            @csrf
                            <div class="col-md-12 col-12">
                                <div class="main-contact">
                                    <select name="doctor_slot_id" id="doctor_slot_id" required
                                        class="sb-input book-select form-control @error('doctor_slot_id') is-invalid @enderror">
                                        <option value="">Available Slot </option>
                                        @if (!blank($slots))
                                            @foreach ($slots as $slot)
                                                <option value="{{ $slot->id }}">
                                                    {{ date('h:i A', strtotime($slot->slot_from)) }} -
                                                    {{ date('h:i A', strtotime($slot->slot_to)) }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('doctor_slot_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 col-12">
                                <div class="main-contact">
                                    <select name="type" id=""
                                        class="sb-input book-select form-control @error('type') is-invalid @enderror">
                                        <option value="">Patient Type</option>
                                        @foreach (trans('patientType') as $key => $val)
                                            <option value="{{ $key }}">{{ $val }}</option>
                                        @endforeach
                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="main-contact">
                                    <input name="name"
                                        class="form-control input-book  @error('name') is-invalid @enderror" type="text"
                                        required="" placeholder="Enter Your Name">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="main-contact">
                                    <input name="phone" class="form-control input-book  @error('phone') is-invalid @enderror" type="text" required=""
                                        placeholder="Enter Your Phone">
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="main-contact">
                                    <input name="age" class="form-control input-book @error('age') is-invalid @enderror" type="text" required=""
                                        placeholder="Enter Your Age">
                                    @error('age')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="main-contact">
                                    <input name="weight" class="form-control input-book" type="text"
                                        placeholder="Enter Your weight">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="main-contact contact-mrgn">
                                    <input name="location" class="form-control input-book" type="text"
                                        placeholder="Enter Your Location">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="tnm-textarea">
                                    <select name="gender" id="" class="sb-input book-select form-control @error('gender') is-invalid @enderror">
                                        <option value="">Gender</option>
                                    @foreach (trans('gender') as $key => $val)
                                        <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                                    </select>
                                    @error('gender')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                     @enderror
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
