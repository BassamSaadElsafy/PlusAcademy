@include('uk.layouts.header')
    <!--Start up-header-->
<section class="up-header">
  <div class="container-fluid">
     <div class="row">
         <div class="col-7">
             <ul class="list-unstyled">
                 <li class="eemail mr-2">
                     <i class="far fa-envelope"></i>
                     <a href="mailto:PlusAcademy@gmail.com">PlusAcademy@gmail.com</a>
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

   <!-- Start header  -->
   <header>
       <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#">
                <h2 class="text-white">PlusAcademy</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                  <a class="nav-link activee" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('cheak') }}">Cirtification</a>
                      <a class="dropdown-item" href="{{ route('pages') }}">FAQ</a>
                    </div>

                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
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
          <div class="header-content">

            @include('uk.layouts.message')

            <div class="onep sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">
                Welcome Everyone in PlusAcademy
            </div>
          </div>
          <h1 class="twop wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">WITH US YOU GET THE BEST AND THE MOST PROFESSIONAL TRAINING PROGRAMMES</h1>
       </div>
   </header>
   <!-- end header  -->
 <section class="cards">
    <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 mb-3">
              <div class="cars-cont text-center">
                  <div>
                      <img src="{{ url('uk/') }}/img/1.png" alt="">
                      <h2>Future promising specialisations</h2>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-3">
              <div class="cars-cont text-center">
                  <div>
                      <img src="{{ url('uk/') }}/img/2.png" alt="">
                      <h2>Worldwide Trainees</h2>
                  </div>
              </div>
          </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="cars-cont text-center">
                  <div>
                      <img src="{{ url('uk/') }}/img/3.png" alt="">
                      <h2>Multiple areas</h2>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-3">
              <div class="cars-cont text-center">
                  <div>
                      <img src="{{ url('uk/') }}/img/4.png" alt="">
                      <h2>Trustworthy training programmes</h2>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </section>
  <!-- End Cards -->


 <!-- Ending features -->

 <!-- Starting About-->
  <section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
              <img src="{{ url('uk/') }}/img/12.jpg" class="img-fluid" alt="" srcset="">
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="about-us">
                <h4 class="sc">ABOUT US</h4>
                <h2>We drive trainees towards future careers</h2>
                <p>We are a training academy that provides training for future professional specialisations under the supervision of highly experienced trainers from all over the world. Training courses are provided to enhance the trainee???s skills and boost the professional level.</p>
                <div class="btn-part">
                    <a class="readon yellow-btn" href="{{ route('about') }}">Discover More</a>
                </div>
            </div>
            </div>
        </div>
    </div>
  </section>
 <!-- Ending About-->

<!-- Starting Path -->

   <div id="rs-categories" class="rs-categories home9-style event-bg pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title3 text-center mb-45">
            <div class="sub-title yellow-color">Choose Your Path</div>
            <h2 class="title black-color">Study With Us</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 md-mb-40">
                <div class="categories-items mb-4 mb-sm-0">
                    <div class="images-part">
                        <a href="#"><img src="{{ url('uk/') }}/img/11.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="image-content">
                       <div class="effect-icon">
                           <i class="fa fa-paperclip"></i>
                       </div>
                       <div class="title">
                           <a href="#">Online courses</a>
                       </div>
                       <div class="description">
                           <p>Arts, business?? science ?? design, and moer, begin your journey with a uk international academy</p>
                       </div>
                        <div class="button-bottom">
                            <div class="button-effect">
                                <a href="{{ route('contact') }}">Join Program</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 md-mb-40">
                <div class="categories-items mb-4 mb-sm-0">
                    <div class="images-part">
                        <a href="#"><img src="{{ url('uk/') }}/img/22.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="image-content">
                       <div class="effect-icon">
                           <i class="fa fa-graduation-cap"></i>
                       </div>
                       <div class="title">
                           <a href="#">Diploma programmes</a>
                       </div>
                       <div class="description">
                           <p>Motion Graphics?? design 3D??Digital marketing?? and moer begin your journey with a uk international academy.</p>
                       </div>
                        <div class="button-bottom">
                            <div class="button-effect">
                                <a href="{{ route('contact') }}">Join Program</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="categories-items">
                    <div class="images-part">
                        <a href="#"><img src="{{ url('uk/') }}/img/33.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="image-content">
                       <div class="effect-icon">
                           <i class="fa fa-laptop"></i>
                       </div>
                       <div class="title">
                           <a href="#">Training camps</a>
                       </div>
                       <div class="description">
                           <p>Programming??IT?? Information Security and moer begin your journey with a uk international academy.</p>
                       </div>
                        <div class="button-bottom">
                            <div class="button-effect">
                                <a href="{{ route('contact') }}">Join Program</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
<!-- End Path -->

<!-- Start Video -->

  <!-- Button trigger modal -->
  <section class="video">
      <div class="overlay">
        <div class="text-center">
            <button type="button" class="b-main btn " data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-play"></i>
              </button>
        </div>

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-large" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="closeX">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                    <div class="dsd embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vLnPwxZdW4Y" allowfullscreen></iframe>
                      </div>


                </div>

              </div>
            </div>
          </div>


      </div>

  </section>
  <!-- Modal -->
<!-- Start Covid -->
<section class="covid">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-12 details-covid">
            <div class="details-covid-son">
              <h4>Safety in our academy</h4>
              <h2 class="h1 text-white py-3">Covid-19 continuous updates</h2>
              <p class="text-white">Our Academy follows the highest techniques to deal with the global epidemic (Covid-19) with constant concern for social distancing and implementation of health regulations.</p>
           </div>
        </div>

    <div class="col-lg-6 col-12 display-covid-none">
     </div>

    </div>
   </div>
</section>
<!-- End Covid -->
<!--  Start Education -->
<section class="education">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 img-education-conatiner ">
                <img src="{{ url('uk/') }}/img/2.jpg" class="img-fluid" alt="" srcset="">
            </div>

            <div class="col-md-6 col-12">
             <div class="edu-left-part">
                <div class="mb-5">
                  <img src="{{ url('uk/') }}/img/mark.png" alt="" srcset="">
                </div>
                <p>
                I
enrolled in the PlusAcademy and learned new things that helped me discover new information and helped me in my job

                </p>
              <h2 class="font-weight-bold miro">Michael Robinson</h2>
              <h3>an Artificial Intelligence (AI) trainee</h3>
            </div>
         </div>
        </div>

        </div>
       </div>
</section>
<!--  end Education -->

<i class="fa fa-chevron-up hidden" aria-hidden="true" ></i>


<!-- Start mySubscribe  -->
<section class="mySubscribe">
    <div class="container mySubscribe-son">
        <div class="row">
          <div class="col-md-6 mySubscribe-left text-center text-md-left">
              <img src="{{ url('uk/') }}/img/newsletter2.png" width="43" class="mr-3" alt="" srcset="">
              <span class="h2 wc">Contact Us</span>
            </div>
         <div class="col-md-6">
            <div class="">

            <form action="{{ route('sendEmail') }}" method="post">
                @csrf
                <div class="input-group mb-2 mySubscribe-input">
                  <input type="email" name="email" class="form-control" id="inlineFormInputGroup" placeholder="Enter your email address">
                  <div class="input-group-prepend">
                    <button type="submit" class="input-group-text">Submit</button>
                  </div>
                </div>

            </form>



              </div>

         </div>

         </div>
        </div>
    </div>
</section>
<!-- End Subscribe  -->

@include('uk.layouts.footer')
