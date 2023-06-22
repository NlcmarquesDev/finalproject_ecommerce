<hr />

<div class="py-5">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-3 d-flex flex-column align-items-center py-3 py-lg-0">
                <h5 class="text-dark">Get started</h5>
                <a href="{{ route('welcome') }}" class="pfont">Home</a>
                <a href="{{ route('products') }}" class="pfont my-2">Products</a>
            </div>
            <div class="col-sm-3 d-flex flex-column align-items-center py-3 py-lg-0">
                <h5 class="text-dark">About us</h5>
                <a href="{{ route('about') }}" class="pfont">Company Information</a>
                <a href="{{ route('contact') }}" class="pfont my-2">Contact us</a>
            </div>
            <div class="col-sm-3 d-flex flex-column align-items-center py-3 py-lg-0">
                <h5 class="text-dark">Support</h5>
                <a href="{{ route('faq') }}" class="pfont">FAQ</a>
            </div>
            <div class="col-sm-3 info pt-3 pt-lg-0">
                <h5 class="text-dark">Information</h5>
                <p class="text-muted"> Lorem ipsum dolor amet, consectetur adipiscing elit. Etiam consectetur aliquet
                    aliquet. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
            </div>
        </div>
    </div>
</div>


<div class="py-lg-5 ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">

                <!-- Copyright -->
                <p class="ms-5 small text-muted">
                    © 2023 All rights reserved. Designed by Nuno Marques.
                </p>

            </div>
            <div class="col-sm-4 iconfooter text-center">
                @foreach ($socials as $social)
                    <a href="{{ $social->url }}"><i class="bi bi-{{ Str::lower($social->name) }} navicon m-2"></i></a>
                @endforeach
            </div>

            <div class="col-sm-4 text-center py-3 p-lg-0">

                <!-- Payment methods -->
                <img class="footer-payment small" src="{{ asset('imagens/mastercard.svg') }}" alt="...">
                <img class="footer-payment" src="{{ asset('imagens/visa.svg') }}" alt="...">
                <img class="footer-payment" src="{{ asset('imagens/american-express.svg') }}" alt="...">
                <img class="footer-payment" src="{{ asset('imagens/paypal.svg') }}" alt="...">
                <img class="footer-payment" src="{{ asset('imagens/maestro-card.svg') }}" alt="...">
            </div>
        </div>
    </div>
</div>
</section>
@livewireScripts
@include('sweetalert::alert')
<script>
    function openNav() {
        document.getElementById("mySidepanel").style.width = "100%";
        document.getElementById("mySidepanel").style.height = "100%";
    }

    /* Set the width of the sidebar to 0 (hide it) */
    function closeNav() {
        document.getElementById("mySidepanel").style.width = "0";
    }
</script>


<script src="https://kit.fontawesome.com/e644b18eb6.js" crossorigin="anonymous"></script>
{{-- <script --}}
{{--    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" --}}
{{--    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" --}}
{{--    crossorigin="anonymous" --}}
{{-- ></script> --}}

<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
