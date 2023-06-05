@extends('admin.index')
@section('content')
    <x-admin.heading_table title="All Faqs" name="{{ $totalFaqs }}" button="All Faqs" route="{{ route('faq.index') }}">
    </x-admin.heading_table>
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
            @foreach ($faqs as $faq)
                <tr>
                    <td>{{ $faq->id }}</td>
                    <td>{{ $faq->question }}</td>
                    <td>{{ $faq->answer }}</td>
                    <td>{{ $faq->created_at }}</td>
                    <td>{{ $faq->updated_at }}</td>
                    <td>Actions</td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
