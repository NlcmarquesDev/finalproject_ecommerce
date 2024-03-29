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
                    <td>{{ $faq->updated_at }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            @if ($faq->deleted_at != null)
                                <form action="{{ route('faqs.restore', $faq->id) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-info">
                                        Restore
                                    </button>
                                </form>
                            @else
                                <a class="btn btn-primary" href="{{ route('faq.edit', $faq->id) }}">
                                    Edit
                                </a>
                                <form action="{{ route('faq.destroy', $faq->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            @endif
                        </div>

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-3">
        {{ $faqs->links() }}
    </div>
@endsection
