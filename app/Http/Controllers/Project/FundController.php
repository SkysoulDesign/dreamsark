<?php

namespace DreamsArk\Http\Controllers\Project;

use DreamsArk\Commands\Project\Expenditure\BackProjectExpenditureCommand;
use DreamsArk\Http\Controllers\Controller;
use DreamsArk\Http\Requests;
use DreamsArk\Models\Project\Expenditures\Expenditure;
use DreamsArk\Models\Project\Project;
use Illuminate\Http\Request;

class FundController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        return view('project.fund.create')->with('project', $project);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Expenditure $expenditure
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Expenditure $expenditure, Request $request)
    {
        $this->dispatch(new BackProjectExpenditureCommand($expenditure, $request->user(), $request->get('amount')));
        return redirect()->back();
    }

}
