
<hr />

<div class="py-5">
    <div class="container-fluid">

    <div class="row">
        <div class="col-sm-3 d-flex flex-column align-items-center">
            <h5 class="text-dark">Get started</h5>
            <a href="{{route('welcome')}}" class="pfont" >Home</a>
            <a href="{{route('home')}}" class="pfont my-2" >Sign up</a>
            <a href="#" class="pfont" >Downloads</a>
        </div>
        <div class="col-sm-3 d-flex flex-column align-items-center">
            <h5 class="text-dark">About us</h5>
            <a href="{{route('about')}}" class="pfont" >Company Information</a>
            <a href="{{route('contact')}}" class="pfont my-2" >Contact us</a>
            <a href="#" class="pfont" >Reviews</a>
        </div>
        <div class="col-sm-3 d-flex flex-column align-items-center">
            <h5 class="text-dark" >Support</h5>
            <a href="{{route('faq')}}" class="pfont" >FAQ</a>
            <a href="#" class="pfont my-2" >Help desk</a>
            <a href="#" class="pfont" >Forums</a>
        </div>
        <div class="col-sm-3 info">
            <h5 class="text-dark">Information</h5>
            <p class="text-muted"> Lorem ipsum dolor amet, consectetur adipiscing elit. Etiam consectetur aliquet aliquet. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
        </div>
    </div>
    </div>
</div>


<div class="py-5 ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">

                <!-- Copyright -->
                <p class="ms-5 small text-muted">
                    © 2023 All rights reserved. Designed by Nuno Marques.
                </p>

            </div>
            <div class="col-sm-4 iconfooter text-center">
                <a href="#"><i class="bi bi-instagram navicon m-2"></i></a>
                <a href="#"><i class="bi bi-facebook navicon m-2"></i></a>
                <a href="#"><i class="bi bi-pinterest navicon m-2"></i></a>
                <a href="#"><i class="bi bi-youtube navicon m-2"></i></a>
            </div>

            <div class="col-sm-4 text-center">

                <!-- Payment methods -->
                <img class="footer-payment small" src="{{asset('imagens/mastercard.svg')}}" alt="...">
                <img class="footer-payment" src="{{asset('imagens/visa.svg')}}" alt="...">
                <img class="footer-payment" src="{{asset('imagens/american-express.svg')}}" alt="...">
                <img class="footer-payment" src="{{asset('imagens/paypal.svg')}}" alt="...">
                <img class="footer-payment" src="{{asset('imagens/maestro-card.svg')}}" alt="...">
            </div>
        </div>
    </div>
</div>
</section>
<!--END NEWSLETTER AND DISCOUNT-->


<script
    src="https://kit.fontawesome.com/e644b18eb6.js"
    crossorigin="anonymous"
></script>
{{--<script--}}
{{--    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"--}}
{{--    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"--}}
{{--    crossorigin="anonymous"--}}
{{--></script>--}}
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
