<style>
  .pagination { font-size: 10pt; }
  .pagination li { display: inline-block }
</style>

@section('title', 'PLAYGROUND2')

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Pref</th>
    <th>Area</th>
    <th>Tel</th>
    <th>Url</th>
    <th>Open</th>
    <th>Fee</th>
    <th>Parking</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->pref }}</td>
    <td>{{ $item->area }}</td>
    <td>{{ $item->tel }}</td>
    <td>{{ $item->url }}</td>
    <td>{{ $item->open }}</td>
    <td>{{ $item->fee }}</td>
    <td>{{ $item->parking }}</td>
  </tr>
  @endforeach
</table>
  {{ $items->links() }}