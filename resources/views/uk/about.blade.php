<!DOCTYPE html>
@include('uk.layouts.header')
    <!-- Start up-header  -->
    <section class="up-header">
      <div class="container-fluid">
         <div class="row">
             <div class="col-7">
                 <ul class="list-unstyled">
                     <li class="eemail mr-2">
                         <i class="far fa-envelope"></i>
                         <a href="mailto:support@uipt.org.uk">PlusAcademy@gmail.com</a>
                     </li>
                     <li class="">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>70 makramEbaid,nasrcity,cairo</span>
                    </li>

                 </ul>
             </div>

             <div class="col-5">
                <ul class="list-unstyled text-sm-right">
                    <li class="login">
                        <i class="fas fa-sign-in-alt"></i>
                        <a href="{{ route('login') }}">login</a>
                    </li>
                    <li class="apply">
                       <a href="{{ route('contact') }}">apply now</a>
                   </li>
                   <li class="">
                    <i class="fas fa-phone-volume"></i>
                    <a href="#">(+20) 100-9840-873</a>
                </li>
                </ul>
             </div>

            </div>
      </div>
    </section>
        <!-- End up-header  -->


      <!-- start modal -->
      <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="timess">
            <i class="fas fa-times" data-dismiss="modal"></i>
        </div>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="search her">
                  </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end modal -->

      <!-- start Nav -->
      <nav class="navbar navbar-expand-lg px-lg-5 navbar-light py-lg-3 aboutNav ">

        <h2 class="text text-primary">PlusAcademy</h2>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
          </button>

          <div class="collapse  navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-5 mr-auto ">
              <li class="nav-item">
                <a class="nav-link px-lg-3 py-3 py-lg-0" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link px-lg-3 py-3 py-lg-0 activee" href="{{ route('about') }}">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link px-lg-3 py-3 py-lg-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('cheak') }}">Cirtification</a>
                  <a class="dropdown-item" href="{{ route('pages') }}">FAQ</a>
                </div>
            </li>


              <li class="nav-item">
                <a class="nav-link px-lg-3 py-3 py-lg-0" href="{{ route('contact') }}">Contact Us</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <i class="fas fa-search" data-toggle="modal" data-target="#searchModal"></i>
 <!-- Test -->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="timess">
      <i class="fas fa-times" data-dismiss="modal"></i>
  </div>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <div class="form-group">
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="search her">
            </div>
      </div>
    </div>
  </div>
</div>
 <!-- Test -->
          </form>
          </div>
        </nav>
      <!-- end Nav -->

        <!-- start About -->
        <section class="resAbout">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-6 order-lg-2 mb-4 img">
                <img class="img-fluid " src="{{ url('uk/') }}/img/about2orange.png" alt="About Image">
              </div>
              <div class="col-12 col-lg-6 order-lg-1 info">
                <h4>ABOUT US</h4>
                <h2 class="mb-3 font-weight-bold">About the PlusAcademy for professional  Training</h2>
                <b class="mb-4 d-block font-weight-bold">The PlusAcademy for Professional Training is specialised in professional educational and developmental training, and raising the competencies required for the labor market</b>
                <p>Welcome to the PlusAcademy for Professional Training. We seek to develop our trainees in all specializations by international trainers and systems that raise the competencies required in the labor market, as well as academic development of some specialisations in the academy. We understand the quality needed in professions and training, so we are keen to enhance our trainees to graduate in the best form and reach their goals.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- end About -->
        <!-- start counter -->
        <section class="counters">
          <div class="container py-5">
            <div class="row">
              <div class="col-12 mb-4 mb-md-0 col-md-4 text-center counter counter1">
                <div class="img">
                  <img class="img-fluid" src="{{ url('uk/') }}/img/counter1.png" alt="counter Image">
                </div>
                <div class="counter-text" id="counters_1">
                  <h2 class="font-weight-bold counter-heading" data-TargetNum="1000">0</h2>
                  <h4 class="font-weight-bold">Students</h4>
                </div>
              </div>
              <div class="col-12 mb-4 mb-md-0 col-md-4 text-center counter counter2">
                <div class="img">
                  <img class="img-fluid" src="{{ url('uk/') }}/img/counter2.png" alt="counter Image">
                </div>
                <div class="counter-text" id="counters_2">
                  <h2 class="font-weight-bold counter-heading" data-TargetNum="40" >0</h2>
                  <h4 class="font-weight-bold">Instructors</h4>
                </div>
              </div>
              <div class="col-12 col-md-4 text-center counter counter3">
                <div class="img">
                  <img class="img-fluid" src="{{ url('uk/') }}/img/counter3.png" alt="counter Image">
                </div>
                <div class="counter-text" id="counters_3">
                  <h2 class="font-weight-bold counter-heading" data-TargetNum="55" >0</h2>
                 <h4 class="font-weight-bold">Courses</h4>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end counter -->
        <!-- start information show -->
        <section class="information py-4">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-6 changeInfo">
                <div class="img">
                  <img src="{{ url('uk/') }}/img/history.png" alt="" class="img-fluid">
                </div>
                <ul class="mt-4">
                  <li data-tap="1" class="mb-3 mb-xl-4 d-flex justify-content-center align-items-center active text-center">
                    <span>
                      <ion-icon name="cash-outline"></ion-icon>
                      <h4 class="m-0">Training Quality</h4>
                    </span>
                  </li>
                  <li data-tap="2" class="mb-3 mb-xl-4 d-flex justify-content-center align-items-center text-center">
                    <span>
                      <ion-icon name="rose-outline"></ion-icon>
                      <h4 class="m-0">Our vision</h4>
                    </span>
                  </li>
                  <li data-tap="3" class="text-center d-flex justify-content-center align-items-center">
                    <span>
                      <ion-icon name="analytics-outline"></ion-icon>
                      <h4 class="m-0">Administration</h4>
                    </span>
                  </li>
                </ul>
              </div>
              <div class="col-12 mt-5 mt-lg-0 col-lg-6 tabs" id="tabs">
                <h3 class="mb-4 mb-lg-3">Training Quality</h3>
                <p>We, in the PlusAcademy for Professional Training, are keen to provide our trainees with the high-quality training, diplomas and camps by highly experienced trainers, which help the trainees extract several graduation projects that test their competence and be evaluated with high-quality standards..</p>
                <img src="{{ url('uk/') }}/img/tab1.jpg" class="img-fluid mt-3 mt-lg-0" alt="">

              </div>
            </div>
          </div>
        </section>
        <!-- end information show -->
        <!-- start slider -->
        <div class="slider pb-5">
          <div class="container py-5">
            <div class="heading text-center mb-5">
              <h5>STUDENT REVIEWS</h5>
              <h3 class="font-weight-bold">What Our Students Says</h3>
            </div>
            <div class="swiper-container pb-5">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide slide">
                    <div class="row">
                      <div class="col-12 userInfo">
                        <img class="mb-4" src="{{ url('uk/') }}/img/avatar.png" alt="">
                        <p class="name mb-3">Nora Talaat</p>
                        <p class="job mb-2">Student</p>
                        <span>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                        </span>
                      </div>
                      <div class="col-12 desc">
                        The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide slide">
                    <div class="row">
                      <div class="col-12 userInfo">
                        <img class="mb-4" src="{{ url('uk/') }}/img/avatar.png" alt="">
                        <p class="name mb-3">Ali Mohammed</p>
                        <p class="job mb-2">Student</p>
                        <span>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                        </span>
                      </div>
                      <div class="col-12 desc">
                        The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide slide">
                    <div class="row">
                      <div class="col-12 userInfo">
                        <img class="mb-4" src="{{ url('uk/') }}/img/avatar.png" alt="">
                        <p class="name mb-3">Saiko Najran</p>
                        <p class="job mb-2">Student</p>
                        <span>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                        </span>
                      </div>
                      <div class="col-12 desc">
                        The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide slide">
                    <div class="row">
                      <div class="col-12 userInfo">
                        <img class="mb-4" src="{{ url('uk/') }}/img/avatar.png" alt="">
                        <p class="name mb-3">Saiko Najran</p>
                        <p class="job mb-2">Student</p>
                        <span>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                        </span>
                      </div>
                      <div class="col-12 desc">
                        The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide slide">
                    <div class="row">
                      <div class="col-12 userInfo">
                        <img class="mb-4" src="{{ url('uk/') }}/img/avatar.png" alt="">
                        <p class="name mb-3">Saiko Najran</p>
                        <p class="job mb-2">Student</p>
                        <span>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                        </span>
                      </div>
                      <div class="col-12 desc">
                        The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide slide">
                    <div class="row">
                      <div class="col-12 userInfo">
                        <img class="mb-4" src="{{ url('uk/') }}/img/avatar.png" alt="">
                        <p class="name mb-3">Saiko Najran</p>
                        <p class="job mb-2">Student</p>
                        <span>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                        </span>
                      </div>
                      <div class="col-12 desc">
                        The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide slide">
                    <div class="row">
                      <div class="col-12 userInfo">
                        <img class="mb-4" src="{{ url('uk/') }}/img/avatar.png" alt="">
                        <p class="name mb-3">Saiko Najran</p>
                        <p class="job mb-2">Student</p>
                        <span>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                        </span>
                      </div>
                      <div class="col-12 desc">
                        The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide slide">
                    <div class="row">
                      <div class="col-12 userInfo">
                        <img class="mb-4" src="{{ url('uk/') }}/img/avatar.png" alt="">
                        <p class="name mb-3">Saiko Najran</p>
                        <p class="job mb-2">Student</p>
                        <span>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                        </span>
                      </div>
                      <div class="col-12 desc">
                        The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.
                      </div>
                    </div>
                  </div>

                  ...
              </div>
              <!-- If we need pagination -->
            </div>

          </div>
        </div>
        <!-- end slider -->
        <!-- Start mySubscribe  -->
          <section class="mySubscribe aboutSub">
            <div class="container mySubscribe-son">
                <div class="row">
                  <div class="col-md-6 mySubscribe-left text-center text-md-left">
                  <img src="{{ url('uk/') }}/img/newsletter2.png" width="43" class="mr-3" alt="" srcset="">
                      <span class="h2 wc">Contact Us</span>
                    </div>
                <div class="col-md-6">
                    <div class="">
                    <div class="input-group mb-2 mySubscribe-input">
                          <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="Enter your email address">
                          <div class="input-group-prepend">
                            <button class="input-group-text">Submit</button>
                          </div>
                        </div>
                      </div>

                </div>

                </div>
                </div>
            </div>
          </section>
<!-- End Subscribe  -->



@include('uk.layouts.footer')
