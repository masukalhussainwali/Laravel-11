<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Controllers\Service\ItemService;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

class ItemController extends Controller
{
    /**
     * Service for handling item-related business logic.
     *
     * @var ItemService
     */
    private ItemService $itemService;

    /**
     * Constructor to inject the ItemService dependency.
     *
     * @param ItemService $itemService Handles operations related to items.
     */
    public function __construct(ItemService $itemService){
        $this->itemService = $itemService;
    }

    /**
     * Display a listing of the item.
     */
    public function index(): View
    {
        $items = $this->itemService->getAllItems();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new item.
     */
    public function create(): View
    {
        return view('items.create');
    }

    /**
     * Store a newly created item in storage.
     */
    public function store(StoreItemRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();
        $this->itemService->createItem($validatedData);
        return redirect()->route('items.index')->with('success', 'Item created successfully.');
    }

    /**
     * Display the specified item.
     */
    public function show($id): View
    {
        $item = $this->itemService->getItemById($id);
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified item.
     */
    public function edit($id): View
    {
        $item = $this->itemService->getItemById($id);
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified item in storage.
     */
    public function update(UpdateItemRequest $request, $id): RedirectResponse
    {
        $validatedData = $request->validated();
        $this->itemService->updateItem($validatedData, $id);
        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }

    /**
     * Remove the specified item from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $this->itemService->deleteItem($id);
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }
}
