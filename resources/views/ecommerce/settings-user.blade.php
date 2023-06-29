@include('partials._header')
<!--PRODUCT -->
<!--Breadcrumb-->
<x-breadcrumb :items="[['name' => 'Home', 'route' => route('welcome')], ['name' => 'My Settings', 'route' => '']]"></x-breadcrumb>
<div class="container rounded bg-white mt-5 mb-5">
    <form action="{{ route('mysettings.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row">

            <div class="col-md-3 border-right">

                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px"
                        src="{{ $user->photo ? asset($user->photo->file) : 'https://i.pravatar.cc/250' }}">
                    <span class="font-weight-bold pt-2">{{ $user->name }}</span>
                    <span class="text-black-50">{{ $user->email }}</span>
                    <input class="mx-auto pt-3" name="photo_id" id="photo_id" type="file">

                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Full Name</label><input type="text"
                                class="form-control" placeholder="{{ $user->name }} " value="{{ $user->name }}"
                                name="name"></div>
                    </div>
                    <div class="row mt-3">
                        @foreach ($user->locations as $location)
                            <div class="col-md-12"><label class="labels">Address Line and Number</label><input
                                    type="text" class="form-control" placeholder="{{ $location->street }}"
                                    value="{{ $location->street }}" name="street">
                            </div>
                            <div class="col-md-12"><label class="labels">Postcode</label><input type="text"
                                    class="form-control" placeholder="{{ $location->zipcode }}"name="zipcode"
                                    value="{{ $location->zipcode }}"></div>
                            <div class="col-md-12"><label class="labels">City</label><input type="text"
                                    class="form-control" placeholder="{{ $location->city }}"
                                    value="{{ $location->city }}" name="city"></div>
                            <div class="col-md-12"><label class="labels">Phone Number</label>
                                <input type="text" class="form-control" placeholder="{{ $location->phone }}"
                                    name="phone" value="{{ $location->phone }}">
                            </div>
                            <div class="col-md-12"><label class="labels">Email</label><input type="text"
                                    class="form-control" placeholder="{{ $user->email }}" value="{{ $user->email }}"
                                    name="email"></div>
                        @endforeach

                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-dark profile-button" type="submit">Save Profile</button>
                    </div>
                </div>
            </div>
    </form>
    <div class="col-md-4">
        <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">My Wishlist</h4>
                {{-- @dd($wishlist->products) --}}
            </div>
            @if ($wishlist)
                @if (!empty($wishlist->products))

                    <ul class="list-group list-group-lg list-group-flush">

                        @foreach ($wishlist->products as $wishlist)
                            <li class="list-group-item mb-2">
                                <div class="row align-items-center">

                                    <div class="col-4">
                                        <!-- Image -->
                                        <a href="{{ route('products.show', $wishlist['id']) }}">
                                            <img class="img-fluid"
                                                src="{{ $wishlist['image'] ?? 'http://via.placeholder.com/62x62' }}"
                                                alt="...">
                                        </a>
                                    </div>
                                    <div class="col-8 d-flex flex-column ">
                                        <div>
                                            <!-- Title -->
                                            <p class="fs-sm fw-bold mb-6">
                                                <a class="text-body"
                                                    href="{{ route('products.show', $wishlist['id']) }}">{{ $wishlist['name'] }}</a>
                                                <br>
                                                <span
                                                    class="text-muted">{{ app('price')->format($wishlist['price']) }}</span>
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <form action="{{ route('addproduct') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $wishlist['id'] }}">
                                                <input type="hidden" name="name" value="{{ $wishlist['name'] }}">
                                                <input type="hidden" name="image"
                                                    value="{{ $wishlist['image'] ?? 'http://via.placeholder.com/62x62' }}">
                                                <input type="hidden" name="price" value="{{ $wishlist['price'] }}">
                                                <input type="hidden" name="quantity" value="1">

                                                <div>
                                                    <!-- update -->
                                                    <button class="bg-transparent border-0 text-decoration-underline"
                                                        type="submit">Add to
                                                        Cart</button>
                                            </form>
                                        </div>
                                        <div>
                                            <!-- Remove -->
                                            <form
                                                action="{{ route('wish.remove', ['productId' => $wishlist['id']]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-transparent border-0 text-decoration-underline">
                                                    Remove
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
        </div>
        </li>
        @endforeach

        </ul>
    @else
        @endif
    @else
        <p> Your Wishlist is empty!</p>
        @endif
    </div>

</div>
</div>
</div>
</div>
</div>

@include('partials._footer')
