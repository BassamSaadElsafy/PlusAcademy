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
                      <a href="tel:01009840873"> (+20) 100-9840-873</a>
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
        @include('uk.layouts.navbar')

        <!-- end Nav -->

        <section class="contact">
            <div class="container">
                <div class="row mb-5 ">
                    <div class="col-12 col-lg-4 information  mb-4 mb-lg-0">
                        <div class="content py-5 px-4 text-left d-block d-lg-flex px-lg-3  ">
                            <div class="icon-part mr-lg-3 pb-3 pb-lg-0"><span><ion-icon name="location-outline"></ion-icon></span></div>
                            <div class="content-part">
                                <h4 class="mb-lg-2">Address</h4>
                                <h6 class="m-lg-0">70 makramEbaid,nasrcity,cairo</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 information  mb-4 mb-lg-0">
                        <div class="content py-5 px-4 text-left d-block d-lg-flex px-lg-3 ">
                            <div class="icon-part mr-lg-3 pb-3 pb-lg-0"><span><ion-icon name="mail-outline"></ion-icon></span></div>
                            <div class="content-part">
                                <h4 class="mb-lg-2">Email Address</h4>
                                <h6 class="m-lg-0">PlusAcademy@gmail.com</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 information ">
                        <div class="content py-5 px-4 text-left d-block d-lg-flex px-lg-3 ">
                            <div class="icon-part mr-lg-3 pb-3 pb-lg-0"><span><ion-icon name="person-outline"></ion-icon></span></div>
                            <div class="content-part">
                                <h4 class="mb-lg-2">Telephone Number</h4>
                                <h6 class="m-lg-0"> (+20) 100-9840-873</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-5"></div>
                    <div class="col-12 col-md-7">

                        @include('uk.layouts.message')

                        <form class="p-5" action="{{ route('sendContact') }}" method="POST">
                            @csrf
                            <div class="heading mb-4">
                                <h2>Get In Touch</h2>
                                <p>Have some suggestions or just want to say hi? Our support team are ready to help you 24/7.</p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 mb-4">
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Name">
                                </div>
                                <div class="col-12 col-sm-6 mb-4">
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                                </div>
                                <div class="col-12 col-sm-6 mb-4">
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone">
                                </div>
                                <div class="col-12 col-sm-6 mb-4">
                                    <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Subject">
                                </div>
                                <div class="col-12 mb-4">
                                    <textarea placeholder="Message" name="message" value="{{ old('message') }}" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


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
