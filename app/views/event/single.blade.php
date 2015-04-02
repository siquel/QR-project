@extends('event._layouts.event')
@section('content')
<div class="pull-right">
            <a class="button" href="{{ URL::action('event.edit', array('event' => $event->id )) }}"><span>&#0063;</span>Edit event</a>
</div>
<div>
	Jee jee eventti nimeltää {{{ $event->title }}}
</div>
<div>
	<p>
		{{{ $event->description }}}
	</p>
	<p>
		Created by <strong>{{{ $event->user->username }}}</strong>
	</p>
	<p>Teams</p>
	<ul>
	@foreach ($event->teams as $team)
		<li>{{{ $team->name }}}</li>
	@endforeach
	</ul>
</div>
@stop