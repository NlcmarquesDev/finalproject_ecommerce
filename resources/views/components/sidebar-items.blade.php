@props([
    'item'=>'item',
    'icon'=>'fas fa-user',
])

<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse{{$item}}" aria-expanded="false" aria-controls="collapse{{$item}}">
    <div class="sb-nav-link-icon"><i class="{{$icon}}"></i></div>
    {{$item}}
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapse{{$item}}" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
        {{$slot}}
    </nav>
</div>
