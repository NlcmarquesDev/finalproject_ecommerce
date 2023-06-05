@props([
    'title' => 'default',
    'name' => 'default',
    'button' => 'default',
    'route' => '',
])

<div class="d-flex justify-content-between shadow-lg p-3 my-5 bg-body-tertiary rounded">
    <div class="d-flex">
        <h1 class="m-0">{{ $title }} </h1>
        <h1 class="m-0"> | {{ $name }}</h1>
    </div>
    <a href="{{ $route }}" class="btn btn-dark m-2 rounded-pill">{{ $button }}</a>
</div>
<hr>
