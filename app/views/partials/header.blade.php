<a href="#" id="header_open"><span>B</span>Menu</a>
<div id="header" class="">
    <a href="#"><span>@</span>Home</a>
    <a href="{{ URL::action('user.show', array('user' => Auth::user()->id )) }}"><span>.</span>Profile</a>
    <a href="{{ URL::action('event.index') }}"><span>;</span><em>1</em>Events</a>
    <a href="{{ URL::to('logout') }}"><span>,</span>Logout</a>
</div>