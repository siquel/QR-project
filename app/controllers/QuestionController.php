<?php
use Carbon\Carbon;
class QuestionController extends \BaseController {


	public function quiz()
	{
		if (is_null(Input::get('choice'))) return;

		$user = Auth::user();
		/*$team = $user->teams()->with(['events' => function($query) {
			$query->where('event_id', '=', Input::get('event'));
		}])->get();*/
		$team = $user->teams()->whereHas('events', function($q) {
			$q->where('event_id', '=', Input::get('event'));
		})->get()->first();

		if (is_null($team)) return "null"; //View::make()

		// vastattu jo
		$ans = $team->answered()->where('answer_id', '=', Input::get('choice'))->get()->first();
		if (!is_null($ans))  return "ans not null"; // View::make()

		$count = $team->answered()->where('question_id', '=', Input::get('q'))->count();
		$team->answered()->attach(Input::get('choice'));
		//$team = Team::with('events')->get()->where('event_id', '=', Input::get('event'))->get();
		$queries = DB::getQueryLog();
		$last_query = end($queries);
		dd($last_query);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /question/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$dt = Carbon::now()->toDateTimeString();
		$events = MyEvent::where('start', '>', $dt)->get();
		return View::make('question.create', compact('events'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /question
	 *
	 * @return Response
	 */
	public function store()
	{

		$answers = Input::get('answer');

		$question = Question::create([
			'question' => Input::get('question'),
			'event_id' => Input::get('event'), 
			'user_id' => Auth::id()
			]);

		for ($i = 0; $i < count($answers); $i++) {
			Answer::create([
				'answer' => $answers[$i],
				'question_id' => $question->id,
				'correct' => 0 // todo fix
				]);
		}

		return Redirect::route('question.edit', $question->id);
	}

	/**
	 * Display the specified resource.
	 * GET /question/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$question = Question::with('answers')->get()->find($id);
		return View::make('question.single', compact('question'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /question/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$question = Question::with('answers')->get()->find($id);
		return View::make('question.edit', compact('question'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /question/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$question = Question::find($id);

		$question->update(array('question' => Input::get('question') ));

		$deleted = Input::get('deleted_id');
		$answers = Input::get('answer');
		$answerIds = Input::get('answer_id');
		for ($i = 0; $i < count($answerIds); $i++) {
			if (!$answerIds[$i]) {
				Answer::create([
					'answer' => $answers[$i],
					'correct' => 0, // todo fix
					'question_id' => $id
					]);
			} else {
				$answer = Answer::find($answerIds[$i]);
				$data = array('answer' => $answers[$i]);
				$answer->update($data);
			}
		}


		if (!is_null($deleted)) {
			for ($i = 0; $i < count($deleted); $i++) {
				if ($deleted[$i]) {
					Answer::destroy($deleted[$i]);
				}
			}
		}
		// TODO debug
		return Redirect::route("question.edit", $id);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /question/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}