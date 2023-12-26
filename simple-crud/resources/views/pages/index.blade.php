<x-app>
    <h1>Home Page</h1>
    <div class="container">
        <table class="table table-hover">
            <tr>
                <th>Id</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Username</th>
                <th>Age</th>
            </tr>
            @foreach ($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->first_name}}</td>
                    <td>{{$client->lastname}}</td>
                    <td>{{$client->user_name}}</td>
                    <td>{{$client->age}}</td>
                    <td><a href="{{route('pages.edit', ['client' => $client])}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Edit</a></td>
                    <td>
                        <form method="POST" action="{{route('pages.destroy', ['client' => $client])}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app>
