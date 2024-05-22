<section class="footer-area">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="footer-widget">                    
                      {{--  <img src="{{asset('frontend/images/logo2.png')}}" alt="" width="110px"><br>  --}}
                       <p class='position-relative'>{!!$key[45]->val??''!!} 
                  	<button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(45,'textarea')">
                        <span class="edit-icon"></span>
                    </button>
                  </p>
                    <div class="social hidden-sm">
                        <h3>Socialize With Us</h3>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100092170517780"><i class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="icofont-whatsapp"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="icofont-instagram"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="icofont-youtube-play"></i></a></li>
                        </ul>
                      
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="{{ url('/') }}"><i class="icofont-rounded-right"></i> Home</a></li>
                        <li><a href="{{ route('who-we-are') }}"><i class="icofont-rounded-right"></i> Who we are</a></li> 
                        <li><a href="{{ route('frontend.blogs') }}"><i class="icofont-rounded-right"></i> Blog</a></li>
                        <li><a href="{{ route('contact-us') }}"><i class="icofont-rounded-right"></i> Contact</a></li> 
                       <li><a href="{{ route('contact-us') }}"><i class="icofont-rounded-right"></i> Apply Now</a></li> 
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Services We Offer</h2>
                    <ul class="mb-3">
                        <li><a href="{{route('home.green_card')}}"><i class="icofont-rounded-right"></i> USA EB-3 Green Card Program</a></li>  
                        <li><a href="{{route('home.visa.processing')}}"><i class="icofont-rounded-right"></i> Visa Processing</a></li> 
                    </ul>
                  <a href="https://info.flagcounter.com/P4qW"><img src="https://s01.flagcounter.com/count/P4qW/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_12/viewers_0/labels_1/pageviews_1/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Location</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14607.769762615166!2d90.4029133!3d23.7494319!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8901f75d849%3A0x626312a0b0d2a650!2sBAFFESCO!5e0!3m2!1sen!2sbd!4v1698460163253!5m2!1sen!2sbd" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                </div>
            </div>

        </div><!-- Row close -->
    </div><!-- Container close -->


    <div class="container">
        <div class="row">
            <div class="col-md-12"><div class="footer-border"></div></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="copyright">
                    &copy; 2023 BSM - All Right Reserved
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="developer text-right">
                    <p>Developed By <a href="https://thezoomit.com"><img src="{{asset('frontend/images/Zoom-IT.png')}}" style="display:inline-block; width:80px" alt="ZOOM IT"></a></p>
                </div>
            </div>
        </div>
    </div>
</section>