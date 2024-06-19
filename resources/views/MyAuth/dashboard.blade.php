<x-master>
    <h1>Hello {{auth()->user()->name}}, This is your dashborad</h1>
    <a href="{{route('mylogout')}}" class="btn btn-primary">Log Out</a>
</x-master>