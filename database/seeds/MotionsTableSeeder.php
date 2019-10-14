<?php

use Illuminate\Database\Seeder;
use App\Repositorys\Models\Motion as Motion;

class MotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motions')->truncate();

        $motions = [
            [
                'name' => '腹筋',
                'mets' => 3.8
            ],
            [
                'name' => '腕立て',
                'mets' => 3.8
            ],

        ];

        foreach($motions as $motion){
            Motion::create($motion);
        }
    }
}
