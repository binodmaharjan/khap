<?php

use Illuminate\Database\Seeder;

class ReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('reports')->insert([
            'title' => 'Report',
            'path' => 'report/test.pdf',

        ]);
        DB::table('reports')->insert([
            'title' => 'Report1',
            'path' => 'report/test.pdf',

        ]);
        DB::table('reports')->insert([
            'title' => 'Report2',
            'path' => 'report/test.pdf',

        ]);
    }
}
