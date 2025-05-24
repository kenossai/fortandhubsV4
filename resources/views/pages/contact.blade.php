<x-app-layout title="Contact Us">
    <!-- ==================== Start google-map ==================== -->

                <div class="google-map position-re">
                    <iframe id="gmap_canvas"
                        src="https://maps.google.com/maps?q=hollwood&t=&z=11&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                    <div class="shadow-circle">
                        <img src="assets/imgs/vector-img/shadow-circle.svg" alt="">
                    </div>
                </div>

                <!-- ==================== End google-map ==================== -->



                <!-- ==================== Start Contact Section ==================== -->

                <section class="contact section-padding">
                    <div class="container">
                        <div class="lg-bold-head text-center gray mb-80">
                            <h2 class="sub-font">
                                C<span class="inline">O<span class="icon"><img src="assets/imgs/vector-img/Vector.svg"
                                            alt=""></span></span>NTACT US
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="info md-mb80">
                                    <div class="sec-head mb-40">
                                        <h6 class="mb-15 fw-400">// Contact Us</h6>
                                        <h3 class="fw-700">Get Started and grow your business now.</h3>
                                        <p class="fz-22 fw-300 mt-15">Phasellus in turpis maximus, iaculis orci eget, elementum libero.</p>
                                    </div>
                                    <div class="list-arrow">
                                        <ul class="rest">
                                            <li class="mb-15"><i class="pe-7s-phone icon"></i> +55 (9900) 666 22</li>
                                            <li class="mb-15"><i class="pe-7s-mail icon"></i>info.mirpur@gmail.com</li>
                                            <li><i class="pe-7s-map-marker icon"></i>Mirpur 12, Block C, Dhaka, BD.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="sec-head mb-40">
                                    <h6 class="mb-15 fw-400">// Get In Touch</h6>
                                    <h3 class="fw-700">Get Started and grow your business now.</h3>
                                </div>
                                <form id="contact-form" method="post" action="contact.htm">

                                    <div class="messages"></div>

                                    <div class="controls row">

                                        <div class="col-lg-6">
                                            <div class="form-group mb-30">
                                                <label for="">Your Name</label>
                                                <input id="form_name" type="text" name="name"
                                                    placeholder="Enter Your Name" required="required">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group mb-30">
                                                <label for="">Your Mail</label>
                                                <input id="form_email" type="email" name="email"
                                                    placeholder="infoflex@info.com" required="required">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Mssage</label>
                                                <textarea id="form_message" name="message"
                                                    placeholder="Write your message" rows="4"
                                                    required="required"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="text-info mt-15">
                                        <p class="fz-14">* Call us 24/7 or fill out the form below to receive a free.
                                        </p>
                                    </div>
                                    <div class="mt-50">
                                        <button type="submit" class="d-flex align-items-center">
                                            <span class="text">Post Comment</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="36"
                                                viewBox="0 0 37 36" fill="none">
                                                <path
                                                    d="M1 35L34.2929 1.70711C34.9229 1.07714 36 1.52331 36 2.41421V21.5H29.5"
                                                    stroke="#fff" stroke-width="2"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Contact Section ==================== -->

</x-app-layout>
