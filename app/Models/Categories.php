<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static truncate()
 * @method static insert(array $array)
 * @method static findOrFail(int|string $id)
 * @property mixed name
 * @property int|string id
 */
class Categories extends Model
{
    protected $fillable = ['name'];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
