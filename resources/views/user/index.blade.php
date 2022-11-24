@extends('layouts.master')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>

@section('content')
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"></div>
			<div class="col col-md-6">
<a href="{{ route('user.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Age</th>
            <th>Role</th>
            <th>Recommend</th>
            <th>Options</th>
            <th>Comment</th>
        </tr>

            @foreach ($user as $row)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $row->Name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->number }}</td>
            <td>{{ $row->age }}</td>
            <td>{{ $row->roles }}</td>
            <td>{{ $row->recommend }}</td>
            <td>{{ $row->options }}</td>
            <td>{{ $row->comment }}</td>

            <td>
                <form method="post" action="{{ route('user.destroy', $row->id) }}">
                <a class="btn btn-primary btn-sm" href="{{ route('user.show', $row->id) }}" >Show</a>
                <a class="btn btn-warning btn-sm" href="{{ route('user.edit', $row->id) }}" >Edit</a>
                @method('DELETE')
                @csrf

                <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                </form>
            </td>
        </tr>

              @endforeach

         </table>

    </div>
</div>
@endsection
