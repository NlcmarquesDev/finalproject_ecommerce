@include('partials._header')
<x-breadcrumb :items="[ ['name' => 'Home', 'route' => route('welcome')], ['name' => 'Products', 'route' => route('products')],]"></x-breadcrumb>
<h1>This is your Thank you page </h1>

@include('partials._footer')
