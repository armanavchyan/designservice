<!DOCTYPE html>
<html lang="en">

@include('front.layout.main_head1')

<body class="royal_preloader">
    <div id="page" class="site">

        @include('front.layout.main_header1')

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                        <div class="contact-left">
                            <h2>Get in Touch</h2>
                            <p class="font14">Your email address will not be published. Required fields are marked *</p>
                            <form id="ajax-form" name="ajax-form" action="" method="post" class="wpcf7">
                                <div class="main-form">
                                    <p>
                                        <label for="name"> <span class="error" id="err-name">please enter name</span></label>
                                        <input type="text" name="name" value="" size="40" class="" aria-invalid="false" placeholder="Your Name *" required>
                                    </p>
                                    <p>
                                        <label for="email">
                                            <span class="error" id="err-email">please enter e-mail</span>
                                            <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                        </label>
                                        <input type="email" name="email" id="email" value="" size="40" class="" aria-invalid="false" placeholder="Your Email *" required>
                                    </p>
                                    <p>
                                        <label for="phone">
                                
                                        </label>
                                        <input type="phone" name="phone" id="phone" value="" size="40" class="" aria-invalid="false" placeholder="Your Phone" >
                                    </p>
                                    <p>
                                        <label for="message"></label>
                                        <textarea name="message" id="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Message..." required></textarea>
                                    </p>
                                    <p><button type="submit" id="send" class="octf-btn">Send Message</button></p>
                                    <div class="clear"></div>
                                    <div class="error" id="err-form">There was a problem validating the form please check!</div>
                                    <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                    <div class="error" id="err-state"></div>
                                </div>
                            </form>

                            <div class="clear"></div>
                            <div id="ajaxsuccess">Successfully sent!!</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <div class="ot-heading">
                                <h2 class="main-heading">CONTACT US</h2>
                            </div>
                            <p>Give us a call or drop by anytime, we endeavour to
                                answer all enquiries within 24 hours on business
                                days. We will be happy to answer your questions.</p>
                            <div class="contact-info">
                                <i class="ot-flaticon-place"></i>
                                <div class="info-text">
                                    <h6>OUR ADDRESS:</h6>
                                    <p>{{Layout::getSeting()->addres}}</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <i class="ot-flaticon-mail"></i>
                                <div class="info-text">
                                    <h6>OUR MAILBOX:</h6>
                                    <p><a href="{{Layout::getSeting()->email}}">E-mail:<br>{{Layout::getSeting()->email}}</a></p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <i class="ot-flaticon-phone-call"></i>
                                <div class="info-text">
                                    <h6>OUR PHONE:</h6>
                                    <p><a href="{{Layout::getSeting()->phone}}">{{Layout::getSeting()->phone}}</a></p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <i class="ot-flaticon-info"></i>
                                <div class="info-text">
                                    <h6>WE ARE WORKING:</h6>
                                    <p>Monday - Friday: 08.00 - 17.00<br>Saturday: 09.00 - 12.00</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        

        <div class="contact-map" style="margin-top:-45px ;">
           
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9929.788831953334!2d-0.2932113604492411!3d51.523356899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487611fea54506a5%3A0xe073c0a1f803201b!2sThe%20Rug%20Company%20Warehouse!5e0!3m2!1sen!2s!4v1666884418689!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>




    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mb-12 mb-lg-12">
                    <p class="text-center">Copyright © 2022 ARMBUILD by </p>
                </div>
            </div>
        </div>
    </div>




    <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
    <!-- jQuery -->
    @include('front.layout.jQuery')
</body>

</html>