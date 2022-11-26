@extends('layouts.master')
@section('content')

    <div>
        <a href="{{ route('user.index') }}" class="view ">View All</a>
    </div>

<form class="blah">

<div class="card-header">

		<div class="row">
			<div class="col col-md-6"><b>User Info:</b></div>
			<div class="col col-md-6">

			</div>
		</div>
	</div>
    <div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Name:</b></label>

				{{ $user->Name }}

		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Email:</b></label>
				{{ $user->email }}
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Number:</b></label>

				{{ $user->number }}

		</div>
        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Age:</b></label>

				{{ $user->age }}

		</div>
        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Role:</b></label>

				{{ $user->roles }}
			</div>
		</div>
        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Recommendation:</b></label>

				{{ $user->recommend }}

		</div>

        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Options:</b></label>

				  @foreach ($user->options as $option)
                  {{ $option }},
                  @endforeach
		</div>

        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Comment:</b></label>

				{{ $user->comment }}

		</div>
    </div>
</form>
@endsection('content')
