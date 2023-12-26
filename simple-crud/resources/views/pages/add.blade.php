<x-app>
    <h1>Add Clients</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
            
        @endif
    </div>
    <form method="POST" action="{{route('pages.save')}}">
        @csrf
        @method('POST')
        <div class="row g-3 m-2">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="first_name">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lastname">
            </div>
        </div>
        <div class="row g-3 m-2">
            <div class="col">
              <input type="text" class="form-control" placeholder="Username" name="user_name">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Age" name="age">
            </div>
          </div>
          <div class="m-2">
            <button type="submit" class="btn btn-primary m-4">Add</button>
          </div>
        
    </form>
</x-app>