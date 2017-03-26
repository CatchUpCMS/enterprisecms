@extends($theme_back)


{{-- Web site Title --}}
@section('title')
{{ Lang::choice('core::cms.locale', 2) }} :: @parent
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
	<a href="/admin/locales" class="btn btn-default" title="{{ trans('core::button.back') }}">
		<i class="fa fa-chevron-left fa-fw"></i>
		{{ trans('core::button.back') }}
	</a>
	</p>
	<i class="fa fa-edit fa-lg"></i>
	{{ trans('core::general.command.create') }}
	<hr>
</h1>
</div>

<div class="row">
{!! Form::open([
	'url' => 'admin/locales',
	'method' => 'POST',
	'class' => 'form'
]) !!}

	<div class="form-group">
		<label for="title">{{ trans('core::cms.locale') }}</label>
		<input type="text" class="form-control" name="locale" id="locale" placeholder="{{ trans('core::cms.locale') }}" autofocus="autofocus">
	</div>

	<div class="form-group">
		<label for="title">{{ trans('core::general.name') }}</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="{{ trans('core::general.name') }}">
	</div>

	<div class="form-group">
		<label for="title">{{ trans('core::cms.script') }}</label>
		<input type="text" class="form-control" name="script" id="script" placeholder="{{ trans('core::cms.script') }}">
	</div>

	<div class="form-group">
		<label for="title">{{ trans('core::cms.native') }}</label>
		<input type="text" class="form-control" name="native" id="native" placeholder="{{ trans('core::cms.native') }}">
	</div>

	<div class="form-group">
		<label for="is_timed" class="col-sm-1 control-label">{{ trans('core::general.active') }}</label>
		<div class="col-sm-11">
			<div class="checkbox">
				<label>
					<input type="checkbox" id="active" name="active" value="1">
				</label>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label for="is_timed" class="col-sm-1 control-label">{{ trans('core::general.default') }}</label>
		<div class="col-sm-11">
			<div class="checkbox">
				<label>
					<input type="checkbox" id="default" name="default" value="1">
				</label>
			</div>
		</div>
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
	<a href="/admin/locales" class="btn btn-default btn-block" title="{{ trans('core::button.cancel') }}">
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
