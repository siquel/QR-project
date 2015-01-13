<?php

class ApiController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function handleEventRequest()
	{
		$start = Input::get('start');
		$start = date("Y-m-d H:i:s", intval($start));
		$end = Input::get('end');
		$end = date("Y-m-d H:i:s", intval($end));
		//$events = DB::table('events')->where('when', '>', $start); //->where('when', '<', $end);
		$response = "";
		$events = MyEvent::where('start', '>', $start)->orderBy('start')->get();

		return Response::json(array($events));
	}


}
