@if ( Module::exists('jinji') )


@if (count($employees))

<h3>
	{{ trans('core::general.staff') }}
</h3>

<table id="table_employees" class="table table-striped table-hover">
	<thead>
		<tr>
			<th>{{ trans('core::table.name') }}</th>
			<th>{{ trans('core::table.email') }}</th>
			<th>{{ trans('core::table.job_title') }}</th>
			<th>{{ trans('core::table.subject') }}</th>

			<th>{{ Lang::choice('core::table.action', 2) }}</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($employees as $employee)
		<tr>
			<td>
				{{ $employee->present()->employeeName($employee->id) }}
			</td>
			<td>
				{{ $employee->present()->employeeEmail($employee->id) }}
			</td>
			<td>
				{{ $employee->present()->employeeJobTitle($employee->id, $locale_id) }}
			</td>
			<td>
				{{ $employee->present()->employeeSubjects($employee->id, $locale_id) }}
			</td>
			<td>
@if ( Auth::user() )
@if (Auth::user()->can('manage_jinji'))
				<a href="{{ URL::to('/admin/employees/' . $employee->id . '/edit' ) }}" class="btn btn-success" >
					<span class="glyphicon glyphicon-pencil"></span>  {{ trans("core::button.edit") }}
				</a>
				<a href="{{ URL::to('/admin/employees/' . $employee->id ) }}" class="btn btn-info" >
					<span class="glyphicon glyphicon-search"></span>  {{ trans("core::button.view") }}
				</a>
@else
				<a href="{{ URL::to('/staff/' . $employee->id ) }}" class="btn btn-info" >
					<span class="glyphicon glyphicon-search"></span>  {{ trans("core::button.view") }}
				</a>
@endif
@endif
			</td>
		</tr>
		@endforeach
	</tbody>
</table>


@else
	<div class="alert alert-info">
		{{ trans('core::general.no_records') }}
	</div>
@endif

@endif
