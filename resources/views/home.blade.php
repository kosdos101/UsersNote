<x-master>
    @if (session()->get('msg'))
        <div class="alert alert-success" role="alert">
            <strong>Success! </strong>{{session('msg')}}.
        </div>
    @endif
    <div class="jumbotron jumbotron-fluid" style="background-color: rgb(119, 119, 252)">
        <div class="container">
          <h1 class="display-4"  style="color:azure">{{$user->name}}</h1>
          <p class="lead"  style="color:azure">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
          <p class="lead" style="color:azure">Your Email: {{$user->email}}</p>
        </div>
      </div>
</x-master>