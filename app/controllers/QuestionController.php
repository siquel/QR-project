<?php
use Carbon\Carbon;
class QuestionController extends \BaseController {


	public function quiz()
	{
		dd(Input::all());
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
		dd(Input::all());
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