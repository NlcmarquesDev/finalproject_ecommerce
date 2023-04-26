@include('partials._header')
<x-breadcrumb :items="[ ['name' => 'Home', 'route' => route('welcome')], ['name' => 'About Us', 'route' => route('about')],]"></x-breadcrumb>

<div class="col-lg-8 mx-auto">
    <div class="row">
    <div class="col-12">
        <div class="m-5">
            <h1>Our story so far.</h1>
        </div>
        <div class="row ">
            <div style=" min-height:410px; max-width:100%; background:url(https://savoy.nordicmade.com/wp-content/uploads/2015/08/about.jpg) no-repeat; ">
            </div>
        </div>
        <div class=" container ">
            <div class="row m-5">
                <div class="col-2">
                    <h4>The Brand</h4>
                </div>
                <div class="col-10">
                    <p>Messenger bag raw denim health goth pour-over, twee Neutra Vice ethical bespoke. Irony hashtag mixtape kogi blog you probably haven’t heard of them, fashion axe readymade scenester flexitarian. Ugh bespoke actually vinyl photo booth tattooed paleo Pinterest Schlitz. Cronut hella selfies, flexitarian sriracha keffiyeh Intelligentsia biodiesel.</p>
                    <br>
                    <p>Ethical sustainable gastropub chillwave. Gentrify semiotics cold-pressed, narwhal hashtag cardigan artisan swag kale chips raw denim wolf tilde. High Life brunch stumptown salvia, Godard readymade scenester flexitarian.</p>
                </div>
            </div>
            <div class="row m-5">
                <div class="col-2">
                    <h4>Contact Us</h4>
                </div>
                <div class="col-10">
                    <div>
                        <p>Telephone: 703.172.3412<br>
                            <a href="#">hello@example.com</a></p>
                        <p>Van Spartan #73, 1081 Amsterdam, Netherlands<br>
                            Monday to Friday: 10am to 7pm</p>
                    </div>
                </div>
            </div>
            <div class="row m-5">
                <div class="col-2">
                    <h4>Our team</h4>
                </div>
                <div class="col-10">
                    <div class="boximg">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                        <img
                                            src="{{asset('imagens/myself.png')}}"
                                            alt="Nuno Marques"
                                            class="img-fluid"
                                            style=" max-width:300px; max-height:300px; background-size: cover;"
                                        />
                                </div>
                                <div class="flip-box-back d-flex justify-content-center align-items-center bg-theme">
                                    <i class="bi bi-instagram socialicon"></i>
                                    <i class="bi bi-facebook socialicon"></i>
                                    <i class="bi bi-pinterest socialicon"></i>
                                    <i class="bi bi-youtube socialicon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('partials._footer')
