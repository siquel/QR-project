@extends('event._layouts.event')
@section('content')
<div>
	<h2>Jee jee eventti nimeltää {{{ $event->title }}}</h2>
</div>
<div>
	<p>
		{{{ $event->description }}}
	</p>
	<p>
		Created by <strong>{{{ $event->user->username }}}</strong>
	</p>
</div>
@stop