@extends($theme_back)


{{-- Web site Title --}}
@section('title')
{{ Lang::choice('core::role.role', 2) }} :: @parent
@stop

@section('styles')
	<link href="{{ asset('assets/vendors/multi-select_v0_9_12/css/multi-select.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendors/illuminate3/css/standard.css') }}" rel="stylesheet">
@stop

@section('scripts')
	<script type="text/javascript" src="{{ asset('assets/vendors/multi-select_v0_9_12/js/jquery.multi-select.js') }}"></script>
@stop

@section('inline-scripts')
	jQuery(document).ready(function($) {
		$('#my-select').multiSelect(
			{
				selectableHeader: "<div class='bg-primary padding-md'>{{ trans('core::general.available') }}</div>",
				selectionHeader: "<div class='bg-primary padding-md'>{{ trans('core::general.assigned') }}</div>"
			}
		)
	});
@stop


{{-- Content --}}
@section('content')


<div class="row">
<h1>
	<p class="pull-right">
	<a href="/admin/roles" class="btn btn-default" title="{{ trans('core::button.back') }}">
		<i class="fa fa-chevron-left fa-fw"></i>
		{{ trans('core::button.back') }}
	</a>
	</p>
	<i class="fa fa-edit fa-lg"></i>
	{{ trans('core::role.command.create') }}
	<hr>
</h1>
</div>

<div class="row">
{!! Form::open([
	'url' => 'admin/roles',
	'method' => 'POST',
	'class' => 'form'
]) !!}

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-gavel fa-fw"></i></span>
		<input type="text" id="name" name="name" placeholder="{{ trans('core::account.name') }}" class="form-control" autofocus="autofocus">
</div>
</div>

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-bookmark fa-fw"></i></span>
		<input type="text" id="slug" name="slug" placeholder="{{ trans('core::general.slug') }}" class="form-control">
</div>
</div>

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-briefcase fa-fw"></i></span>
		<input type="text" id="description" name="description" placeholder="{{ trans('core::general.description') }}" class="form-control">
</div>
</div>

<hr>

@if ($allPermissions != null)
	<h3>
		<i class="fa fa-gavel fa-fw"></i>
		{{ Lang::choice('core::role.role', 2) }}
	</h3>
	<select multiple="multiple" id="my-select" name="my-select[]">
		@foreach ($allPermissions as $key => $value)
			<option value='{{ $key }}'>{{ $value }}</option>
		@endforeach
	</select>
@else
	<div class="alert alert-danger" role="alert">
	{{ trans('core::permission.error.not_found') }}
	</div>
@endif

<hr>

<div class="row">
<div class="col-sm-12">
	<input class="btn btn-success btn-block" type="submit" value="{{ trans('core::button.save') }}">
</div>
</div>

<br>

<div class="row">
<div class="col-sm-4">
	<a href="/admin/roles" class="btn btn-default btn-block" title="{{ trans('core::button.cancel') }}">
		<i class="fa fa-times fa-fw"></i>
		{{ trans('core::button.cancel') }}
	</a>
</div>

<div class="col-sm-4">
	<input class="btn btn-default btn-block" type="reset" value="{{ trans('core::button.reset') }}">
</div>

<div class="col-sm-4">
<a class="btn btn-default btn-block action_confirm" data-method="delete" title="{{ trans('core::general.command.delete') }}" onclick="">
	<i class="fa fa-trash-o fa-fw"></i>
	{{ trans('core::general.command.delete') }}
</a>
</div>
</div>

{!! Form::close() !!}

</div> <!-- ./ row -->

@stop
