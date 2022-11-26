@extends('layouts.master')
@section('content')

<div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div class="col-md-12 text-end mt-4">
        <a class="view" href="{{ route('user.index') }}">Back</a>
    </div>
<form class ="blah" method="GET" action="{{ route('user.edit',$user->id) }}" >
    @csrf
    @method('GET')

    <h1 id="title">Update Form</h1>
        <div>
        <label>Name:</label>
        <input type="text" name= "Name" value="{{ $user->Name }}" placeholder= "Enter your name"  required><br>
      </div>

      <div>
        <label>Email:</label>
        <input type="email" name = "email"  value="{{ $user->email }}" placeholder= "Enter your email" required><br>
      </div>

      <div>
        <label>Number:</label>
        <input  type="number" name = "number" value="{{ $user->number }}" placeholder="Enter a number" min="1" max="99999999999">
      </div>

      <div>
        <label>Age (optional): </label>
        <input  type="number" name = "age" value="{{ $user->age }}" placeholder="Enter a number" min="1" max="100">
      </div>

      <div>
        <p>Which option best describes your current role? </p>
        <select id= "dropdown"  name=" roles" required>
          <option disabled selected value> Select current role</option>
          <option name="roles" value="Student" {{ $user->roles == 'Student' ? 'Selected' : ''}}> Student </option>
          <option name="roles" value="Full Time Job" {{ $user->roles == 'Full Time Job' ? 'Selected' : ''}}> Full Time Job </option>
          <option name="roles" value="Full Time Learner" {{ $user->roles == 'Full Time Learner' ? 'Selected' : ''}}> Full Time Learner </option>
          <option name="roles" value="Prefer not to say" {{ $user->roles == 'Prefer not to say' ? 'Selected' : ''}}> Prefer not to say </option>
          <option name="roles" value="Other" {{ $user->roles == 'Other' ? 'Selected' : ''}}> Other </option>
        </select>
      </div>

    <div>
      <p>Would you recommend freeCodeCamp to a friend?</p>
        <input type="radio" name="recommend" value="Definitely"  {{ $user->recommend == "Definitely" ? 'checked' : '' }}>Definitely
        <br>
        <input type="radio" name="recommend" value="Maybe" {{ $user->recommend == "Maybe" ? 'checked' : '' }}>Maybe
        <br>
        <input type="radio" name="recommend" value="Not sure" {{ $user->recommend == "Not sure" ? 'checked' : '' }}>Not sure
    </div>

    <div>
      <p>What would you like to see improved? (Check all that apply) </p>
      <input type="checkbox" name="options[]" value="Front-end Projects" {{ $user->options == "Front-end Projects" ? 'checked' : '' }}>Front-end Projects
      <br>
      <input type="checkbox" name="options[]" value="Back-end Projects" {{ $user->options == "Back-end Projects" ? 'checked' : '' }}>Back-end Projects
      <br>
      <input type="checkbox" name="options[]" value="Data Visualization" {{ $user->options == "Data Visualization" ? 'checked' : '' }}>Data Visualization
      <br>
      <input type="checkbox" name="options[]" value="Challenges" {{ $user->options == "Challenges" ? 'checked' : '' }}>Challenges
      <br>
      <input type="checkbox" name="options[]" value="Open Source Community" {{ $user->options == "Open Source Community" ? 'checked' : '' }}>Open Source Community
      <br>
      <input type="checkbox" name="options[]" value="Gitter help rooms" {{ $user->options == "Gitter help rooms" ? 'checked' : '' }}>Gitter help rooms
      <br>
      <input type="checkbox" name="options[]" value="Videos" {{ $user->options == "Videos" ? 'checked' : '' }}>Videos<br>
      <input type="checkbox" name="options[]" value="City Meetups" {{ $user->options == "City Meetups" ? 'checked' : '' }}>City Meetups<br>
      <input type="checkbox" name="options[]" value="Wiki" {{ $user->options == "Wiki" ? 'checked' : '' }}>Wiki<br>
      <input type="checkbox" name="options[]" value="Forum" {{ $user->options == "Forum" ? 'checked' : '' }}>Forum<br>
      <input type="checkbox" name="options[]" value="Additional Courses" {{ $user->options == "Additional Courses" ? 'checked' : '' }}>Additional Courses<br>


    </div>

    <div>
      <p>Any comments or suggestions?</p>
      <textarea class="vax" name = "comment" placeholder="Enter your comment here...">{{ $user->comment }}</textarea>
    </div>

    <div>
       <button type="submit" class="btn btn-primary" id="submit">Update Data</button>

    </div>
            </div>
        </div>
    </form>
@endsection
