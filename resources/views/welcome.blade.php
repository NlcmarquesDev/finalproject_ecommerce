@include('partials._header')

<livewire:slider />

<!--CONTENT -->
<div>
    <section id="products" class="container d-flex justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <img id="imgLamp" src="{{ asset('imagens/Lighting/Cast_Sconce_Wall_Lamp_left.png') }}" alt="cast lamp" />

            </div>
            <div id="articleslamp" class="col-12 col-lg-4 d-flex flex-column justify-content-center mb-5 mb-md-0">
                <div class="d-flex align-items-center">
                    <div class="bolicon"><i class="bi bi-lightbulb icon"></i></div>
                    <div>
                        <h4>Industrial Design</h4>
                        <p class="pfont">
                            Geometric forms rendered in <br />
                            industrial, cast aluminum.
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center my-md-5">
                    <div class="bolicon">
                        <i class="bi bi-box-arrow-in-up icon"></i>
                    </div>
                    <div class="mt-3">
                        <h4>Sophisticated Built</h4>
                        <p class="pfont">
                            Pleasant, glare-free illumination <br />
                            delivered via sculptural fixtures.
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="bolicon"><i class="bi bi-eyedropper icon"></i></div>
                    <div>
                        <h4>Superb Finish</h4>
                        <p class="pfont">
                            Cast aluminum with a smooth, warm <br />
                            and tactile finish.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!--END CONTENT -->

<!--CONTENT PUBLICITY -->
<section id="pubCont" class="d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h4 class="gold">CONNECTED SPACES</h4>
                <h2 class="my-5">Redefine how we use space</h2>
                <p class="fw-lighter">
                    Top designers and craftspeople around the world to create
                    contemporary furniture, lighting and <br />
                    accessories that are clean, clever and natural.
                </p>
            </div>
        </div>
    </div>

</section>
<!--END CONTENT VIDEO -->

@include('components.productsfooter')

<!--RETURN POLICY-->
@include('partials.return-policy')
<!--END RETURN POLICY -->

<!--NEWSLETTER AND DISCOUNT-->
@include('partials.newsletter')



@include('partials._footer')
