@include('partials._header')
<!--PRODUCT -->
<!--Breadcrumb-->
<x-breadcrumb :items="[['name' => 'Home', 'route' => route('welcome')], ['name' => 'My Orders', 'route' => '']]"></x-breadcrumb>

<div class="container">
    <div class="accordion" id="accordionExample">
        @foreach ($orders as $order)
            {{-- @dd($order) --}}
            <div class="accordion-item ">
                <h2 class="accordion-header bg-outline-dark">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $order->id }}" aria-expanded="true"
                        aria-controls="collapse{{ $order->id }}">
                        Order Number : {{ $order->id }}
                    </button>
                </h2>
                <div id="collapse{{ $order->id }}" class="accordion-collapse collapse show"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body ">
                        <h5 class="pb-4">Delivered to:</h5>
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <p><b>Adress: </b> {{ $order->order_adress }}</p>
                                @if ($order->order_bus != null)
                                    <p><b>Bus: </b>{{ $order->order_bus }}</p>
                                @endif
                                <p><b>Postcode: </b> {{ $order->order_postcode }}</p>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <p><b>Status de payment: </b>
                                    <span
                                        class="badge {{ $order->order_status == 'unpaid' ? 'text-bg-danger' : 'text-bg-success' }} ">{{ $order->order_status }}</span>
                                </p>

                                <p><b>Shipment :</b> {{ $order->shipment->name }}</p>

                                <p><b>Taxes: </b>{{ app('price')->format($order->order_taxes) }}</p>
                                <p><b>Total : </b>{{ app('price')->format($order->order_total_with_ship) }} </p>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                @foreach ($order->orderItems as $orderItem)
                                    <p><b>Product Name: </b> {{ $orderItem->product_name }}</p>
                                    <p><b>Product Color: </b> {{ $orderItem->product_color }}</p>
                                    <p><b>Quantity: </b> {{ $orderItem->quantity }}</p>
                                @endforeach
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('partials._footer')
