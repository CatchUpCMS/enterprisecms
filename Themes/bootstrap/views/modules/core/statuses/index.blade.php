@extends($theme_back)


{{-- Web site Title --}}
@section('title')
{{ Lang::choice('core::general.status', 2) }} :: @parent
@stop

@section('styles')
@stop

@section('scripts')
@stop

@section('inline-scripts')
@stop


{{-- Content --}}
@section('content')

<div class="row">
<h1>
{{--
	<p class="pull-right">
	<a href="/admin/statuses/create" class="btn btn-primary" title="{{ trans('core::button.new') }}">
		<i class="fa fa-plus fa-fw"></i>
		{{ trans('core::button.new') }}
	</a>
	</p>
--}}
	<i class="fa fa-paperclip fa-lg"></i>
		{{ Lang::choice('core::general.status', 2) }}
	<hr>
</h1>
</div>

@if (count($statuses))

<div class="row">
<table id="table" class="table table-striped table-hover">
	<thead>
		<tr>
			<th>{{ trans('core::table.name') }}</th>
			<th>{{ trans('core::table.description') }}</th>
			<th>{{ Lang::choice('core::table.action', 2) }}</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($statuses as $status)
			<tr>
				<td>
					{{ $status->translate($lang)->name }}
				</td>
				<td>
					{{ $status->translate($lang)->description }}
				</td>
				<td>
					<a href="/admin/statuses/{{ $status->id }}/edit" class="btn btn-success" title="{{ trans('core::button.edit') }}">
						<i class="fa fa-pencil fa-fw"></i>
						{{ trans('core::button.edit') }}
					</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
</div>

@else
<div class="alert alert-info">
	{{ trans('core::general.error.not_found') }}
</div>
@endif

</div>
@stop
