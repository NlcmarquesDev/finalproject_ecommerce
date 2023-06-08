@extends('layouts.admin')
@section('content')
    <x-admin.heading_table title="Settings" name="" button="Dashboard" route="{{ route('home') }}">
    </x-admin.heading_table>


    <div class="container">
        <div class="row">
            <div>
                <form action="{{ route('add.favicon') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PATCH') --}}
                    <div class=" rounded-circle cursor-pointer d-flex flex-column flex-center mb-5"
                        style="max-width: 300px; max-height: 300px">
                        <div class="form-group mb-5">
                            <label class="fs-3 mb-"" for="favicon">Favicon Image : </label>
                            <input name="favicon" id="favicon" type="file" required>
                        </div>
                        <button class="btn btn-dark" type="submit"> Add Picture</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
