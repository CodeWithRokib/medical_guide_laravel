@extends('frontEnd.layout.master')
@section('title')
    Medicine
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
                                    <h4 class="book-an-appointment-h">Medicine</h4>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="container">
                                        <div class="row">
                                          <div class="col-lg-12">
                                              <div class="medicine">
                                                  <ul class="nav-res nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                      <li class="nav-li nav-item" role="presentation">
                                                          <button class="nav-button medi-btn nav-link active" id="main-pills-home-tab" data-bs-toggle="pill" data-bs-target="#main-pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Pharma Product</button>
                                                      </li>
                                                      <li class="nav-li nav-item" role="presentation">
                                                          <button class="nav-button medi-btn nav-link" id="main-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#main-pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Herbal & Nutraceuticals Product</button>
                                                      </li>
                                                      <li class="nav-li nav-item" role="presentation">
                                                          <button class="nav-button medi-btn nav-link" id="main-pills-contact-tab" data-bs-toggle="pill" data-bs-target="#main-pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">AgroVet & Pesticides Product</button>
                                                      </li>
                                                  </ul>
                                                  <div class="tab-content" id="pills-tabContent">
                                                      <div class="tab-pane fade show active" id="main-pills-home" role="tabpanel" aria-labelledby="main-pills-home-tab" tabindex="0">
                                                          <div class="col-md-12 col-12">
                                                              <div class="medicine-alphabet">
                                                                  <div class="alphabet">
                                                                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link active" id="pills-home-tab-sub-1" data-bs-toggle="pill" data-bs-target="#pills-home-sub-1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">A</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-2" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-2" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">B</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-3" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-2" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">C</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-4" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-4" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">D</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-5" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-5" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">E</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-6" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-6" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">F</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-7" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-7" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">G</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-8" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-8" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">H</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-9" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-9" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">I</button>
                                                                         </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-10" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-10" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">J</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                               <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-11" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-11" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">K</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-12" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-12" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">M</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-13" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-13" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">N</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-14" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-14" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">O</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-15" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-15" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">P</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-16" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-16" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Q</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-17" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-17" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">R</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                               <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-18" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-18" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">S</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-19" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-19" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">T</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-20" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-20" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">U</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-21" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-21" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">V</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-22" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-22" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">W</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-23" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-23" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">X</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-24" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-24" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Y</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-sub-25" data-bs-toggle="pill" data-bs-target="#pills-tab-sub-25" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Z</button>
                                                                          </li>
                                                                      </ul>
                                                                      <dic class="container">
                                                                          <div class="row">
                                                                              <div class="col-md-12 col-12">
                                                                                  <div class="tab-content" id="pills-tabContent">
                                                                                      <div class="tab-pane fade show active" id="pills-home-sub-1" role="tabpanel" aria-labelledby="pills-home-tab-sub-1" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                     <div class="md-cart">
                                                                                                         <p>Amlaki rashayan</p>
                                                                                                         <div class="card">
                                                                                                             <div class="card-body medi-cart">
                                                                                                                 <div class="card-img">
                                                                                                                     <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                 </div>
                                                                                                                 <div class="card-text">
                                                                                                                     <h4>AmCivit®</h4>
                                                                                                                     <p>Herval & Nutracueticals</p>
                                                                                                                     <a href="medicine details.html">Fine More</a>
                                                                                                                 </div>
                                                                                                             </div>
                                                                                                         </div>
                                                                                                     </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-2" role="tabpanel" aria-labelledby="pills-profile-tab-sub-2" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-3" role="tabpanel" aria-labelledby="pills-profile-tab-sub-3" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-4" role="tabpanel" aria-labelledby="pills-profile-tab-sub-4" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-5" role="tabpanel" aria-labelledby="pills-profile-tab-sub-5" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-6" role="tabpanel" aria-labelledby="pills-profile-tab-sub-6" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-7" role="tabpanel" aria-labelledby="pills-profile-tab-sub-7" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-8" role="tabpanel" aria-labelledby="pills-profile-tab-sub-8" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-9" role="tabpanel" aria-labelledby="pills-profile-tab-sub-9" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-10" role="tabpanel" aria-labelledby="pills-profile-tab-sub-10" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="{{asset('frontEndAsset')}}/images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-11" role="tabpanel" aria-labelledby="pills-profile-tab-sub-11" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-12" role="tabpanel" aria-labelledby="pills-profile-tab-sub-12" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-13" role="tabpanel" aria-labelledby="pills-profile-tab-sub-13" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-14" role="tabpanel" aria-labelledby="pills-profile-tab-sub-14" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-15" role="tabpanel" aria-labelledby="pills-profile-tab-sub-15" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-16" role="tabpanel" aria-labelledby="pills-profile-tab-sub-16" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-17" role="tabpanel" aria-labelledby="pills-profile-tab-sub-17" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-18" role="tabpanel" aria-labelledby="pills-profile-tab-sub-18" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-19" role="tabpanel" aria-labelledby="pills-profile-tab-sub-19" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-20" role="tabpanel" aria-labelledby="pills-profile-tab-sub-20" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-21" role="tabpanel" aria-labelledby="pills-profile-tab-sub-21" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-22" role="tabpanel" aria-labelledby="pills-profile-tab-sub-22" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-23" role="tabpanel" aria-labelledby="pills-profile-tab-sub-23" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-24" role="tabpanel" aria-labelledby="pills-profile-tab-sub-24" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-sub-25" role="tabpanel" aria-labelledby="pills-profile-tab-sub-25" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                      </dic>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="tab-pane fade show " id="main-pills-profile" role="tabpanel" aria-labelledby="main-pills-profile-tab" tabindex="0">
                                                          <div class="col-md-12 col-12">
                                                              <div class="medicine-alphabet">
                                                                  <div class="alphabet">
                                                                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link active" id="pills-home-tab-1-sub-1" data-bs-toggle="pill" data-bs-target="#pills-home-1-sub-1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">A</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-2" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-2" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">B</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-3" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-2" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">C</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-4" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-4" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">D</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-5" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-5" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">E</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-6" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-6" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">F</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-7" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-7" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">G</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-8" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-8" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">H</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-9" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-9" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">I</button>
                                                                         </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-10" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-10" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">J</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                               <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-11" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-11" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">K</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-12" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-12" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">M</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-13" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-13" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">N</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-14" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-14" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">O</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-15" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-15" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">P</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-16" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-16" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Q</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-17" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-17" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">R</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                               <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-18" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-18" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">S</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-19" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-19" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">T</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-20" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-20" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">U</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-21" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-21" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">V</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-22" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-22" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">W</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-23" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-23" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">X</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-24" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-24" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Y</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-1-sub-25" data-bs-toggle="pill" data-bs-target="#pills-tab-1-sub-25" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Z</button>
                                                                          </li>
                                                                      </ul>
                                                                      <dic class="container">
                                                                          <div class="row">
                                                                              <div class="col-md-12 col-12">
                                                                                  <div class="tab-content" id="pills-tabContent">
                                                                                      <div class="tab-pane fade show active" id="pills-home-1-sub-1" role="tabpanel" aria-labelledby="pills-home-tab-1-sub-1" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                     <div class="md-cart">
                                                                                                         <p>Amlaki rashayan</p>
                                                                                                         <div class="card">
                                                                                                             <div class="card-body medi-cart">
                                                                                                                 <div class="card-img">
                                                                                                                     <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                 </div>
                                                                                                                 <div class="card-text">
                                                                                                                     <h4>AmCivit®</h4>
                                                                                                                     <p>Herval & Nutracueticals</p>
                                                                                                                     <a href="medicine details.html">Fine More</a>
                                                                                                                 </div>
                                                                                                             </div>
                                                                                                         </div>
                                                                                                     </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-2" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-2" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-3" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-3" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-4" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-4" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-5" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-5" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-6" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-6" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-7" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-7" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-8" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-8" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-9" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-9" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-10" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-10" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-11" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-11" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-12" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-12" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-13" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-13" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-14" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-14" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-15" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-15" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-16" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-16" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-17" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-17" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-18" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-18" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-19" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-19" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-20" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-20" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-21" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-21" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-22" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-22" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-23" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-23" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-24" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-24" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-1-sub-25" role="tabpanel" aria-labelledby="pills-profile-tab-1-sub-25" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                      </dic>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="tab-pane fade show " id="main-pills-contact" role="tabpanel" aria-labelledby="main-pills-contact-tab" tabindex="0">
                                                          <div class="col-md-12 col-12">
                                                              <div class="medicine-alphabet">
                                                                  <div class="alphabet">
                                                                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link active" id="pills-home-tab-2-sub-1" data-bs-toggle="pill" data-bs-target="#pills-home-2-sub-1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">A</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-2" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-2" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">B</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-3" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-2" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">C</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-4" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-4" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">D</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-5" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-5" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">E</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-6" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-6" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">F</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-7" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-7" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">G</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-8" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-8" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">H</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-9" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-9" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">I</button>
                                                                         </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-10" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-10" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">J</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                               <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-11" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-11" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">K</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-12" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-12" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">M</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-13" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-13" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">N</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-14" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-14" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">O</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-15" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-15" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">P</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-16" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-16" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Q</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-17" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-17" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">R</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                               <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-18" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-18" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">S</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-19" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-19" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">T</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-20" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-20" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">U</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                                <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-21" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-21" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">V</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-22" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-22" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">W</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-23" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-23" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">X</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-24" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-24" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Y</button>
                                                                          </li>
                                                                          <li class="nav-item" role="presentation">
                                                                              <button class="medi-a medi-btn nav-link" id="pills-profile-tab-2-sub-25" data-bs-toggle="pill" data-bs-target="#pills-tab-2-sub-25" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Z</button>
                                                                          </li>
                                                                      </ul>
                                                                      <dic class="container">
                                                                          <div class="row">
                                                                              <div class="col-md-12 col-12">
                                                                                  <div class="tab-content" id="pills-tabContent">
                                                                                      <div class="tab-pane fade show active" id="pills-home-2-sub-1" role="tabpanel" aria-labelledby="pills-home-tab-2-sub-1" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                     <div class="md-cart">
                                                                                                         <p>Amlaki rashayan</p>
                                                                                                         <div class="card">
                                                                                                             <div class="card-body medi-cart">
                                                                                                                 <div class="card-img">
                                                                                                                     <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                 </div>
                                                                                                                 <div class="card-text">
                                                                                                                     <h4>AmCivit®</h4>
                                                                                                                     <p>Herval & Nutracueticals</p>
                                                                                                                     <a href="medicine details.html">Fine More</a>
                                                                                                                 </div>
                                                                                                             </div>
                                                                                                         </div>
                                                                                                     </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-2" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-2" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-3" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-3" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-4" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-4" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-5" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-5" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-6" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-6" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-7" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-7" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-8" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-8" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-9" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-9" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-10" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-10" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-11" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-11" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-12" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-12" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-13" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-13" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-14" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-14" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-15" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-15" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-16" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-16" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-17" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-17" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-18" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-18" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-19" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-19" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-20" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-20" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-21" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-21" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-22" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-22" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-23" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-23" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-24" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-24" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="tab-pane fade" id="pills-tab-2-sub-25" role="tabpanel" aria-labelledby="pills-profile-tab-2-sub-25" tabindex="0">
                                                                                          <div class="medi-cart">
                                                                                              <div class="col-md-12 display-flex">
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                                  <div class="col-md-4">
                                                                                                      <div class="md-cart">
                                                                                                          <p>Amlaki rashayan</p>
                                                                                                          <div class="card">
                                                                                                              <div class="card-body medi-cart">
                                                                                                                  <div class="card-img">
                                                                                                                      <img src="images/medicine/amcivit.PNG" alt="">
                                                                                                                  </div>
                                                                                                                  <div class="card-text">
                                                                                                                      <h4>AmCivit®</h4>
                                                                                                                      <p>Herval & Nutracueticals</p>
                                                                                                                      <a href="medicine details.html">Fine More</a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                      </dic>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
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
        <!-- Start of Footer area -->
@endsection