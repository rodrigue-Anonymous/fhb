<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->delete();

        $this->createGrades();
    }

    protected function createGrades()
    {

        // $d = [

        //     ['name' => 'A', 'mark_from' => 70, 'mark_to' => 100, 'remark' => 'Excellent'],
        //     ['name' => 'B', 'mark_from' => 60, 'mark_to' => 69, 'remark' => 'Very Good'],
        //     ['name' => 'C', 'mark_from' => 50, 'mark_to' => 59, 'remark' => 'Good'],
        //     ['name' => 'D', 'mark_from' => 45, 'mark_to' => 49, 'remark' => 'Pass'],
        //     ['name' => 'E', 'mark_from' => 40, 'mark_to' => 44, 'remark' => 'Poor'],
        //     ['name' => 'F', 'mark_from' => 0, 'mark_to' => 39, 'remark' => 'Fail'],


        // ];

        $d = [

            ['name' => 'A+', 'mark_from' => 19, 'mark_to' => 20, 'remark' => 'Excellent'],
            ['name' => 'A+', 'mark_from' => 16.01, 'mark_to' => 18.99, 'remark' => 'Très-bien'],
            ['name' => 'A', 'mark_from' => 16, 'mark_to' => 16, 'remark' => 'Bien'],
            ['name' => 'A-', 'mark_from' => 15, 'mark_to' => 15.99, 'remark' => 'Bien'],
            ['name' => 'B+', 'mark_from' => 14.01, 'mark_to' => 14.99, 'remark' => 'Bien'],
            ['name' => 'B', 'mark_from' => 14, 'mark_to' => 14, 'remark' => 'Bien'],
            ['name' => 'B-', 'mark_from' => 13, 'mark_to' => 13.99, 'remark' => 'Assez-bien'],
            ['name' => 'C+', 'mark_from' => 12.01, 'mark_to' => 12.99, 'remark' => 'Assez-bien'],
            ['name' => 'C', 'mark_from' => 12, 'mark_to' => 12, 'remark' => 'Assez-bien'],
            ['name' => 'C-', 'mark_from' => 11, 'mark_to' => 11.99, 'remark' => 'Passable'],
            ['name' => 'D+', 'mark_from' => 10, 'mark_to' => 10.99,'remark' => 'Passable'],
            ['name' => 'D', 'mark_from' => 6, 'mark_to' => 9.99, 'remark' => 'Insuffisant'],
            ['name' => 'D', 'mark_from' => 5, 'mark_to' => 5.99, 'remark' => 'Faible'],
            ['name' => 'E', 'mark_from' => 0.1, 'mark_to' => 4.99, 'remark' => 'Faible'],
            ['name' => 'N/A', 'mark_from' => 0, 'mark_to' => 0, 'remark' => 'Faible'],


        ];
        DB::table('grades')->insert($d);
    }
}
