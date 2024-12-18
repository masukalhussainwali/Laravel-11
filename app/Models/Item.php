<?php

namespace App\Models;

use Database\Factories\ItemFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Specify the table name if it does not follow Laravel's naming convention
    // protected $table = 'items';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'name',
        'description',
        'quantity',
    ];

    /**
     * Define the default attributes for the model.
     *
     * @var array
     */
    protected $attributes = [
        'description' => null,
        'quantity' => 0,
    ];

    // Define the factory relationship
    protected static function newFactory()
    {
        return ItemFactory::new();
    }

}
