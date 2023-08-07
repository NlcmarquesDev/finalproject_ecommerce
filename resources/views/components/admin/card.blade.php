@props([
    'color' => 'primary',
    'title' => 'title offcanvas',
    'route' => '#',
    'icon' => '#',
])


<div class="col-xl-3 col-md-6">
    <div class="card bg-{{ $color }} text-white mb-4">
        <div class="card-body d-flex justify-content-between">
            <h3>{{ $title }}</h3>
            <i class="{{ $icon }} fs-3"></i>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="{{ $route }}">View Details</a>
            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
    </div>
</div>
