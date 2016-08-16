@extends('layouts.master')

@section('title')
	<title>Facebook | Login Page</title>
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/login.css"/>
	
	<!--<script type="text/javascript" href="/js/login.js"/>-->
@stop

@section('content')
	@if(Session::has('error_message'))
		<div class="alert alert-danger" role="alert">
			<p align="center">{{Session::get('error_message')}}</p>
		</div>

	@endif

	<div class="container">
		
		<div class="login-triangle"></div>
			<h1 align="center">Welcome To Facebook</h1>
			<h3 align="center">Log in</h3>
		</div>

		
		{{Form::open(['action' => 'AuthenticationController@loginUser', 'method' => 'POST'])}}

		<div class="form-group login-userName">
			{{ Form::email('email', null, [ 'placeholder' => 'Email', 'class' => 'form-control', 'required']) }}
		</div>

		<div class="form-group login-password">
			{{ Form::password("password" , [ 'placeholder' => 'Password', 'class' => 'form-control', 'required'])}}
		</div>
		<div class="submitButton">
			<!-- {{ Form:: submit('Login', [ 'class' => 'btn-primary']) }} -->
			<button class="login_btn">Login</button>
			{{Form::close()}}
		</div>
		<div class="form-group signUpNewAcc">
			<p class="text-center">Don't have an account? 
			<br>
			<a href="/signup">Sign up</a></p>
		</div>
	</div> 

@stop
