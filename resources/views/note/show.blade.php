<x-master>
    @if(Session::has('success'))
    <div class="alert alert-block alert-success" style="margin: 10px;">
        <i class=" fa fa-check cool-green ">{{ Session::get('success') }}</i>
    </div>
@endif
<div style="height: 100vh;width:100vh;margin:auto">
        <div id="carouselExample" class="carousel slide" style="width: 480px;height:480px;">
            <div class="carousel-inner" style="width: 480px;height:480px;">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/Pics/07c254255cbcb2b5d371f9b760151ce6eb6830a2_full.jpg') }}"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/Pics/781.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/Pics/CrWGFEwWIAA7Bum.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="card-body">
            <h5 class="card-title" style="color: white">{{ $note->title }}</h5>
            <p class="card-text" style="color: white">{{ $note->note }}</p>
            <a href="{{ route('notes.index') }}" class="btn btn-primary">Back</a>
            <a href="{{ route('notes.edit', $note) }}" class="btn btn-success">Edit</a>
            <form action="{{route('notes.destroy',$note)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
</x-master>
