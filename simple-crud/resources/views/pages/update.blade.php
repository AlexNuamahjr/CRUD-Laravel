<x-app>
    <h1>Update Clients</h1>
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
    <form method="POST" action="{{route('pages.update', ['client' => $client])}}">
        @csrf
        @method('PUT')
        <div class="row g-3 m-2">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="first_name" value="{{$client->first_name}}">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lastname" value="{{$client->lastname}}">
            </div>
        </div>
        <div class="row g-3 m-2">
            <div class="col">
              <input type="text" class="form-control" placeholder="Username" name="user_name" value="{{$client->user_name}}">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Age" name="age" value="{{$client->age}}">
            </div>
        </div>
        <div class="m-2">
            <button type="submit" class="btn btn-primary m-4">Update</button>
          </div>
    </form>
</x-app>