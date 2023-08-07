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
                        <h2 class="fw-bold mb-5">{{ __('Login') }}</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

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

                            <div class="border border-success rounded p-2 mb-3" style="--bs-border-opacity: .5;">
                                <p>Email address: <b>admin@test.com</b></p>
                                <p>Password: <b>admin123</b></p>
                            </div>




                            <div class="form-check d-flex justify-content-center mb-4">
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn  btn-block mb-4 ">
                                {{ __('Login') }}
                            </button>

                            <!-- Register buttons -->
                            <div class="text-center  ">
                                <p>or sign up with:</p>
                                <div class="d-flex justify-content-center">

                                    <a href="{{ route('google.login') }}" class="btn  btn-block mx-1">
                                        <i class="fab fa-google fs-3"></i>
                                        oogle
                                    </a>
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
