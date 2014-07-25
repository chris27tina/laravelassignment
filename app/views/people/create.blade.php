@extends('layouts.scaffold')

@section('main')

<h1>Create Person</h1>

{{ Form::open(array('route' => 'people.store')) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>
        <li>
            {{ Form::label('dob', 'DOB:') }}
            {{ Form::text('dob') }}
        </li>

        <li>
            {{ Form::label('marital_status', 'marital_status:') }}
            {{ Form::text('marital_status') }}
        </li>
        <li>
            {{ Form::label('gender', 'gender:') }}
            {{ Form::text('gender') }}
        </li>

        <li>
            {{ Form::label('phone', 'phone:') }}
            {{ Form::text('phone') }}
        </li>
        <li>
            {{ Form::label('country', 'country:') }}
            {{ Form::text('country') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


