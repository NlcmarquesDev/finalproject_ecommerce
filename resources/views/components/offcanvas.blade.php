@props ([
    'title' =>'title offcanvas',
    'icon' =>'fa-regular fa-heart',
    'number' =>'1',
    'display' =>'',
    'numbercart'=> '0'
])

<div>
    <button
        type="button"
        data-bs-target="#offcanvas{{$number}}"
        aria-controls="offcanvas{{$number}}"
        data-bs-toggle="offcanvas"
        class="bg-transparent border-0"
    >
        <div class="boxbol {{$display}}">
            <i
                class="{{$icon}} navicon {{$display}} m-2"
            ></i>
            <span class="numberbol">{{$numbercart}}</span>
        </div>
    </button>

    <div
        class="offcanvas offcanvas-end"
        tabindex="-1"
        id="offcanvas{{$number}}"
        aria-labelledby="offcanvas{{$number}}Label"
    >
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvas{{$number}}Label">
                <strong class="mx-auto">{{$title}}</strong>
            </h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
            ></button>
        </div>
        <div class="offcanvas-body">
            <div>{{$slot}}</div>
        </div>
    </div>
</div>
