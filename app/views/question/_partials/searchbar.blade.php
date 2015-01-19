<!--<div id="search_wrapper">-->
	<div id="menu_side">
		<a id="side_open" href="#">
			<span>;</span>Events
		</a>
		<div id="sub_menu">
			<span>#</span>
			<input type="text" id="search"/>
			@yield('events')
			<select name="event" id="results" size="6" tabindex="2" >
				{{-- */$i=0;/* --}}
				 @foreach ($events as $event)
				 	{{-- */$i++;/* --}}
				 	@if($i == 1)
				 		<option selected="selected" value="{{$event->id}}">{{ $event->title }}</option>
				 	@else
				 		<option value="{{$event->id}}">{{ $event->title }}</option>
				 	@endif

				 	
				 @endforeach
			</select>
		</div>
	</div>
<!--</div>-->