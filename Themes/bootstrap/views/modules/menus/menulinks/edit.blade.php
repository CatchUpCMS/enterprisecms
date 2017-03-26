@extends($theme_back)


{{-- Web site Title --}}
@section('title')
{{ Lang::choice('core::general.menu', 2) }} :: @parent
@stop

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/chosen_v1.4.2/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen_bootstrap.css') }}">
@stop

@section('scripts')
	<script type="text/javascript" src="{{ asset('assets/vendors/chosen_v1.4.2/chosen.jquery.min.js') }}"></script>
@stop

@section('inline-scripts')
	jQuery(document).ready(function($) {
		$(".chosen-select").chosen();
	});
@stop


{{-- Content --}}
@section('content')

<div class="row">
<h1>
	<p class="pull-right">
	<a href="/admin/menulinks/{{ $return_id }}" class="btn btn-default" title="{{ trans('core::button.back') }}">
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
	$link,
	[
		'route' => ['admin.menulinks.update', $link->id],
		'method' => 'PATCH',
		'class' => 'form'
	]
) !!}

<div class="col-sm-6">

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
				<label class="col-sm-1 control-label">{{ trans('core::general.title') }}</label>
				<div class="col-sm-11">
					<input type="text" class="form-control" name="{{ 'title_'. $language->id }}" id="{{ 'title_'. $language->id }}" value="{{ $link->translate($language->locale)->title }}" autofocus="autofocus">
				</div>
			</div>

<br>
<br>

			<div class="form-group">
				<label class="col-sm-1 control-label">{{ trans('core::general.url') }}</label>
				<div class="col-sm-11">
					<input type="text" class="form-control" name="{{ 'url_'. $language->id }}" id="{{ 'url_'. $language->id }}" value="{{ $link->translate($language->locale)->url }}">
				</div>
			</div>

<br>
<br>

			<div class="form-group">
				<div class="checkbox">
						{{ trans('core::general.enabled') }}
						&nbsp;
						<input type="radio" name="{{ 'status_'. $language->id }}"  name="{{ 'status_'. $language->id }}" value="1" @if($link->translate($language->locale)->status===1) checked @endif>
						&nbsp;
						{{ trans('core::general.disabled') }}
						&nbsp;
						<input type="radio" name="{{ 'status_'. $language->id }}"  name="{{ 'status_'. $language->id }}" value="0" @if($link->translate($language->locale)->status===0) checked @endif>
{{--
						<input type="radio" name="status"  name="status" value="1" @if($link->translate($language->locale)->status===1) checked @endif>
						&nbsp;
						{{ trans('core::general.disabled') }}
						&nbsp;
						<input type="radio" name="status"  name="status" value="0" @if($link->translate($language->locale)->status===0) checked @endif>
--}}

				</div>
			</div>

	</div><!-- ./ $lang panel -->
	@endforeach

	@endif
	</div><!-- tabcontent -->

</div>
<div class="col-sm-6 margin-top-xl">

	<div class="form-group">
	<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-sort-numeric-asc fa-fw"></i></span>
			<input type="text" id="position" name="position" value="{{ $link->position }}" placeholder="{{ trans('core::cms.position') }}" class="form-control">
	</div>
	</div>


	<div class="form-group">
	<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-css3 fa-fw"></i></span>
			<input type="text" id="class" name="class" value="{{ $link->class }}" placeholder="{{ trans('core::general.class') }}" class="form-control">
	</div>
	</div>

	<div class="form-group padding-bottom-xl">
		<label for="inputDivision" class="col-sm-1 control-label">{{ Lang::choice('core::cms.menu', 1) }}:</label>
		<div class="col-sm-11">
			{!!
				Form::select(
					'menu_id',
					$menus,
					$link->menu_id,
					array(
						'class' => 'form-control chosen-select'
					)
				)
			!!}
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
<div class="col-sm-4">
	<a href="/admin/menulinks/{{ $return_id }}" class="btn btn-default btn-block" title="{{ trans('core::button.cancel') }}">
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
