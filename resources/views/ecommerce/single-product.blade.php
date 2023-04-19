@include('components._header')
<!--HERO -->
<div class="producDetail container-fluid bg-light">
    <div class="row">
        <div class="d-flex my-4">
            <div>
                <a href="{{route('welcome')}}" class="indexfooter p-1">Home</a>
            </div>
            <div class="mx-2">
                <span>/</span>
                <a href="{{route('products')}}" class="indexfooter p-1">Products</a>
            </div>
            <div>
                <span>/</span>
                <a href="{{route('single.product')}}" class="indexfooter p-1"
                >Product Details</a
                >
            </div>
        </div>
        <div class="col-12 col-lg-10 offset-lg-1 my-4">
            <!---Product Image-->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 my-auto">
                        <div class="boximg">
                            <div class="flip-box mx-auto">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img
                                            src="../Imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp"
                                            alt="stone lamp"
                                            class="img-fluid"
                                        />
                                    </div>
                                    <div class="flip-box-back">
                                        <img
                                            src="../Imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp"
                                            alt="Paris"
                                            class="img-fluid"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <header>
                            <h2>Name from Product</h2>
                        </header>
                        <!---price and whishlist-->
                        <div
                            class="d-flex justify-content-between align-items-center my-3"
                        >
                            <p class="fs-5 my-auto">&euro; 20.00 - &euro; 30.00</p>
                            <a href="" class="outline-none"
                            ><i class="bi bi-heart fs-4"></i
                                ></a>
                        </div>
                        <hr />
                        <!---detail product-->
                        <p class="my-3 fs-5">Description of the product</p>
                        <hr />
                        <!---reviews star-->
                        <div class="d-flex align-items-center">
                            <div class="pe-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <p class="fs-5 ps-2 my-auto">Reviews</p>
                        </div>
                        <!---Color-->
                        <div class="d-flex justify-content-between my-3">
                            <p class="fs-5 my-auto">Color</p>
                            <select class="rounded" name="" id="">
                                <option value="">color</option>
                                <option value="">black</option>
                                <option value="">white</option>
                            </select>
                        </div>
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
@include('partials.product-sample')
@include('components._footer')
