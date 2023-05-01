@props([
"title"=>'default',
"button"=>'default',
"rota"=>'default'
]
)

<div class="d-flex justify-content-between align-items-center mt-5">
    <h1>{{$title}}</h1>
    <a href="{{$rota}}" class="btn btn-primary">{{$button}}</a>
</div>

<hr>
