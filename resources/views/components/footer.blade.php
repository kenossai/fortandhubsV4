<footer class="bg-blck">
    <div class="main-footer section-padding">
        <div class="call-action pb-50 mb-50 bord-thin-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="cont">
                            <h2>Let’s start your Project <span class="bg-img"
                                    data-background="assets/imgs/call-action/0.jpg"></span></h2>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center justify-content-end">
                        <a href="home-design-studio.html#0"
                            class="butn-circle butn-light d-flex align-items-center justify-content-center text-center">
                            <div>
                                <span class="text fw-700 mb-15">Get In Touch</span>
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="36"
                                    viewBox="0 0 37 36" fill="none">
                                    <path
                                        d="M1 35L34.2929 1.70711C34.9229 1.07714 36 1.52331 36 2.41421V21.5H29.5"
                                        stroke="#fff" stroke-width="2"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-items">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="logo mb-40 icon-img-100">
                                <img src="assets/imgs/Logo-1.png" alt="">
                            </div>
                            <div class="social-text sub-font fw-700">
                                <a href="home-design-studio.html#0">
                                    <i class="fab fa-facebook-f"></i>
                                    Facebook
                                </a>
                                <a href="home-design-studio.html#0">
                                    <i class="fab fa-instagram"></i>
                                    Instagram
                                </a>
                                <a href="home-design-studio.html#0">
                                    <i class="fab fa-pinterest-p"></i>
                                    Pinterest
                                </a>
                                <a href="home-design-studio.html#0">
                                    <i class="fab fa-dribbble"></i>
                                    Dribbble
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <div class="links">
                            <div class="ftitle mb-15">
                                <h6 class="fw-700">More Services</h6>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="rest sub-font">
                                        <li>
                                            <a href="home-design-studio.html#0">Corporate Business</a>
                                        </li>
                                        <li>
                                            <a href="home-design-studio.html#0">SEO Agency</a>
                                        </li>
                                        <li>
                                            <a href="home-design-studio.html#0">Company Report</a>
                                        </li>
                                        <li>
                                            <a href="home-design-studio.html#0">Marketing</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="rest sub-font">
                                        <li>
                                            <a href="home-design-studio.html#0">About us</a>
                                        </li>
                                        <li>
                                            <a href="home-design-studio.html#0">Case Studies</a>
                                        </li>
                                        <li>
                                            <a href="home-design-studio.html#0">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="home-design-studio.html#0">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="subscribe">
                            <div class="ftitle mb-30">
                                <h6 class="fw-700">Subscribe</h6>
                            </div>
                            <div class="text">
                                <p>United States 866 Wilshire, 2nd Street Los Angeles 90024.</p>
                            </div>
                            <form action="{{ route('subscribe') }}" method="POST">
                                @csrf
                                @if(session('success'))
                                    <div class="alert alert-success mt-2">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="form-item mt-30 sub-font">
                                    <input type="email" placeholder="Enter your email address..."
                                        name="email">
                                        <button type="submit" style="background: none; border: none; padding: 0; margin-left: -30px;">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12L11.2929 1.70711C11.9229 1.07714 13 1.52331 13 2.41421V7.37143L11.1207 5.49217"
                                                    stroke="white" stroke-width="2" />
                                            </svg>
                                        </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="text">
                        <p class="fz-14">© 2024 <span class="text-light">Goncy</span>. All Rights Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 d-flex justify-content-end">
                    <div class="slink fz-14">
                        <a href="home-design-studio.html#0">
                            <span class="text">Privacy & Cookie Policy</span>
                        </a>
                        <a href="home-design-studio.html#0">
                            <span class="text">Terms of Services</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="paterns">
        <div class="tringle"></div>
        <div class="circle"></div>
        <div class="logo-img">
            <img src="assets/imgs/vector-img/Logo.svg" alt="">
        </div>
    </div>
</footer>
