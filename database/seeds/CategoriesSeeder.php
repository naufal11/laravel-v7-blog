<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = ['Beaches','Mountain Areas','Cultural Sites'];

        for($i=0;$i<count($input);$i++){
            $data[$i] = [
               'name' => $input[$i],
            ];
        }
        
        DB::table('categories')->insert($data);
    }
}
