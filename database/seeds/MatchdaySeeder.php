<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchdaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matchdays')->insertOrIgnore([  // DB::table('users')->insertGetId->insertOrIgnore([
            ['id' => 1, 'gamedate' => '2019-05-01', 'gametime' => '15:00', 'hometeam' => 'Hamburger SV', 'awayteam' => 'THC von Horn und Hamm III', 'venue_street' => 'Ulzburger Straße', 'venue_housenumber' => '94', 'venue_zip' => 22850, 'venue_city' => 'Norderstedt', 'result_hometeam' => 4, 'result_awayteam' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'gamedate' => '2019-05-25', 'gametime' => '14:00', 'hometeam' => 'Aspria', 'awayteam' => 'THC von Horn und Hamm III', 'venue_street' => 'Hofweg', 'venue_housenumber' => '40', 'venue_zip' => 22085, 'venue_city' => 'Hamburg', 'result_hometeam' => 1, 'result_awayteam' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'gamedate' => '2019-06-16', 'gametime' => '09:00', 'hometeam' => 'THC von Horn und Hamm III', 'awayteam' => 'THK Rissen e.V. II', 'venue_street' => 'Saarlandstraße', 'venue_housenumber' => '69', 'venue_zip' => 22303, 'venue_city' => 'Hamburg', 'result_hometeam' => 7, 'result_awayteam' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'gamedate' => '2019-08-10', 'gametime' => '14:00', 'hometeam' => 'THC von Horn und Hamm III', 'awayteam' => 'TG Heimfeld II', 'venue_street' => 'Saarlandstraße', 'venue_housenumber' => '69', 'venue_zip' => 22303, 'venue_city' => 'Hamburg', 'result_hometeam' => 7, 'result_awayteam' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'gamedate' => '2019-09-01', 'gametime' => '09:00', 'hometeam' => 'SC Union 03', 'awayteam' => 'THC von Horn und Hamm III', 'venue_street' => 'Waidmannstraße', 'venue_housenumber' => '17', 'venue_zip' => 22769, 'venue_city' => 'Hamburg', 'result_hometeam' => 8, 'result_awayteam' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'gamedate' => '2020-06-28', 'gametime' => '14:00', 'hometeam' => 'THC von Horn und Hamm III', 'awayteam' => 'TG Elbe Bille', 'venue_street' => 'Saarlandstraße', 'venue_housenumber' => '69', 'venue_zip' => 22303, 'venue_city' => 'Hamburg', 'result_hometeam' => '', 'result_awayteam' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'gamedate' => '2020-08-30', 'gametime' => '09:00', 'hometeam' => 'THC von Horn und Hamm III', 'awayteam' => 'THCC RG Hamburg', 'venue_street' => 'Saarlandstraße', 'venue_housenumber' => '69', 'venue_zip' => 22303, 'venue_city' => 'Hamburg', 'result_hometeam' => '', 'result_awayteam' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'gamedate' => '2020-09-05', 'gametime' => '14:00', 'hometeam' => 'TG Heimfeld', 'awayteam' => 'THC von Horn und Hamm III', 'venue_street' => 'Am Waldschlößchen', 'venue_housenumber' => '1', 'venue_zip' => 21075, 'venue_city' => 'Hamburg', 'result_hometeam' => '', 'result_awayteam' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'gamedate' => '2020-09-12', 'gametime' => '14:00', 'hometeam' => 'TC Groß Borstel II', 'awayteam' => 'THC von Horn und Hamm III', 'venue_street' => 'Paeplowweg', 'venue_housenumber' => '6', 'venue_zip' => 22453, 'venue_city' => 'Hamburg', 'result_hometeam' => '', 'result_awayteam' => '', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
