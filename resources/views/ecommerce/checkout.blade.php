@include('partials._header')

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Checkout</h1>
            </div>
        </div>
        <div class="row gutter-1">
            @if ($cart)

                <div class="col-lg-7">
                    <form action="{{ route('store.checkout') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <!-- address -->
                        <div class="bg-white p-2 p-lg-3 mb-1">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h2 class="text-uppercase">Delivery Address</h2>
                                </div>
                            </div>

                            <fieldset class="mb-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" name="email" class="form-control" id="floatingInput"
                                                placeholder="name@example.com">
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="name" name="name" class="form-control" id="floatingInput"
                                                placeholder="your name...">
                                            <label for="floatingInput">Name</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mb-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="address" name="adress" class="form-control" id="floatingInput"
                                                placeholder="Straat , Nr.">
                                            <label for="floatingInput">Address and number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="bus" name="bus" class="form-control" id="floatingInput"
                                                placeholder="Bus (optionel)">
                                            <label for="floatingInput">Bus</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="postcode" name="postcode" class="form-control" id="floatingInput"
                                            placeholder="Vorbield: 8930 ">
                                        <label for="floatingInput">Postcode</label>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mb-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="city" name="city" class="form-control" id="floatingInput"
                                                placeholder="Stad">
                                            <label for="floatingInput">Stad</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <input type="hidden" name="taxes" value="{{ $cart->taxes() }}">
                            <input type="hidden" name="total" value="{{ $cart->total() }}">

                        </div>

                        <!-- options -->
                        <div class="bg-white p-2 p-lg-3 mb-1">
                            <h2 class="mb-3 text-uppercase">Delivery Options</h2>
                            <div class="custom-control custom-choice">
                                <input type="checkbox" name="standard" class="custom-control-input"
                                    id="custom-choice-1">
                                <label
                                    class="custom-control-label text-dark d-flex justify-content-between align-items-center"
                                    for="custom-choice-1">
                                    <span>
                                        <h4 class="custom-choice-title">Standard</h4>
                                        <span class="text-muted">Estimated delivery: Tue, 09/04</span>
                                    </span>
                                    <span class="text-uppercase">Free</span>
                                </label>
                            </div>
                            <div class="custom-control custom-choice">
                                <input type="checkbox" name="Express" class="custom-control-input" id="custom-choice-2">
                                <label
                                    class="custom-control-label text-dark d-flex justify-content-between align-items-center"
                                    for="custom-choice-2">
                                    <span>
                                        <h4 class="custom-choice-title">Express</h4>
                                        <span class="text-muted">Estimated delivery: Tue, 09/04</span>
                                    </span>
                                    <span class="text-uppercase">$8.00</span>
                                </label>
                            </div>
                        </div>
                        <div class="bg-white  p-2 p-md-3">
                            <button type="submit" class="btn btn-dark w-100 mb-2">Place Order</button>
                        </div>
                        <!-- sidebar -->
                    </form>
                </div>
                <aside class="col-lg-5">
                    <div class="bg-white p-2 p-lg-3">
                        <h2 class="mb-3 text-uppercase fs-20">Order total</h2>
                        @foreach ($cart->content() as $cartItem)
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <!-- Image -->

                                    <a href="{{ route('products.show', $cartItem->product()->id) }}">
                                        @if ($cartItem->product()->photos->first())
                                            <img class="img-fluid"
                                                src="{{ $cartItem->product()->photos->first()->file }}"
                                                alt="...">
                                        @else
                                            <p>Image not available</p>
                                        @endif
                                    </a>

                                </div>
                                <div class="col-5">
                                    <!-- Title -->
                                    <p class="fs-sm fw-bold mb-6">
                                        <a class="text-body"
                                            href="{{ route('products.show', $cartItem->product()->id) }}">{{ $cartItem->product()->name }}</a>
                                        <br>
                                        <span class="text-muted">&euro;{{ $cartItem->product()->price }}</span>
                                    </p>
                                </div>
                                <div class="col-2 d-flex flex-column">
                                    <!--Footer -->
                                    <form
                                        action="{{ route('cart.update', ['productId' => $cartItem->product()->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="d-flex flex-column justify-content-between align-items-center">
                                            <!-- Select -->
                                            <input type="number" value="{{ $cartItem->quantity() }}"
                                                name="quantity_{{ $cartItem->product()->id }}"
                                                class="form-control" />
                                        </div>
                                        <div class="d-flex justify-content-between mt-3 ">
                                            <!-- update -->
                                            <button class="bg-transparent border-0 text-decoration-underline"
                                                type="submit">
                                                <i class="fe fe-x"></i>Update
                                            </button>
                                        </div>

                                    </form>
                                </div>
                                <div class="col-2">
                                    <strong>Subtotal</strong> <strong
                                        class="ms-auto">&euro;{{ $cartItem->total() }}</strong>
                                </div>
                                <div class="col-1">
                                    <!-- Remove -->
                                    <form
                                        action="{{ route('cart.remove', ['productId' => $cartItem->product()->id]) }}"
                                        method="Post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-transparent border-0 text-decoration-underline">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr class="my-3">
                    <ul class="list-group list-group-minimal">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Items
                            <span>{{ app('price')->format($cart->subtotal()) }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Shipping
                            <span>$8.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center text-red">
                            Taxes
                            <span class="text-red"> {{ app('price')->format($cart->taxes()) }}</span>
                        </li>
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-bold">
                            Total to pay
                            <span> {{ app('price')->format($cart->total()) }} </span>
                        </li>
                    </ul>
                    <!-- place order -->

                    <div class="bg-white p-2 p-md-3">
                        <small class="text-muted">By placing your order you agree to our <a href="">Terms &amp;
                                Conditions</a>, privacy and returns policies. You also consent to some of your data
                            being stored by SHOPY, which may be used to make future shopping experiences better for
                            you.</small>
                    </div>
                </aside>
            @else
                Cart is empty
            @endif






        </div>
    </div>
</section>

@include('partials._footer')
