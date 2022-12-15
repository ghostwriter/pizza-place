<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStoreRequest;
use App\Http\Requests\SaveStoreRequest;
use App\Http\Requests\UpdateStoreRequest;
use App\Models\Store;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('store.index', ['stores' => Store::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): ?Response
    {
        return view('store.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateStoreRequest $request): RedirectResponse
    {
        $store = Store::create($request->validated());

        return redirect()->route('stores.show', $store);
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store): View
    {
        return view('store.show', ['store'=>$store]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Store $store): View
    {
        return view('store.edit', ['store'=>$store]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStoreRequest $request, Store $store): RedirectResponse
    {
        $store->update($request->validated());
        return redirect()->route('stores.show', $store);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store): RedirectResponse
    {
        $store->delete();

        return redirect()->route('stores.index');
    }
}
