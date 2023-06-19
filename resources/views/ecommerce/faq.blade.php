@include('partials._header')

<x-breadcrumb :items="[['name' => 'Home', 'route' => route('welcome')], ['name' => 'Faq`s', 'route' => route('faq')]]"></x-breadcrumb>
<div id="discount" class="d-lg-flex justify-content-center align-items-center text-center pt-5 pt-lg-0">
    <header class="me-4">
        <h1><i>FAQ's</i></h1>
    </header>
</div>
<div class="col-lg-8 px-5 mx-auto">
    <div class="row">
        <div class="col-12">
            @foreach ($faqs as $faq)
                <div class="d-flex my-5">
                    <div class="col-4 text-gold">
                        <p><strong>{{ $faq->question }}</strong></p>
                    </div>
                    <div class="col-8">
                        <p>{{ $faq->answer }}</p>
                    </div>
                </div>

                <hr>
            @endforeach
        </div>
    </div>
</div>

@include('partials._footer')
