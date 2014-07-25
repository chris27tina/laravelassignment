@extends('layouts.scaffold')

@section('main')

<h1>Edit person</h1>
{{ Form::model($person, array('method' => 'PATCH', 'route' => array('people.update', $person->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('people.show', 'Cancel', $person->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
