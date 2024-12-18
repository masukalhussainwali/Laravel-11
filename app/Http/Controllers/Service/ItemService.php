<?php

namespace App\Http\Controllers\Service;

use App\Models\Item;
use Illuminate\Database\Eloquent\Collection;

class ItemService
{
    /**
     * Retrieve all items.
     *
     * @return Collection
     */
    public function getAllItems(): Collection
    {
        return Item::all();
    }

    /**
     * Retrieve a single item by ID.
     *
     * @param int $id
     * @return Item
     */
    public function getItemById(int $id): Item
    {
        return Item::findOrFail($id);
    }

    /**
     * Create a new item.
     *
     * @param $request
     * @return Item
     */
    public function createItem($request): Item
    {
        return Item::create($request);
    }

    /**
     * Update an existing item by ID.
     *
     * @param int $id
     * @param array $data
     * @return Item
     */
    public function updateItem(array $data, int $id): Item
    {
        $item = Item::findOrFail($id);

        $item->update($data);
        return $item;
    }

    /**
     * Delete an item by ID.
     *
     * @param int $id
     * @return bool
     */
    public function deleteItem(int $id): bool
    {
        $item = Item::findOrFail($id);

        return $item ? $item->delete() : false;
    }
}
