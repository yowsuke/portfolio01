<form method="POST" action="/playground/{{ $playground->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" value="{{ $playground->title }}">
        <input type="text" name="content" value="{{ $playground->content }}">
        <input type="submit">
    </form> 