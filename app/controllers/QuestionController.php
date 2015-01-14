<?php

class QuestionController extends \BaseController {


	/**
	 * Show the form for creating a new resource.
	 * GET /question/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('question.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /question
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		$question = Question::find($id);
		return View::make('question.single', compact($question));
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
		$question = Question::find($id);
		return View::make('question.edit', compact($question));
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
		//
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