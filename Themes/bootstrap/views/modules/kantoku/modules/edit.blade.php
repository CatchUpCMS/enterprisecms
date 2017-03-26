@extends($theme_back)


{{-- Web site Title --}}
@section('title')
{{ Lang::choice('core::module.module', 1) }} :: @parent
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
	<a href="/admin/modules" class="btn btn-default" title="{{ trans('core::button.back') }}">
		<i class="fa fa-chevron-left fa-fw"></i>
		{{ trans('core::button.back') }}
	</a>
	</p>
	<i class="fa fa-edit fa-lg"></i>
		{{ trans('core::general.command.edit') }}:&nbsp;{{ Lang::choice('core::module.module', 1) }}
	<hr>
</h1>
</div>

<div class="row">
{!! Form::open([
	'route' => array('modules.update', $slug)
]) !!}
{{-- Form::hidden('activeModule', $activeModule) --}}

	<div class="form-group">
		<label for="name">{{ trans('core::general.name') }}</label>
		<input type="text" class="form-control" name="name" id="name" value="{{ $name }}" autofocus="autofocus">
	</div>

	<div class="form-group">
		<label for="slug">{{ trans('core::general.slug') }}</label>
		<input type="text" class="form-control" name="slug" id="slug" value="{{ $slug }}">
	</div>

	<div class="form-group">
		<label for="description">{{ trans('core::general.description') }}</label>
		<input type="text" class="form-control" name="description" id="description" value="{{ $description }}">
	</div>

	<div class="form-group">
		<label for="version">{{ trans('core::general.version') }}</label>
		<input type="text" class="form-control" name="version" id="version" value="{{ $version }}">
	</div>

	<div class="form-group">
		<label for="order">{{ trans('core::general.order') }}</label>
		<input type="text" class="form-control" name="order" id="order" value="{{ $order }}">
	</div>

	<label class="checkbox-inline">
		<input type="checkbox" id="enabled" name="enabled" value="1" {{ $checked }}>
		&nbsp;{{ trans('core::general.enable') }}
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
<div class="col-sm-6">
	<a href="/admin/modules" class="btn btn-default btn-block" title="{{ trans('core::button.cancel') }}">
		<i class="fa fa-times fa-fw"></i>
		{{ trans('core::button.cancel') }}
	</a>
</div>

<div class="col-sm-6">
	<input class="btn btn-default btn-block" type="reset" value="{{ trans('core::button.reset') }}">
</div>
</div>

{!! Form::close() !!}

</div> <!-- ./ row -->

@stop
