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
 * @method static findOrFail($id)
 * @property mixed id
 * @property string image
 */
class Product extends Model
{
    use Sortable;

    protected $fillable = ['name', 'description', 'id_category', 'price','brutto','image'];
    public $sortable = ['created_at', 'brutto'];


    public function categories(){
        return $this->hasOne(Categories::class);
    }
}
