<div>
    <div>
        <h1 class="logo mx-auto">
            <a class="navbar-brand" href="{{ route('welcome') }}">
                <img src="{{ asset('imagens/Logo.png') }}" alt="Nuno Marques" width="51" height="50" />
            </a>
        </h1>
    </div>
    <div>
        <p>Your Name: - {{ request()->name }} </p>
        <p>Your Email: - {{ request()->email }} </p>
        <p>Your Message: - {{ request()->message }} </p>
    </div>
</div>
