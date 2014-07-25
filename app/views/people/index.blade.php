@extends('layouts.scaffold')

@section('main')

<h1>All people</h1>

<p>{{ link_to_route('people.create', 'Add new Person') }}</p>

@if ($people->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>DOB</th>
				<th>Marital Status</th>
				<th>Gender</th>
				<th>Phone</th>
				<th>Country</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($people as $person)
				<tr>
					<td>{{{ $person->name }}}</td>
					<td>{{{ $person->email }}}</td>
					<td>{{{ $person->dob }}}</td>
					<td>{{{ $person->marital_status }}}</td>
					<td>{{{ $person->gender }}}</td>
					<td>{{{ $person->phone }}}</td>
					<td>{{{ $person->country }}}</td>
                    <td>{{ link_to_route('people.show', 'Show', array($person->id), array('class' => 'btn btn-info')) }}</td>
                    <td>{{ link_to_route('people.edit', 'Edit', array($person->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('people.destroy', $person->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no people
@endif

@stop
