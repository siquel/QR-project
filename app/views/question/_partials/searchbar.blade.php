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
			 <option value="AL">Alabama</option>
				<option selected value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option> 
				</select>
		</div>
	</div>
<!--</div>-->