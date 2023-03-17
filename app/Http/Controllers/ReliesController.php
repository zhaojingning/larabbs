<?php

namespace App\Http\Controllers;

use App\Models\Rely;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RelyRequest;

class ReliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$relies = Rely::paginate();
		return view('relies.index', compact('relies'));
	}

    public function show(Rely $rely)
    {
        return view('relies.show', compact('rely'));
    }

	public function create(Rely $rely)
	{
		return view('relies.create_and_edit', compact('rely'));
	}

	public function store(RelyRequest $request)
	{
		$rely = Rely::create($request->all());
		return redirect()->route('relies.show', $rely->id)->with('message', 'Created successfully.');
	}

	public function edit(Rely $rely)
	{
        $this->authorize('update', $rely);
		return view('relies.create_and_edit', compact('rely'));
	}

	public function update(RelyRequest $request, Rely $rely)
	{
		$this->authorize('update', $rely);
		$rely->update($request->all());

		return redirect()->route('relies.show', $rely->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Rely $rely)
	{
		$this->authorize('destroy', $rely);
		$rely->delete();

		return redirect()->route('relies.index')->with('message', 'Deleted successfully.');
	}
}