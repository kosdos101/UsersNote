<x-master>
  <br>
    <div class="container" style="margin: auto">
    @foreach ($allnotes as $note)
    <div class="item">
      <div class="card mb-4 form-control-sm" style="width: 17rem; ">
        <div class="card-body" >
          <h6 class="card-subtitle mb-2 text-body-secondary">{{$note->user_id}}</h6>
          <h5 class="card-title">{{$note->title}}</h5>
          <p class="card-text">{{Str::limit($note->note,80)}}</p>
          <a href="{{route('notes.show' , $note)}}" class="btn btn-primary">View</a>
          <a href="{{route('notes.edit' , $note)}}" class="btn btn-success">Edit</a>
          <form action="{{route('notes.destroy',$note)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
        </div>
      </div>
    </div>
    @endforeach
    </div>
  {{ $allnotes->links('pagination::bootstrap-4') }}
</x-master>