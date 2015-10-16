<?php

namespace DreamsArk\Http\Controllers\Project\Idea;

use DreamsArk\Http\Requests;
use DreamsArk\Http\Controllers\Controller;
use DreamsArk\Models\Project\Idea\Idea;
use DreamsArk\Repositories\Project\Idea\IdeaRepositoryInterface;

class IdeaController extends Controller
{
    /**
     * IdeaController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show Ideas Page
     *
     * @param IdeaRepositoryInterface $repository
     * @return \Illuminate\View\View
     */
    public function index(IdeaRepositoryInterface $repository)
    {
        return view('project.idea.index')->with('ideas', $repository->all());
    }

    /**
     * Display the specified resource.
     *
     * @param Idea $idea
     * @return \Illuminate\Http\Response
     */
    public function show(Idea $idea)
    {
        return view('project.idea.show')->with('idea', $idea);
    }

}
