<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed id
 * @property mixed name
 * @property mixed created_at
 * @property mixed updated_at
 * @property mixed deleted_at

 */
class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name'];

    public function subCategory(){
        return $this->hasMany(SubCategory::class);
    }
}
