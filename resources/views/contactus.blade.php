<x-master>
    <br>
    <h2>Contact Us</h2>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    
    <form action="{{route('contact.send')}}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="subject" placeholder="" name="subject" required>
            <label for="subject">Subject</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" placeholder="Alex" name="name" required>
            <label for="name">Name</label>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required name="email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Messge</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg" required></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Send</button>
          </div>
    </form>
</x-master>
