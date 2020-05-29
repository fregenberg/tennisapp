<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchdayPlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $players = App\Player::all();

        App\Matchday::all()->each(function ($matchday) use ($players) {
            $matchday->players()->attach(
                $players->pluck('id')->toArray()
            );
        });
    }
}
