@extends('front.layout.main3')
@section('content')

<div class="theme-page padding-bottom-66">
    <div class="row gray full-width page-header vertical-align-table">
        <div class="row full-width padding-top-bottom-50 vertical-align-cell">
            <div class="row">
                <div class="page-header-left">
                    <h1>CONTACT US</h1>
                </div>
                <div class="page-header-right">
                    <div class="bread-crumb-container">
                        <label>You Are Here:</label>
                        <ul class="bread-crumb">
                            <li>
                                <a title="HOME" href="?page=home">
                                    HOME
                                </a>
                            </li>
                            <li class="separator">
                                &#47;
                            </li>
                            <li>
                                CONTACT US
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row margin-top-70">
        <div class="column column-1-3 re-smart-column">
            <div class="re-smart-column-wrapper">
                <h4 class="box-header">CONTACT DETAILS</h4>
                <ul class="features-list page-margin-top clearfix">
                    <li class="sl-small-location">
                        <p>{{Layout::getSeting()->addres}}</p>
                    </li>
                    <li class="sl-small-phone">
             
                        <p>Phone:<br> {{Layout::getSeting()->phone}}</p>
                    </li>
                    <li class="sl-small-mail">
                        <p>E-mail:<br>{{Layout::getSeting()->email}}</p>
                    </li>
                    <li class="sl-small-clock">
                        <p>Monday - Friday: 08.00 - 17.00<br>Saturday: 09.00 - 12.00</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="column column-2-3">
            <div class="contact-map" id="map"></div>
            <h3 class="box-header page-margin-top">DROP US A LINE</h3>
            <form class="contact-form page-margin-top" id="contact-form" method="post" action="contact_form/contact_form.php">
                <div class="row">
                    <fieldset class="column column-1-2">
                        <input class="text-input" name="name" type="text" value="Your Name *" placeholder="Your Name *">
                        <input class="text-input" name="email" type="text" value="Your Email *" placeholder="Your Email *">
                        <input class="text-input" name="phone" type="text" value="Your Phone" placeholder="Your Phone">
                    </fieldset>
                    <fieldset class="column column-1-2">
                        <textarea name="message" placeholder="Message *">Message *</textarea>
                    </fieldset>
                </div>
                <div class="row margin-top-30">
                    <div class="column column-1-2">
                        <p class="description t1">We will contact you within one business day.</p>
                    </div>
                    <div class="column column-1-2 align-right">
                        <input type="hidden" name="action" value="contact_form" />
                        <input type="submit" name="submit" value="SEND MESSAGE" class="more active">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>  

  <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANJ-ZPa3Ed_x31GnCV5KRvux0S370yPGU&callback=initMap"
  type="text/javascript"></script>

@endsection

