@include('partials._header')
<x-breadcrumb :items="[['name' => 'Home', 'route' => route('welcome')], ['name' => 'Contact Us', 'route' => route('contact')]]"></x-breadcrumb>

<div class="col-lg-8 mx-auto">
    <div class="row">
        <div class="col-12">
            <div class="m-5">
                <h1>We’d love to hear from you.</h1>
            </div>
            <div class="row ">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80440.95762307056!2d2.9470127972656335!3d50.9462829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c335bceb4d0467%3A0xa4ec8ad74209fbc5!2sSyntra%20West!5e0!3m2!1spt-PT!2sbe!4v1682516957813!5m2!1spt-PT!2sbe"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class=" container ">
                <div class="row m-5">
                    <div class="col-4">
                        <h4>Practical Information</h4>
                    </div>
                    <div class="col-8">
                        <p>Messenger bag raw denim health goth pour-over, twee Neutra Vice ethical bespoke. Irony
                            hashtag mixtape kogi blog you probably haven’t heard of them, fashion axe readymade
                            scenester flexitarian. Ugh bespoke actually vinyl photo booth tattooed paleo Pinterest
                            Schlitz. Cronut hella selfies, flexitarian sriracha keffiyeh Intelligentsia biodiesel.</p>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="col-4">
                        <h4></h4>
                    </div>
                    <div class="col-8">
                        <div>
                            <p>Telephone: <a href="tel:+32 468123456""> +32 468123456<br></p>
                            <a href="mailto: abc@example.com">hello@example.com</a>
                            </a>
                            <p>Oostnieuwkerksesteenweg 111,<br> Roeselare 8800 Belgium<br>
                                Monday to Friday: 10am to 7pm</p>
                        </div>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="col-4">
                        <h4>Our team</h4>
                    </div>
                    <div class="col-8">
                        <form action="{{ route('send.mail') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col form-floating">
                                    <input type="text" class="form-control" placeholder="Name" aria-label="name"
                                        name="name" value="">
                                    <label class="mx-3" for="name">Name</label>
                                </div>
                                <div class="col form-floating">
                                    <input type="email" class="form-control" placeholder="Email Address"
                                        aria-label="email" name="email" value="">
                                    <label class="mx-3" for="email">Email</label>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"
                                        name="message" value=""></textarea>
                                    <label class="mx-3" for="floatingTextarea2">Message</label>
                                </div>
                            </div>
                            <button class="btn" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials._footer')
