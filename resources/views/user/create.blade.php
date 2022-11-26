@extends('layouts.master')
@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"></div>
			<div class="col col-md-6">
<a href="{{ route('user.index') }}" class="view">View List</a>
			</div>
		</div>
	</div>

  @if(Session::has('success'))
  <div class="alert alert-success">
      {{ Session::get('success') }}
      @php
          Session::forget('success');
      @endphp
  </div>
  @endif

<body>
      <h1 id="title">Free Code Camp Survey Form</h1>

  <form class = "blah" id="survey-form" action="{{ route('user.store') }}"  method="post">
    @csrf
 <div>
    <label id="name-label" for = "name">Name:</label>
    <input id="name" type="text" name= "Name" placeholder= "Enter your name"  required><br>
    @if ($errors->has('Name'))
    <span class="text-danger">{{ $errors->first('Name') }}</span>
@endif
  </div>

  <div>
    <label id="email-label" for = "email">Email:</label>
    <input id="email" type="email" name = "email" required placeholder= "Enter your email"><br>
    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
@endif
  </div>

  <div>
    <label id="number-label" for = "number">Number:</label>
    <input id="number" type="number" name = "number" placeholder="Enter a number" min="1" max="99999999999">
  </div>

  <div>
    <label id="age-label" for = "number">Age (optional): </label>
    <input id="number" type="number" name = "age" placeholder="Enter a number" min="1" max="100">
  </div>

  <div>
    <p>Which option best describes your current role? </p>
    <select id= "dropdown" name=" roles" required>
      <option disabled selected value> Select current role</option>
      <option  value="Student"> Student </option>
      <option  value="Full Time Job"> Full Time Job </option>
      <option  value="Full Time Learner"> Full Time Learner </option>
      <option  value="Prefer not to say"> Prefer not to say </option>
      <option  value="Other"> Other </option>
    </select>
  </div>

<div>
  <p>Would you recommend freeCodeCamp to a friend?</p>
    <input type="radio" name="recommend" value="Definitely">Definitely
    <br>
    <input type="radio" name="recommend" value="Maybe">Maybe
    <br>
    <input type="radio" name="recommend" value="Not sure">Not sure
</div>

<div>
  <p>What would you like to see improved? (Check all that apply) </p>
  <input type="checkbox" name="options[]" value="Front-end Projects">Front-end Projects
  <br>
  <input type="checkbox" name="options[]" value="Back-end Projects">Back-end Projects
  <br>
  <input type="checkbox" name="options[]" value="Data Visualization">Data Visualization
  <br>
  <input type="checkbox" name="options[]" value="Challenges">Challenges
  <br>
  <input type="checkbox" name="options[]" value="Open Source Community">Open Source Community
  <br>
  <input type="checkbox" name="options[]" value="Gitter help rooms">Gitter help rooms
  <br>
  <input type="checkbox" name="options[]" value="Videos">Videos<br>
  <input type="checkbox" name="options[]" value="City Meetups">City Meetups<br>
  <input type="checkbox" name="options[]" value="Wiki">Wiki<br>
  <input type="checkbox" name="options[]" value="Forum">Forum<br>
  <input type="checkbox" name="options[]" value="Additional Courses">Additional Courses<br>

</div>

<div>
  <p>Any comments or suggestions?</p>
  <textarea class="vax" name = "comment" placeholder="Enter your comment here..."></textarea>
</div>

<div>
  <input type="submit" id="submit">
</div>
</body>
<script>
  if ($("#survey-form").length > 0) {
      $('#survey-form').validate({
          rules: {
              Name: {
                  alpha : true,
                  minlength:3
              },
              email: {
                  required: true,
              },
          },
          messages: {
            Name:{
                alpha:"Name field must only contain letters",
                minlength:"Name must atleast contain 3 char",
            },
            email{
                required: "Please enter a valid email",
            },
          },

          })
      }

</script>
</form>
</html>

