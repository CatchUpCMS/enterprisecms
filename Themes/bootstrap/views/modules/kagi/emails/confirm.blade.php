<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>

		<h2>
			{{ Config::get('kagi.site_name') }}
			&nbsp;:&nbsp;
			{{ trans('core::email.confirmation.confirm') }}
		</h2>

		<div>
			{{ trans('core::email.click_to_confirm') }}
			&nbsp;:&nbsp;
			<a href="{{ url('auth/confirm/'.$confirmation_code) }}">
				{{ trans('core::email.confirmation_link') }}
			</a>
			<br>
			<br>
			{{ url('auth/confirm/'.$confirmation_code) }}
		</div>

	</body>
</html>
