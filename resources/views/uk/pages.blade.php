@include('uk.layouts.header')

<!-- Start up-header  -->
    <section class="up-header">
        <div class="container-fluid">
           <div class="row">
               <div class="col-7">
                   <ul class="list-unstyled">
                       <li class="eemail mr-2">
                           <i class="far fa-envelope"></i>
                           <a href="mailto:support@rstheme.com">PlusAcademy@gmail.com</a>
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

        @include('uk.layouts.navbar')

        <!-- end Nav -->




        <!-- start questions show -->
        <section class="questions first mt-4">
            <div class="container">
                <div class="heading mt-5 mb-3">
                    <h3 class="h1">FAQs</h3>
                </div>
                <div class="cardCollapse mb-3 active">
                    <div class="header" data-id="1">
                        What is the PlusAcademy for Professional Training?
                    </div>
                    <div class="body">
                    It is a training academy that provides training for future professional specialisations under the supervision of highly experienced trainers from all over the world. Training courses are provided to enhance the trainee’s skills and boost the professional level.
                    </div>
                </div>
                <div class="cardCollapse mb-3">
                    <div class="header" data-id="2">
                       What are the specialisations provided by the academy?
                    </div>
                    <div class="body">
                       All professional specialisations that help in developing and building the capabilities of trainees.
                    </div>
                </div>
                <div class="cardCollapse ">
                    <div class="header" data-id="3">
                        What are the requirements to enroll in the Academy?
                    </div>
                    <div class="body">
                    <ul>
                    <li>The applicant must be at least 16+ years old,</li>
                    <li>A valid passport</li>
                    <li>Personal information (name, address, phone number).</li>
                       </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="questions first mt-3">
            <div class="container">
                <div class="cardCollapse mb-3">
                    <div class="header" data-id="1">
                        Are all training programs provided by the Academy?
                    </div>
                    <div class="body">
                       The Academy provides some of its own training programs, and there is cooperation with locally and internationally accredited educational institutions under the supervision of the Academy.
                    </div>
                </div>
                <div class="cardCollapse mb-3">
                    <div class="header" data-id="2">
                        In which languages are the training programs provided?
                    </div>
                    <div class="body">
                        It depends on the training program.
                    </div>
                </div>
                <div class="cardCollapse ">
                    <div class="header" data-id="3">
                        Will the trainee obtain a certificate after completing the training program?
                    </div>
                    <div class="body">
                        Yes, but some training programs have conditions that the trainee must fulfill (attendance rate, exams, graduation project).
                    </div>
                </div>
            </div>
        </section>
        <section class="questions first mt-3">
            <div class="container">
                <div class="cardCollapse mb-3">
                    <div class="header" data-id="1">
                        Can the trainee enroll in more than one training program at the same time?
                    </div>
                    <div class="body">
                   Yes, this is possible if the schedule of the training programs is not inconsistent.
                    </div>
                </div>
                <div class="cardCollapse mb-3">
                    <div class="header" data-id="2">
                        Is there a specific time to complete a training program?
                    </div>
                    <div class="body">
                       It depends on the training program.
                    </div>
                </div>
                <div class="cardCollapse ">
                    <div class="header" data-id="3">
                         Are the certificates provided by the Academy accredited?
                    </div>
                    <div class="body">
                    Yes, all certificates are internationally accredited by the Academy.
                    </div>
                </div>
            </div>
        </section>
        <section class="questions first mt-3">
            <div class="container">
                <div class="cardCollapse mb-3">
                    <div class="header" data-id="1">
                        If the trainee name is wrong, how can I correct it?
                    </div>
                    <div class="body">
                        All our information is confirmed, but in case there is an error, the name can be corrected by contacting us.
                    </div>
                </div>
            </div>
        </section>
        <!-- end questions show -->

        <!-- Start mySubscribe  -->
<section class="mySubscribe mt-5">
    <div class="container mySubscribe-son">
        <div class="row">
          <div class="col-md-6 mySubscribe-left text-center text-md-left">
              <img src="{{ url('uk/') }}/img/newsletter2.png" width="43" class="mr-3" alt="" srcset="">
              <span class="h2 wc">Subscribe to our newsletter</span>
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



<script src="{{ url('uk/') }}/js/pages.js"></script>
@include('uk.layouts.footer')
