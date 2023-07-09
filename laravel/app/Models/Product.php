<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property float $price
 */
class Product extends Model
{
    use HasFactory;

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
