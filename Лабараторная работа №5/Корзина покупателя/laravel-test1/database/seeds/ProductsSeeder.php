<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'name' => 'LG',
        	'description' => 'Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue.',
        	'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
        	'price' => 3999.00]);
        DB::table('products')->insert([
        	'name' => 'SAMSUNG',
        	'description' => 'Galaxy S9 white,black,yellow',
        	'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
        	'price' => 1059.00]);
        DB::table('products')->insert([
        	'name' => 'HUAWEI',
        	'description' => 'P10 Light black,gold',
        	'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
        	'price' => 4100.00]);
        DB::table('products')->insert([
        	'name' => 'NOKIA',
        	'description' => 'Lumia A10 black',
        	'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
        	'price' => 2750.00]);
        DB::table('products')->insert([
        	'name' => 'MOTOROLLA',
        	'description' => 'XS-150 white,red,black',
        	'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
        	'price' => 7600.00]);
    }
}
