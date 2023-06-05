@include('partials._header')
<div class="d-flex justify-content-center align-items-center my-5">
    <div class="col-md-6">
        <div class="border border-3 border-success"></div>
        <div class="card  bg-white shadow p-5">
            <div class="mb-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor"
                    class="bi bi-slash-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path d="M11.354 4.646a.5.5 0 0 0-.708 0l-6 6a.5.5 0 0 0 .708.708l6-6a.5.5 0 0 0 0-.708z" />
                </svg>
            </div>
            <div class="text-center">
                <h1 class="my-4">Page not Found!</h1>
                <p class="mb-4">It looks like nothing was found at this location. Click the link below to return home.
                </p>
                <a href=" {{ route('welcome') }}" class="btn btn-outline-success border border-success">Back Home</a>
            </div>
        </div>
    </div>
</div>

@include('partials._footer')
