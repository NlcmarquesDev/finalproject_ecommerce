@extends('admin.index')
@section('content')
    <h1 class="mt-4">FAQ's</h1>
    <div class="d-flex justify-content-between mb-4">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="d-flex justify-content-between ">
                <a class="navbar-brand" href="#"><h2>Faq's</h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <button class="btn btn-secondary">Create User</button>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
        <tr>
            <th>Id</th>
            <th>Question</th>
            <th>Answer</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($faqs as $faq)
            <tr>
                <td>{{$faq->id}}</td>
                <td>{{$faq->question}}</td>
                <td>{{$faq->answer}}</td>
                <td>{{$faq->created_at}}</td>
                <td>{{$faq->updated_at}}</td>
                <td>Actions</td>

            </tr>
        @endforeach
        </tbody>
    </table>




@endsection
