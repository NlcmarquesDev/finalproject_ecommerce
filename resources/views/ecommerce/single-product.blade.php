@include('partials._header')
<!--HERO -->
<div class="producDetail container-fluid bg-light">
    <div class="row">
        <!--Breadcrumb-->
        <x-breadcrumb :items="[ ['name' => 'Home', 'route' => route('welcome')], ['name' => 'Products', 'route' => route('products')], ['name' => 'Products Details', 'route' => route('single.product')]]"></x-breadcrumb>
        <div class="col-12 col-lg-10 offset-lg-1 my-4">
            <!---Product Image-->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 my-auto">
                        <div class="d-flex flex-column">
                            <div class="boximg mb-5">
                                <div class="flip-box mx-auto">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img
                                                src="{{$product->photos->first() ? asset($product->photos->first()->file) : 'http://via.placeholder.com/62x62'}}"
                                                alt="stone lamp"
                                                style="width: 300px; height: 300px"
                                            />
                                        </div>
                                        <div class="flip-box-back">
                                            <img
                                                src="{{$product->photos->first() ? asset( $product->photos->skip(1)->first()->file) : 'http://via.placeholder.com/62x62'}}"
                                                alt="stone lamp"
                                                style="width: 300px; height: 300px"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center gap-3">
                                <img
                                    src="{{$product->photos->first() ? asset( $product->photos->skip(1)->first()->file) : 'http://via.placeholder.com/62x62'}}"
                                    alt="stone lamp"
                                    style="width: 200px; height: 200px"
                                />  <img
                                    src="{{$product->photos->first() ? asset( $product->photos->first()->file) : 'http://via.placeholder.com/62x62'}}"
                                    alt="stone lamp"
                                    style="width: 200px; height: 200px"
                                />
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-4">
                        <header>
                            <h2>{{$product->name}}</h2>
                        </header>
                        <!---price and whishlist-->
                        <div
                            class="d-flex justify-content-between align-items-center my-3"
                        >
                            <p class="fs-5 my-auto">&euro; {{$product->price}}- &euro; {{$product->price +10}}</p>
                            <a href="" class="outline-none"
                            ><i class="bi bi-heart fs-4"></i
                                ></a>
                        </div>
                        <hr/>
                        <!---detail product-->
                        <p class="my-3 fs-5">{{$product->description}}</p>
                        <hr/>
                        <!---reviews star-->
                        <div class="d-flex align-items-center">
                            <div class="pe-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $product->rating)
                                        <i class="fa-solid fa-star"></i> <!-- Ícone de estrela preenchida -->
                                    @else
                                        <i class="fa-regular fa-star"></i> <!-- Ícone de estrela vazia -->
                                    @endif
                                @endfor
                            </div>
                            <p class="fs-5 ps-2 my-auto">Reviews</p>
                        </div>
                        <!---Size-->
                        @if($product->colors)
                        <div class="d-flex justify-content-between my-3">
                            <p class="fs-5 my-auto">Color</p>
                            <select class="rounded" name="" id="">
                                @foreach($product->colors as $color)
                                <option value="">{{$color->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif

                        <!---Size-->
                        <div class="d-flex justify-content-between my-3">
                            <p class="fs-5 my-auto">Size</p>
                            <select class="rounded" name="" id="">
                                <option value="">Size</option>
                                <option value="">Medium</option>
                                <option value="">Large</option>
                            </select>
                        </div>
                        <!---Quantity-->
                        <div class="d-flex justify-content-between my-3">
                            <p class="fs-5 my-auto">Quantity</p>
                            <input
                                class="rounded px-2 border-secondary"
                                size="3"
                                type="text"
                                name=""
                                id=""
                            />
                        </div>

                        <div class="d-flex justify-content-end">
                            <input
                                type="submit"
                                value="Add Cart"
                                class="btn"
                                style="width: 100%"
                            />
                        </div>
                        <!---categorie product-->
                        <div class="my-3">
                            <p><b>Categories:</b> Diving, living</p>
                        </div>
                        <!---Social media icon-->
                        <div class="iconfooter">
                            <a href="#"><i class="bi bi-instagram navicon m-2"></i></a>
                            <a href="#"><i class="bi bi-facebook navicon m-2"></i></a>
                            <a href="#"><i class="bi bi-pinterest navicon m-2"></i></a>
                            <a href="#"><i class="bi bi-youtube navicon m-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END HERO-->
@include('components.product-sample')
@include('partials.newsletter')
@include('partials._footer')
