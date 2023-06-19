<div>
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
                                                <input type="email" name="email" class="form-control"
                                                    id="floatingInput" value="{{ $user->email }}"
                                                    placeholder="name@example.com" required>
                                                <label for="floatingInput">Email address</label>
                                                @error('email')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="name" name="name" class="form-control"
                                                    id="floatingInput" value="{{ $user->name }}"
                                                    placeholder="your name..." required>
                                                <label for="floatingInput">Name</label>
                                                @error('name')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>


                                <fieldset class="mb-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="address" name="adress" value="" class="form-control"
                                                    id="floatingInput" placeholder="Straat , Nr." required>
                                                <label for="floatingInput">Address and number</label>
                                            </div>
                                        </div>
                                    </div>
                                    @error('address')
                                        <p class="text-danger fs-6">{{ $message }}</p>
                                    @enderror
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="bus" name="bus" class="form-control"
                                                    id="floatingInput" placeholder="Bus (optionel)">
                                                <label for="floatingInput">Bus</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="postcode" name="postcode" class="form-control"
                                                id="floatingInput" value="" placeholder="Vorbield: 8930 "
                                                required>
                                            <label for="floatingInput">Postcode</label>
                                        </div>
                                    </div>
                                </fieldset>
                                @error('postcode')
                                    <p class="text-danger fs-6">{{ $message }}</p>
                                @enderror

                                <fieldset class="mb-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="city" name="city" class="form-control"
                                                    id="floatingInput" value="" placeholder="Stad" required>
                                                <label for="floatingInput">Stad</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                @error('city')
                                    <p class="text-danger fs-6">{{ $message }}</p>
                                @enderror

                                <input type="hidden" name="taxes" value="{{ $cart->taxes() }}">
                                <input type="hidden" name="total" value="{{ $cart->total() }}">

                            </div>

                            <!-- options -->
                            <div class="bg-white p-2 p-lg-3 mb-1">
                                <h2 class="mb-3 text-uppercase">Delivery Options</h2>

                                @foreach ($shipments as $key => $shipment)
                                    <div class="custom-control custom-choice">
                                        <input wire:click="selectedShipment({{ $shipment->id }})" type="radio"
                                            name="shipment" class="custom-control-input shipment-radio"
                                            id="shipment-{{ $key + 1 }}" value='{{ $key + 1 }}'
                                            {{ $selectedShipmentId == $shipment->id ? 'checked' : '' }}>
                                        <input wire:model="shipPrice" type="hidden" value="{{ $shipment->price }}"
                                            name="ship_price">
                                        <label
                                            class="custom-control-label text-dark d-flex justify-content-between align-items-center"
                                            for="shipment-{{ $key }}">
                                            <span>
                                                <h4 class="custom-choice-title">{{ $shipment->name }}</h4>
                                                <span class="text-muted">Estimated delivery:
                                                    {{ $estimatedDeliveryDate = $currentDate->copy()->addDays($shipment->days_delivery)->format('D, d/m') }}
                                                </span>
                                            </span>
                                            <span
                                                class="text-uppercase">{{ app('price')->format($shipment->price) }}</span>
                                        </label>
                                        {{-- @dd($shipment->price) --}}
                                    </div>
                                @endforeach
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
                                            <span class="text-muted">{{ $cartItem->color }}</span>
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
                                                    class="form-control" min="1" />
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
                                            action="{{ route('cart.remove', ['productId' => $cartItem->product()->id, 'color' => $cartItem->color]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="color" value="{{ $cartItem->color }}">
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
                            <li class="list-group-item d-flex justify-content-between align-items-center text-red">
                                Taxes
                                <span class="text-red"> {{ app('price')->format($cart->taxes()) }}</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-bold">
                                Total
                                <span> {{ app('price')->format($cart->total()) }} </span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Shipping
                                <span>{{ $shipPrice }}</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center text-uppercase font-weight-bold">
                                Total to pay
                                <span> {{ app('price')->format($cart->totalWithShip($shipPrice)) }} </span>
                            </li>
                        </ul>
                        <!-- place order -->

                        <div class="bg-white p-2 p-md-3">
                            <small class="text-muted">By placing your order you agree to our <a href="">Terms
                                    &amp;
                                    Conditions</a>, privacy and returns policies. You also consent to some of your data
                                being stored by SHOPY, which may be used to make future shopping experiences better for
                                you.</small>
                        </div>
                    </aside>
                @else
                    <div class="d-flex justify-content-center align-items-center my-5">
                        <div class="col-md-6">
                            <div class="border border-3 border-dark"></div>
                            <div class="card  bg-white shadow p-5">
                                <div class="mb-4 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                        fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </div>
                                <div class="text-center">
                                    <h1 class="my-4">Your Cart is empty!</h1>

                                    <a href=" {{ route('products') }}"
                                        class="btn btn-outline-dark border border-dark">Go
                                        to Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
</div>
