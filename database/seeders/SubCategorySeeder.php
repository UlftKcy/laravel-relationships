<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

/**
 * @property mixed id
 * @property mixed name
 * @property mixed category_id
 * @property mixed created_at
 * @property mixed updated_at
 * @property mixed deleted_at
 */
class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::factory()->count(10)->create();
    }
}
