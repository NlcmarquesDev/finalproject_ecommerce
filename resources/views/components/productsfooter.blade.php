<!--PRODUCT SAMPLE -->
<section id="sampleProduct" class="container my-5">
    <div class="row d-flex justify-content-center">
        <div class="text-center">
            <p class="gold">O U T S T A N D I N G</p>
            <h2 class="fw-normal my-4"><small>Designer's Portfolio</small></h2>
            <p class="pfont">
                The Cast Lighting Series aesthetic presence rivals its versatility.
            </p>
        </div>
        <div class="d-flex flex-wrap justify-content-around align-items-center my-4">
            @foreach($products as $product)
            <div class="col-12 col-md-6  col-lg-4 ">
                <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none">
                    <div class="boximg">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img
                                        src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp')}}"
                                        alt="stone lamp"
                                        style="width: 300px; height: 300px"
                                    />
                                </div>
                                <div class="flip-box-back">
                                    <img
                                        src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp')}}"
                                        alt="Paris"
                                        style="width: 300px; height: 300px"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="frontpage-product">
                        <p class="pfont my-3 ">{{$product->name}}</p>
                        <p class="text-dark">{{$product->price}}</p>
                        <p class="text-dark">{{$product->id}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <a href="{{route('products')}}" class="btn">View All</a>
    </div>
</section>
<!--END PRODUCT SAMPLE -->
