<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categoriesNames = [
           ' Légumineuses',
            'Céréales',
            'Cultures maraîchères',
            'Tubercules',
            'Agroalimentaire'
        ];

        foreach($categoriesNames as $name){
            Category::create([
                'title' => $name,
                'description' => '',
                'parent_id' => 0
             ]);
        }
        
    }
}
