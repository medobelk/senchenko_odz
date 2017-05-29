<?php

use Illuminate\Database\Seeder;
use App\Item;


class ItemsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = Item::all();

        foreach ($items as $item) {
        	for ($i=0; $i < rand(1, 3); $i++) { 
        		DB::table('item_tag')->
        		insert([
        				'item_id'=>$item->id,
        				'tag_id'=>rand(1,9),
        			]);
        	}
        }
    }
}
