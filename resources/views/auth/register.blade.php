@include('partials._header')

<!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image"
        style="
        background-image: url({{ asset('imagens/banner-harbour-chair.jpg') }});
        height: 300px;
        ">
    </div>
    <!-- Background image -->
    <div class="d-flex justify-content-center">
        <div class="card col-lg-6 mx-4 mx-md-5 shadow-5-strong  mb-4  "
            style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">

            <div class="card-body py-5 px-md-5 ">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">{{ __('Register') }}</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Name input -->
                            <div class="form-floating mb-4">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" placeholder="Name">
                                <label class="form-label" for="name">{{ __('Name') }}</label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Email input -->
                            <div class="form-floating mb-4">
                                <input id="emails" type="text"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" placeholder="email">
                                <label class="form-label" for="emails">{{ __('Email address...') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-floating mb-4">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password" placeholder="Password">
                                <label class="form-label" for="password">{{ __('Password') }}</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Password input -->
                            <div class="form-floating mb-4">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="COnfirm Password">
                                <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33"
                                    checked />
                                <label class="form-check-label" for="form2Example33">
                                    Subscribe to our newsletter
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn  btn-block mb-4 ">
                                {{ __('Register') }}
                            </button>

                            <!-- Register buttons -->
                            <div class="text-center ">
                                <p>or sign up with:</p>
                                <div class="d-flex">
                                    <button type="button" class="btn  btn-floating mx-1 border border-0">
                                        <i class="fab fa-facebook-f fs-3"></i>
                                    </button>

                                    <a href="{{ route('google.login') }}"
                                        class="btn  btn-floating mx-1 border border-0">
                                        <i class="fab fa-google fs-3"></i>
                                    </a>

                                    <button type="button" class="btn btn-floating mx-1 border border-0">
                                        <i class="fab fa-twitter fs-3"></i>
                                    </button>

                                    <button type="button" class="btn  btn-floating mx-1 border border-0">
                                        <i class="fab fa-github fs-3"></i>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Section: Design Block -->
@include('partials.newsletter')
@include('partials._footer')
