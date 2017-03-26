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
	<p class="pull-right">
	<a href="/admin/statuses" class="btn btn-default" title="{{ trans('core::button.back') }}">
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
	'url' => 'admin/statuses',
	'method' => 'POST',
	'class' => 'form'
]) !!}

	<div class="tab-content">

	@if (count($languages))

	<ul class="nav nav-tabs">
		@foreach( $languages as $language)
			<li class="@if ($language->locale == $lang)active @endif">
				<a href="#{{ $language->id }}" data-target="#lang_{{ $language->id }}" data-toggle="tab">{{{ $language->name }}}</a>
			</li>
		@endforeach
	</ul>

	@foreach( $languages as $language)
	<div role="tabpanel" class="tab-pane padding fade @if ($language->locale == $lang)in active @endif" id="lang_{{{ $language->id }}}">

			<div class="form-group">
				<label for="title">{{ trans('core::account.name') }}</label>
				<input type="text" class="form-control" name="{{ 'name_'. $language->id }}" id="{{ 'name_'. $language->id }}" placeholder="{{ trans('core::account.name') }}">
			</div>

			<div class="form-group">
				<label for="title">{{ trans('core::general.description') }}</label>
				<input type="text" class="form-control" name="{{ 'description_'. $language->id }}" id="{{ 'description_'. $language->id }}" placeholder="{{ trans('core::general.description') }}">
			</div>

	</div><!-- ./ $lang panel -->
	@endforeach

	@endif

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
	<a href="/admin/statuses" class="btn btn-default btn-block" title="{{ trans('core::button.cancel') }}">
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
