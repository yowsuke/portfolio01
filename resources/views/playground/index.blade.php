<h1>Playground</h1>

@foreach($playground as $playground)
    <a href="/playground/{{ $playground->id }}">{{ $playground->title }}</a>
    <a href="/playground/{{ $playground->id }}/edit">Edit</a>

    <form action="/playground/{{ $playground->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Delete</button>
    </form>
@endforeach

<a href="/playground/create">New playground</a> 