@extends('event._layouts.event')
@section('content')
<div class="pull-right">
            <a class="button" href="{{ URL::action('event.edit', array('event' => $event->id )) }}"><span>&#0063;</span>Edit event</a>
</div>
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