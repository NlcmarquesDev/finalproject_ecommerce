@include('partials._header')
<x-breadcrumb :items="[ ['name' => 'Home', 'route' => route('welcome')], ['name' => 'Products', 'route' => route('products')],]"></x-breadcrumb>
<h1>This is your cart , you can see more if you want</h1>

@include('partials._footer')
