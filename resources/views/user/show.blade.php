@extends('layouts.master')
@section('content')
<form class="blah">
<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>User Info</b></div>
			<div class="col col-md-6">
				<a href="{{ route('user.index') }}" class="btn btn-primary btn-sm ">View All</a>
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
			<label class="col-sm-2 col-label-form"><b>Option:</b></label>

				{{ $user->options }}

		</div>
        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Comment:</b></label>

				{{ $user->comment }}

		</div>
    </div>
</form>
@endsection('content')
