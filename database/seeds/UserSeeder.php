<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insertOrIgnore([
            ['name' => 'Becker', 'email' => 'boris.b@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Freienberg', 'email' => 'Tennis@TimFreienberg.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ziebarth', 'email' => 'mark.z@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Wendland', 'email' => 'andreas.w@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hamann', 'email' => 'hanjo.h@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Möller', 'email' => 'thorsten.m@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pfeiffer', 'email' => 'christoph.p@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Heckerodt', 'email' => 'stefan.he@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Schmidt', 'email' => 'helge.s@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ganssen', 'email' => 'florian.g@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Beiz', 'email' => 'richard.b@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Johannsen', 'email' => 'christian.j@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Käselau', 'email' => 'stefan.k@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stiehl', 'email' => 'thomas.s@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Voss', 'email' => 'dennis.v@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Veltmann', 'email' => 'karsten.v@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Schaffer', 'email' => 'fin.s@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Linkenbach', 'email' => 'robert.l@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Vegas', 'email' => 'lars.v@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pflueger', 'email' => 'jan.p@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Neumann', 'email' => 'marcus.n@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Havemann', 'email' => 'janphilipp.h@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fehsenfeld', 'email' => 'stephan.f@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Albrecht', 'email' => 'oliver.a@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hejzel', 'email' => 'marek.h@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Peters', 'email' => 'daniel.p@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Zabel', 'email' => 'jan.z@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dastvar', 'email' => 'farsin.d@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Thormann', 'email' => 'stefan.th@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Doll', 'email' => 'thomas.d@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Müller', 'email' => 'markus.m@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hanke', 'email' => 'stefan.ha@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Wieneke-Spohler', 'email' => 'christian.w@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hiekmann', 'email' => 'bjoern.h@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Seitz', 'email' => 'michael.s@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Henke', 'email' => 'martin.h@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Krause', 'email' => 'skule.k@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lojewsky', 'email' => 'thomas.l@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bellmann', 'email' => 'mike.b@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lemke', 'email' => 'kai.l@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Israel', 'email' => 'ingo.i@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Trapp', 'email' => 'stefan.tr@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Körner', 'email' => 'stephan.k@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Schulz', 'email' => 'henning.s@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'von Borne', 'email' => 'szymon.v@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Benna', 'email' => 'bjoern.b@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lemmermann', 'email' => 'mike.l@tennis.de', 'password' => Hash::make('testtest'), 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
