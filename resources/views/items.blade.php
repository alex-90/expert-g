<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col"></th>
    </tr>
  </thead>

  <tbody>
      
    @foreach($documents as $document)
    <tr>  
      <td>{{$document->id}}</td>  
      <td>
        <a href="{{route('update', $document->id)}}">
            {{$document->name}} ({{count($document->versions)}} versions)
        </a>
      </td>
      <td>
        <form action="{{route('delete', $document->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>