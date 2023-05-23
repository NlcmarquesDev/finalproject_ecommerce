@include('partials._header')

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Checkout</h1>
            </div>
        </div>
        <div class="row gutter-1">
            <div class="col">
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
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="name" class="form-control" id="floatingInput" placeholder="your name...">
                                    <label for="floatingInput">Name</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="address" class="form-control" id="floatingInput" placeholder="Straat , Nr.">
                                    <label for="floatingInput">Address and number</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="bus" class="form-control" id="floatingInput" placeholder="Bus (optionel)">
                                    <label for="floatingInput">Bus</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="postcode" class="form-control" id="floatingInput" placeholder="Vorbield: 8930 ">
                                <label for="floatingInput">Postcode</label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="city" class="form-control" id="floatingInput" placeholder="Stad">
                                    <label for="floatingInput">Stad</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <!-- options -->
                <div class="bg-white p-2 p-lg-3 mb-1">
                    <h2 class="mb-3 text-uppercase">Delivery Options</h2>
                    <div class="custom-control custom-choice">
                        <input type="radio" name="choice-shipping" class="custom-control-input" id="custom-choice-1">
                        <label class="custom-control-label text-dark d-flex justify-content-between align-items-center" for="custom-choice-1">
                  <span>
                    <h4 class="custom-choice-title">Standard</h4>
                    <span class="text-muted">Estimated delivery: Tue, 09/04</span>
                  </span>
                            <span class="text-uppercase">Free</span>
                        </label>
                    </div>
                    <div class="custom-control custom-choice">
                        <input type="radio" name="choice-shipping" class="custom-control-input" id="custom-choice-2">
                        <label class="custom-control-label text-dark d-flex justify-content-between align-items-center" for="custom-choice-2">
                  <span>
                    <h4 class="custom-choice-title">Express</h4>
                    <span class="text-muted">Estimated delivery: Tue, 09/04</span>
                  </span>
                            <span class="text-uppercase">$8.00</span>
                        </label>
                    </div>
                </div>

                <!-- payment -->
                <div class="bg-white p-2 p-lg-3 mb-1">
                    <h2 class="mb-2 text-uppercase">Payment</h2>

                    <fieldset class="mb-2">
                        <div class="row">
                            <div class="col">
                                <div class="select-frame mb-2">
                                    <select class="custom-select custom-select-lg select2-hidden-accessible" id="customPayment" data-select2-id="customPayment" tabindex="-1" aria-hidden="true">
                                        <option value="1" data-select2-id="10">Credit / Debit Card</option>
                                        <option value="2">Paypal</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="9" style="width: 666.336px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-customPayment-container"><span class="select2-selection__rendered" id="select2-customPayment-container" role="textbox" aria-readonly="true" title="Credit / Debit Card">Credit / Debit Card</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-label-group">
                                    <input type="text" id="inputCardNumber" class="form-control form-control-lg mt-2" placeholder="Card Number" required="">
                                    <label for="inputCardNumber">Card Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-label-group">
                                    <input type="text" id="inputExpiryDate" class="form-control form-control-lg mt-2" placeholder="Expiry Date (MM/YY)" required="">
                                    <label for="inputExpiryDate">Expiry date (MM/YY)</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-label-group">
                                    <input type="text" id="inputCvv" class="form-control form-control-lg mt-2" placeholder="CVV" required="">
                                    <label for="inputCvv">CVV</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-label-group">
                                    <input type="text" id="inputCardName" class="form-control form-control-lg mt-2" placeholder="Name on card" required="">
                                    <label for="inputCardName">Name on card</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h3 class="mb-4 text-uppercase fs-16 ">We Accept</h3>
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


            <!-- sidebar -->
            <aside class="col-lg-5">
                <div class="bg-white p-2 p-lg-3">
                    <h2 class="mb-3 text-uppercase fs-20">Order total</h2>
                        <?php $total = 0 ?>

                    @if ($showCart())

                        @foreach ($showCart()->products as $product)
                                <?php $total += $product['price'] * $product['quantity'] ?>
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <!-- Image -->

                                    <a href="{{ route('products.show', $product['id']) }}">
                                        <img class="img-fluid" src="{{ $product['image']}}" alt="...">
                                    </a>

                                </div>
                                <div class="col-5">
                                    <!-- Title -->
                                    <p class="fs-sm fw-bold mb-6">
                                        <a class="text-body" href="{{ route('products.show', $product['id']) }}">{{ $product['name'] }}</a> <br>
                                        <span class="text-muted">&euro;{{ $product['price'] }}</span>
                                    </p>
                                </div>
                                <div class="col-2 d-flex flex-column">
                                    <!--Footer -->
                                    <form action="{{ route('cart.update',['productId' => $product['id']]) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="d-flex flex-column justify-content-between align-items-center">
                                            <!-- Select -->
                                            <input type="number" value="{{ $product['quantity'] }}" name="quantity_{{$product['id']}}" class="form-control" />
                                        </div>
                                        <div class="d-flex justify-content-between mt-3 ">
                                            <!-- update -->
                                            <button class="bg-transparent border-0 text-decoration-underline" type="submit">
                                                <i class="fe fe-x"></i>Update
                                            </button>
                                        </div>

                                    </form>
                                </div>
                                <div class="col-2">
                                    <strong>Subtotal</strong> <strong class="ms-auto">&euro;{{ $total }}</strong>
                                </div>
                                <div class="col-1">
                                    <!-- Remove -->
                                    <form action="{{ route('cart.remove', ['productId' => $product['id']]) }}" method="Post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-transparent border-0 text-decoration-underline">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                       @endforeach
                    @endif
                </div>
                <hr class="my-3">
                <ul class="list-group list-group-minimal">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Items
                            <span>$84.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Shipping
                            <span>$8.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center text-red">
                            Discount
                            <span class="text-red">-$14.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-bold">
                            Total to pay
                            <span>$78.00</span>
                        </li>
                    </ul>
                <!-- place order -->
                <div class="bg-white  p-2 p-md-3">
                    <a href="" class="btn btn-dark w-100 mb-2">Place Order</a>
                </div>
                <div class="bg-white p-2 p-md-3">
                    <small class="text-muted">By placing your order you agree to our <a href="">Terms &amp; Conditions</a>, privacy and returns policies. You also consent to some of your data being stored by SHOPY, which may be used to make future shopping experiences better for you.</small>
                </div>
            </aside>
        </div>
    </div>
</section>

@include('partials._footer')
