@extends($theme_back)


{{-- Web site Title --}}
@section('title')
{{ Lang::choice('core::cms.locale', 2) }} :: @parent
@stop

@section('styles')
	<link href="{{ asset('assets/vendors/DataTables-1.10.7/plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">
@stop

@section('scripts')
	<script src="{{ asset('assets/vendors/DataTables-1.10.7/media/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/DataTables-1.10.7/plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
@stop

@section('inline-scripts')
$(document).ready(function() {
oTable =
	$('#table').DataTable({
	});
});
@stop


{{-- Content --}}
@section('content')


<div class="row">
<h1>
	<p class="pull-right">
	<a href="/admin/locales/create" class="btn btn-primary" title="{{ trans('core::button.new') }}">
		<i class="fa fa-plus fa-fw"></i>
		{{ trans('core::button.new') }}
	</a>
	</p>
	<i class="fa fa-angle-double-right fa-lg"></i>
		{{ Lang::choice('core::cms.locale', 2) }}
	<hr>
</h1>
</div>

<div class="row">
<table id="table" class="table table-striped table-hover">
	<thead>
		<tr>
			<th>{{ Lang::choice('core::table.locale', 1) }}</th>
			<th>{{ trans('core::table.name') }}</th>
			<th>{{ trans('core::table.script') }}</th>
			<th>{{ trans('core::table.native') }}</th>
			<th>{{ trans('core::table.active') }}</th>
			<th>{{ trans('core::table.default') }}</th>

			<th>{{ Lang::choice('core::table.action', 2) }}</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($locales as $locale)
			<tr>
				<td>{{ $locale->locale }}</td>
				<td>{{ $locale->name }}</td>
				<td>{{ $locale->script }}</td>
				<td>{{ $locale->native }}</td>
				<td>{{ $locale->present()->status($locale->active) }}</td>
				<td>{{ $locale->present()->active($locale->default) }}</td>
				<td>
					<a href="/admin/locales/{{ $locale->id }}/edit" class="btn btn-success" title="{{ trans('core::button.edit') }}">
						<i class="fa fa-pencil fa-fw"></i>
						{{ trans('core::button.edit') }}
					</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
</div>

@stop
