<form method="post" action="{{route('update', $document->id)}}">
    @csrf
    @method('PATCH')
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$document->name}}" />
  </div>
  <div class="mb-3">
    <label for="namcontente" class="form-label">Content</label>
    <textarea name="content" class="form-control" id="content" cols="30" rows="10">{{$document->content}}</textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

  <select name="version" id="version" class="form-select mt-3">
    @foreach($document->versions as $version)
    <option value="{{ $version->version_id }}">
      Version @ {{ $version->created_at }}
    </option>
    @endforeach
  </select>
</form>
