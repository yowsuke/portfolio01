@if (session('message'))
        {{ session('message') }}
    @endif

    {{ $playground->title }}
    {{ $playground->content }} 

    <a href="/playground{{ $playground->id }}/edit">Edit</a>