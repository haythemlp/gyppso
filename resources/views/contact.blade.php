@extends('layouts.app')

@section('content')
    <section class="probootstrap-slider flexslider">
        <ul class="slides">
            <li style="background-image: url(img/slider_1.jpg);" class="overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                                <h2>Contact</h2>
                                <p>Free HTML5 Template by <a href="https://uicookies.com/" target="_blank">uicookies.com</a>. Far far away, behind the word mountains, far from the countries.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <!-- END: slider  -->

    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 probootstrap-animate overlap">
                    <form action="{{route('contact.post')}}" method="post" class="probootstrap-form probootstrap-form-box mb60">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" required id="fname" name="fname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" required id="lname" name="lname">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" required name="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea cols="30" rows="10" class="form-control" required id="message" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id="submit" name="submit" >Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-md-push-1 probootstrap-animate">
                    <h4>Contact Details</h4>
                    <ul class="with-icon colored">
                        <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                        <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                        <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                    </ul>

                    <h4>Feedback</h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="#">Learn More</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->
    <div class="container mb50 probootstrap-animate">
        <div id="map"></div>
    </div>

    <section class="probootstrap-section probootstrap-section-lighter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-heading probootstrap-animate">
                    <h2>People Says...</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4  probootstrap-animate">
                    <div class="probootstrap-testimony">
                        <blockquote>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </blockquote>
                        <div class="author">
                            <img src="img/person_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by uicookies.com">
                            <div>John Doe <span>Designer at uicookies.com</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  probootstrap-animate">
                    <div class="probootstrap-testimony">
                        <blockquote>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </blockquote>
                        <div class="author">
                            <img src="img/person_2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by uicookies.com">
                            <div>John Doe <span>Designer at uicookies.com</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  probootstrap-animate">
                    <div class="probootstrap-testimony">
                        <blockquote>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </blockquote>
                        <div class="author">
                            <img src="img/person_3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Theme by uicookies.com">
                            <div>John Doe <span>Designer at uicookies.com</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACeW1ooRwl6rVsr_RDBpnaasGaalaz5jo&sensor=false"></script>
    <script src="{{asset('js/google-map.js')}}"></script>
    @endsection
