<x-master>
    <form action="{{route('notes.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="width: 75%;margin:auto;padding:0.5%">
            <div class="mb-3" style="color: white">
                <label for="title" class="form-label">Note Title</label>
                <input type="text" class="form-control" id="title" name="title">
              </div>
              <div class="mb-3" style="color: white">
                <label for="note" class="form-label">Note Body</label>
                <textarea class="form-control" id="note" rows="3" name="note"></textarea>
              </div>
              <input hidden name="user_id" value="1"/>
              <button type="submit" class="btn btn-primary mb-3">Create</button>
        </div>
    </form>
</x-master>