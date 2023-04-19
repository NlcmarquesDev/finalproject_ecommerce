
<hr />
<div
    id="contentfooter"
    class="d-md-flex justify-content-around align-items-center"
>
    <div class="text-center">
        <a class="navbar-brand" href="{{route('welcome')}}">
            <img
                src="{{asset('imagens/Logo.png')}}"
                alt="Nuno Marques"
                width="51"
                height="50"
            />
        </a>
    </div>
    <div class="text-center m-2">
        <a href="#products" class="indexfooter p-1">Products</a>
        <a href="#about" class="indexfooter p-1">About us</a>
        <a href="#faq" class="indexfooter p-1">FAQ's</a>
        <a href="#contact" class="indexfooter p-1">Contact us</a>
    </div>
    <div class="iconfooter text-center">
        <a href="#"><i class="bi bi-instagram navicon m-2"></i></a>
        <a href="#"><i class="bi bi-facebook navicon m-2"></i></a>
        <a href="#"><i class="bi bi-pinterest navicon m-2"></i></a>
        <a href="#"><i class="bi bi-youtube navicon m-2"></i></a>
    </div>
</div>
<div class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <!-- Copyright -->
                <p class="ms-5 small text-muted">
                    © 2023 All rights reserved. Designed by Nuno Marques.
                </p>

            </div>
            <div class="col-auto me-5">

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
