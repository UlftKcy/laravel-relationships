<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed id
 * @property mixed name
 * @property mixed description
 * @property mixed type
 * @property mixed price
 * @property mixed quantity_in_stock
 * @property mixed created_at
 * @property mixed updated_at
 * @property mixed deleted_at
 * @property mixed sub_category_id
 */
class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'type', 'price', 'quantity_in_stock'];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
