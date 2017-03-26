@extends($theme_back)


{{-- Web site Title --}}
@section('title')
{{ Lang::choice('core::account.user', 2) }} :: @parent
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
			selectableFooter: "<div class='bg-primary padding-md'>{{ trans('core::general.available') }}</div>",
			selectionFooter: "<div class='bg-primary padding-md'>{{ trans('core::general.assigned') }}</div>"
		}
	)
});
@stop


{{-- Content --}}
@section('content')


<div class="row">
<h1>
	<p class="pull-right">
	<a href="/admin/users" class="btn btn-default" title="{{ trans('core::button.back') }}">
		<i class="fa fa-chevron-left fa-fw"></i>
		{{ trans('core::button.back') }}
	</a>
	</p>
	<i class="fa fa-edit fa-lg"></i>
	{{ trans('core::general.command.edit') }}
	<hr>
</h1>
</div>

<div class="row">
{!! Form::model(
	$user,
	[
		'route' => ['admin.users.update', $user->id],
		'method' => 'PATCH',
		'class' => 'form'
	]
) !!}

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
		<input type="text" id="name" name="name" value="{{ $user->name }}" placeholder="{{ trans('core::account.name') }}" class="form-control" autofocus="autofocus">
</div>
</div>

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
		<input type="text" id="email" name="email" value="{{ $user->email }}" placeholder="{{ trans('core::account.email') }}" class="form-control">
</div>
</div>

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
		<input type="password" id="password" name="password" value="" placeholder="{{ trans('core::auth.password') }}" class="form-control">
</div>
</div>

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-key fa-fw fa-rotate-180"></i></span>
		<input type="password" id="password_confirmation" name="password_confirmation" value="" placeholder="{{ trans('core::auth.password_confirmation') }}" class="form-control">
</div>
</div>

<div class="form-group">

	<label class="checkbox-inline">
		<input type="checkbox" id="blocked" name="blocked" value="1" {{ $user->present()->blocked }}>
		&nbsp;{{ trans('core::general.blocked') }}
	</label>

	<label class="checkbox-inline">
		<input type="checkbox" id="banned" name="banned" value="1" {{ $user->present()->banned }}>
		&nbsp;{{ trans('core::general.banned') }}
	</label>

	<label class="checkbox-inline">
		<input type="checkbox" id="confirmed" name="confirmed" value="1" {{ $user->present()->confirmed }}>
		&nbsp;{{ trans('core::general.confirmed') }}
	</label>

	<label class="checkbox-inline">
		<input type="checkbox" id="activated" name="activated" value="1" {{ $user->present()->activated }}>
		&nbsp;{{ trans('core::general.activated') }}
	</label>

	<label class="checkbox-inline">
		<input type="checkbox" id="allow_direct" name="allow_direct" value="1" {{ $user->present()->allow_direct }}>
		&nbsp;{{ trans('core::auth.allow_direct') }}
	</label>

</div>

<hr>

@if ($allRoles != null)
	<h3>
		<i class="fa fa-gavel fa-fw"></i>
		{{ Lang::choice('core::role.role', 2) }}
	</h3>
	<select multiple="multiple" id="my-select" name="roles[]">
		@foreach ($allRoles as $key => $value)
			@if (isset($roles[$key]) )
				<option value='{{ $key }}' selected>{{ $value }}</option>
			@else
				<option value='{{ $key }}'>{{ $value }}</option>
			@endif
		@endforeach
	</select>
@else
	<div class="alert alert-danger" role="alert">
	{{ trans('core::role.error.not_found') }}
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
	<a href="/admin/users" class="btn btn-default btn-block" title="{{ trans('core::button.cancel') }}">
		<i class="fa fa-times fa-fw"></i>
		{{ trans('core::button.cancel') }}
	</a>
</div>

<div class="col-sm-4">
	<input class="btn btn-default btn-block" type="reset" value="{{ trans('core::button.reset') }}">
</div>

<div class="col-sm-4">
<!-- Button trigger modal -->
	<a data-toggle="modal" data-target="#myModal" class="btn btn-default btn-block" title="{{ trans('core::button.delete') }}">
		<i class="fa fa-trash-o fa-fw"></i>
		{{ trans('core::general.command.delete') }}
	</a>
</div>
</div>

{!! Form::close() !!}

</div> <!-- ./ row -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	@include($activeTheme . '::' . '_partials.modal')
</div>

@stop
