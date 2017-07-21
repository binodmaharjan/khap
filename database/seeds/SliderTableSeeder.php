<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('slider')->insert([
            'title' => 'Slider',
            'path' => 'report/test.pdf',

        ]);

    }
}
