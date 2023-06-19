@extends('admin.index')
@section('content')
    <x-admin.heading_table title="Edit Faqs" name="{{ $faq->question }}" button="All Faqs" route="{{ route('faq.index') }}">
    </x-admin.heading_table>
    <div class="row">
        <form action="{{ action('\App\Http\Controllers\FaqController@update', $faq) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="d-xl-flex col-xl-12">
                <div class="col-lg-9">
                    <h4 class="mb-3">Faq Question </h4>
                    <div class="row g-3 mb-9">
                        <div class=" col-md-12">
                            <div class="form-floating">
                                <input class="form-control" name="question" id="floatingInputName" type="text"
                                    placeholder="First name" value="{{ $faq->question }}">
                                <label for="floatingInputName">Question</label>
                            </div>
                            @error('name')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-8">
                            <div class="form-floating">
                                <textarea class="form-control" name="answer" id="floatingInputCode" type="text" value="{{ $faq->answer }}">{{ $faq->answer }}</textarea>
                                <label for="floatingInputCode">Answer</label>
                            </div>
                            @error('code')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary ms-2">Update faq</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
