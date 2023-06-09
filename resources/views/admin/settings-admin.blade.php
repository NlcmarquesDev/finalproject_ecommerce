@extends('layouts.admin')
@section('content')
    <x-admin.heading_table title="Settings" name="" button="Dashboard" route="{{ route('home') }}">
    </x-admin.heading_table>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Favicon Image</h1>
                <form action="{{ route('add.favicon') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PATCH') --}}
                    <div class=" rounded-circle cursor-pointer d-flex flex-column flex-center mb-5"
                        style="max-width: 300px; max-height: 300px">
                        <div class="form-group mb-5">
                            <input name="favicon" id="favicon" type="file" required>
                        </div>
                        <button class="btn btn-dark" type="submit"> Add Picture</button>
                    </div>
                </form>

            </div>
            <div class="col-md-6">
                <h1>Social Media</h1>
                <form action="{{ route('social.media') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-2">
                        <label for="">Facebook:</label>
                        <input type="url" name="facebook" value="facebook">
                    </div>
                    <div class="my-2">
                        <label for="">Instagram:</label>
                        <input type="url" name="instagram" value="instagram">
                    </div>
                    <div class="my-2">
                        <label for="">Pinterest:</label>
                        <input type="url" name="pinterest" value="pinterest">
                    </div>
                    <div class="my-2">
                        <label for="">Youtube:</label>
                        <input type="url" name="youtube" value="youtube">
                    </div>
                    <div class="my-2">
                        <label for="">TikTok:</label>
                        <input type="url" name="tiktok" value="tiktok">
                    </div>
                    <button class="btn btn-dark w-50" type="submit"> Add Socials media</button>

                </form>
            </div>
        </div>
    </div>
@endsection
