<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

/**
 * @method static truncate()
 * @method static insert(array $array)
 * @method static find($id)
 * @method static where(string $string)
 * @method static select(string $string)
 * @method static sortable()
 * @property mixed id
 */
class Product extends Model
{
    use Sortable;

    protected $fillable = ['name', 'description', 'id_category', 'price','vat'];
    public $sortable = ['id', 'name', 'details', 'created_at', 'updated_at'];
}
