@extends('layouts.scaffold')

@section('main')

<h1>Show person</h1>

<p>{{ link_to_route('people.index', 'Return to all people') }}</p>

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
		<tr>
			<td>{{{ $person->name }}}</td>
			<td>{{{ $person->email }}}</td>
			<td>{{{ $person->dob }}}</td>
			<td>{{{ $person->marital_status }}}</td>
			<td>{{{ $person->gender }}}</td>
			<td>{{{ $person->phone }}}</td>
			<td>{{{ $person->country }}}</td>
                    <td>{{ link_to_route('people.edit', 'Edit', array($person->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('people.destroy', $person->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
