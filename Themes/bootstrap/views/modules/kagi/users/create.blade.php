@extends($theme_back)


{{-- Web site Title --}}
@section('title')
{{ Lang::choice('core::account.user', 2) }} :: @parent
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
	<p class="pull-right">
	<a href="/admin/users" class="btn btn-default" title="{{ trans('core::button.back') }}">
		<i class="fa fa-chevron-left fa-fw"></i>
		{{ trans('core::button.back') }}
	</a>
	</p>
	<i class="fa fa-edit fa-lg"></i>
	{{ trans('core::account.command.create') }}
	<hr>
</h1>
</div>

<div class="row">
{!! Form::open([
	'url' => 'admin/users',
	'method' => 'POST',
	'class' => 'form'
]) !!}

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
		<input type="text" id="name" name="name" placeholder="{{ trans('core::account.name') }}" class="form-control" autofocus="autofocus">
</div>
</div>

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
		<input type="text" id="email" name="email" placeholder="{{ trans('core::account.email') }}" class="form-control">
</div>
</div>

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
		<input type="password" id="password" name="password" placeholder="{{ trans('core::auth.password') }}" class="form-control">
</div>
</div>

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-key fa-fw fa-rotate-180"></i></span>
		<input type="password" id="password_confirmation" name="password_confirmation" placeholder="{{ trans('core::auth.password_confirmation') }}" class="form-control">
</div>
</div>

<div class="form-group">

	<label class="checkbox-inline">
		<input type="checkbox" id="blocked" name="blocked" value="1">
		&nbsp;{{ trans('core::general.blocked') }}
	</label>

	<label class="checkbox-inline">
		<input type="checkbox" id="banned" name="banned" value="1">
		&nbsp;{{ trans('core::general.banned') }}
	</label>

	<label class="checkbox-inline">
		<input type="checkbox" id="confirmed" name="confirmed" value="1">
		&nbsp;{{ trans('core::general.confirmed') }}
	</label>

	<label class="checkbox-inline">
		<input type="checkbox" id="activated" name="activated" value="1">
		&nbsp;{{ trans('core::general.activated') }}
	</label>

	<label class="checkbox-inline">
		<input type="checkbox" id="allow_direct" name="allow_direct" value="1">
		&nbsp;{{ trans('core::auth.allow_direct') }}
	</label>

</div>

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
<a class="btn btn-default btn-block action_confirm" data-method="delete" title="{{ trans('core::general.command.delete') }}" onclick="">
	<i class="fa fa-trash-o fa-fw"></i>
	{{ trans('core::general.command.delete') }}
</a>
</div>
</div>

{!! Form::close() !!}

</div> <!-- ./ row -->

@stop
