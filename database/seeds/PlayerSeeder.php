<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insertOrIgnore([  // DB::table('users')->insertGetId->insertOrIgnore([
            ['id' => 1, 'ranking' => 1, 'performance_class' => 'LK1', 'dtb_id' => 16700001, 'firstname' => 'Boris', 'name' => 'Becker', 'nickname' => 'Bobbele', 'tel_private' => '040 87976536', 'tel_mobile' => '0171 29114477', 'birthday' => '', 'email' => 'boris.b@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'ranking' => 27, 'performance_class' => 'LK15', 'dtb_id' => 17451094, 'firstname' => 'Tim', 'name' => 'Freienberg', 'nickname' => '', 'tel_private' => '040 87976551', 'tel_mobile' => '0151 29114492', 'birthday' => '', 'email' => 'Tennis@TimFreienberg.de', 'core_team' => '', 'role' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'ranking' => 13, 'performance_class' => 'LK13', 'dtb_id' => 16751102, 'firstname' => 'Mark', 'name' => 'Ziebarth', 'nickname' => '', 'tel_private' => '040 87976537', 'tel_mobile' => '0171 29114478', 'birthday' => '', 'email' => 'mark.z@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'ranking' => 14, 'performance_class' => 'LK13', 'dtb_id' => 17451060, 'firstname' => 'Andreas', 'name' => 'Wendland', 'nickname' => '', 'tel_private' => '040 87976538', 'tel_mobile' => '0171 29114479', 'birthday' => '', 'email' => 'andreas.w@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'ranking' => 15, 'performance_class' => 'LK13', 'dtb_id' => 17302760, 'firstname' => 'Hanjo', 'name' => 'Hamann', 'nickname' => '', 'tel_private' => '040 87976539', 'tel_mobile' => '0171 29114480', 'birthday' => '', 'email' => 'hanjo.h@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'ranking' => 16, 'performance_class' => 'LK13', 'dtb_id' => 17250847, 'firstname' => 'Thorsten', 'name' => 'Möller', 'nickname' => '', 'tel_private' => '040 87976540', 'tel_mobile' => '0171 29114481', 'birthday' => '', 'email' => 'thorsten.m@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'ranking' => 17, 'performance_class' => 'LK13', 'dtb_id' => 17851878, 'firstname' => 'Christoph', 'name' => 'Pfeiffer', 'nickname' => '', 'tel_private' => '040 87976541', 'tel_mobile' => '0171 29114482', 'birthday' => '', 'email' => 'christoph.p@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'ranking' => 18, 'performance_class' => 'LK13', 'dtb_id' => 16751724, 'firstname' => 'Stefan', 'name' => 'Heckerodt', 'nickname' => '', 'tel_private' => '040 87976542', 'tel_mobile' => '0171 29114483', 'birthday' => '', 'email' => 'stefan.h@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'ranking' => 19, 'performance_class' => 'LK13', 'dtb_id' => 16804547, 'firstname' => 'Helge', 'name' => 'Schmidt', 'nickname' => '', 'tel_private' => '040 87976543', 'tel_mobile' => '0171 29114484', 'birthday' => '', 'email' => 'helge.s@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'ranking' => 20, 'performance_class' => 'LK14', 'dtb_id' => 17450199, 'firstname' => 'Florian', 'name' => 'Ganssen', 'nickname' => '', 'tel_private' => '040 87976544', 'tel_mobile' => '0171 29114485', 'birthday' => '', 'email' => 'florian.g@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'ranking' => 21, 'performance_class' => 'LK14', 'dtb_id' => 17751804, 'firstname' => 'Richard', 'name' => 'Beiz', 'nickname' => '', 'tel_private' => '040 87976545', 'tel_mobile' => '0171 29114486', 'birthday' => '', 'email' => 'richard.b@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'ranking' => 22, 'performance_class' => 'LK14', 'dtb_id' => 17651236, 'firstname' => 'Christian', 'name' => 'Johannsen', 'nickname' => '', 'tel_private' => '040 87976546', 'tel_mobile' => '0171 29114487', 'birthday' => '', 'email' => 'christian.j@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'ranking' => 23, 'performance_class' => 'LK14', 'dtb_id' => 17450037, 'firstname' => 'Stefan', 'name' => 'Käselau', 'nickname' => '', 'tel_private' => '040 87976547', 'tel_mobile' => '0171 29114488', 'birthday' => '', 'email' => 'stefan.k@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'ranking' => 24, 'performance_class' => 'LK14', 'dtb_id' => 17301022, 'firstname' => 'Thomas', 'name' => 'Stiehl', 'nickname' => '', 'tel_private' => '040 87976548', 'tel_mobile' => '0171 29114489', 'birthday' => '', 'email' => 'thomas.s@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'ranking' => 25, 'performance_class' => 'LK14', 'dtb_id' => 17281237, 'firstname' => 'Dennis', 'name' => 'Voss', 'nickname' => '', 'tel_private' => '040 87976549', 'tel_mobile' => '0171 29114490', 'birthday' => '', 'email' => 'dennis.v@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'ranking' => 26, 'performance_class' => 'LK15', 'dtb_id' => 16950127, 'firstname' => 'Karsten', 'name' => 'Veltmann', 'nickname' => '', 'tel_private' => '040 87976550', 'tel_mobile' => '0171 29114491', 'birthday' => '', 'email' => 'karsten.v@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'ranking' => 28, 'performance_class' => 'LK15', 'dtb_id' => 17900134, 'firstname' => 'Fin', 'name' => 'Schaffer', 'nickname' => '', 'tel_private' => '040 87976552', 'tel_mobile' => '0171 29114493', 'birthday' => '', 'email' => 'fin.s@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'ranking' => 29, 'performance_class' => 'LK15', 'dtb_id' => 17652314, 'firstname' => 'Robert', 'name' => 'Linkenbach', 'nickname' => '', 'tel_private' => '040 87976553', 'tel_mobile' => '0171 29114494', 'birthday' => '', 'email' => 'robert.l@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'ranking' => 30, 'performance_class' => 'LK16', 'dtb_id' => 17250065, 'firstname' => 'Lars', 'name' => 'Vegas', 'nickname' => '', 'tel_private' => '040 87976554', 'tel_mobile' => '0171 29114495', 'birthday' => '', 'email' => 'lars.v@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'ranking' => 31, 'performance_class' => 'LK16', 'dtb_id' => 17551533, 'firstname' => 'Jan', 'name' => 'Pflueger', 'nickname' => '', 'tel_private' => '040 87976555', 'tel_mobile' => '0171 29114496', 'birthday' => '', 'email' => 'jan.p@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'ranking' => 32, 'performance_class' => 'LK16', 'dtb_id' => 16850994, 'firstname' => 'Marcus', 'name' => 'Neumann', 'nickname' => '', 'tel_private' => '040 87976556', 'tel_mobile' => '0171 29114497', 'birthday' => '', 'email' => 'marcus.n@tennis.de', 'core_team' => '', 'role' => 'Captain', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'ranking' => 33, 'performance_class' => 'LK16', 'dtb_id' => 17652451, 'firstname' => 'Jan Philipp', 'name' => 'Havemann', 'nickname' => '', 'tel_private' => '040 87976557', 'tel_mobile' => '0171 29114498', 'birthday' => '', 'email' => 'jan philipp.h@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 23, 'ranking' => 34, 'performance_class' => 'LK17', 'dtb_id' => 16351260, 'firstname' => 'Stephan', 'name' => 'Fehsenfeld', 'nickname' => '', 'tel_private' => '040 87976558', 'tel_mobile' => '0171 29114499', 'birthday' => '', 'email' => 'stephan.f@tennis.de', 'core_team' => 'Captain', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'ranking' => 35, 'performance_class' => 'LK17', 'dtb_id' => 17100098, 'firstname' => 'Oliver', 'name' => 'Albrecht', 'nickname' => '', 'tel_private' => '040 87976559', 'tel_mobile' => '0171 29114500', 'birthday' => '', 'email' => 'oliver.a@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 25, 'ranking' => 36, 'performance_class' => 'LK18', 'dtb_id' => 17050727, 'firstname' => 'Marek', 'name' => 'Hejzel', 'nickname' => '', 'tel_private' => '040 87976560', 'tel_mobile' => '0171 29114501', 'birthday' => '', 'email' => 'marek.h@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 26, 'ranking' => 37, 'performance_class' => 'LK18', 'dtb_id' => 17450727, 'firstname' => 'Daniel', 'name' => 'Peters', 'nickname' => '', 'tel_private' => '040 87976561', 'tel_mobile' => '0171 29114502', 'birthday' => '', 'email' => 'daniel.p@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 27, 'ranking' => 38, 'performance_class' => 'LK19', 'dtb_id' => 17401080, 'firstname' => 'Jan', 'name' => 'Zabel', 'nickname' => '', 'tel_private' => '040 87976562', 'tel_mobile' => '0171 29114503', 'birthday' => '', 'email' => 'jan.z@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 28, 'ranking' => 39, 'performance_class' => 'LK20', 'dtb_id' => 17250723, 'firstname' => 'Farsin', 'name' => 'Dastvar', 'nickname' => '', 'tel_private' => '040 87976563', 'tel_mobile' => '0171 29114504', 'birthday' => '', 'email' => 'farsin.d@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 29, 'ranking' => 40, 'performance_class' => 'LK20', 'dtb_id' => 16162126, 'firstname' => 'Stefan', 'name' => 'Thormann', 'nickname' => '', 'tel_private' => '040 87976564', 'tel_mobile' => '0171 29114505', 'birthday' => '', 'email' => 'stefan.t@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 30, 'ranking' => 41, 'performance_class' => 'LK20', 'dtb_id' => 17050732, 'firstname' => 'Thomas', 'name' => 'Doll', 'nickname' => '', 'tel_private' => '040 87976565', 'tel_mobile' => '0171 29114506', 'birthday' => '', 'email' => 'thomas.d@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 31, 'ranking' => 42, 'performance_class' => 'LK20', 'dtb_id' => 17452378, 'firstname' => 'Markus', 'name' => 'Müller', 'nickname' => '', 'tel_private' => '040 87976566', 'tel_mobile' => '0171 29114507', 'birthday' => '', 'email' => 'markus.m@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 32, 'ranking' => 43, 'performance_class' => 'LK21', 'dtb_id' => 16453655, 'firstname' => 'Stefan', 'name' => 'Hanke', 'nickname' => '', 'tel_private' => '040 87976567', 'tel_mobile' => '0171 29114508', 'birthday' => '', 'email' => 'stefan.h@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 33, 'ranking' => 44, 'performance_class' => 'LK21', 'dtb_id' => 16351869, 'firstname' => 'Christian', 'name' => 'Wieneke-Spohler', 'nickname' => '', 'tel_private' => '040 87976568', 'tel_mobile' => '0171 29114509', 'birthday' => '', 'email' => 'christian.w@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 34, 'ranking' => 45, 'performance_class' => 'LK21', 'dtb_id' => 17550224, 'firstname' => 'Björn', 'name' => 'Hiekmann', 'nickname' => '', 'tel_private' => '040 87976569', 'tel_mobile' => '0171 29114510', 'birthday' => '', 'email' => 'björn.h@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 35, 'ranking' => 46, 'performance_class' => 'LK22', 'dtb_id' => 17351339, 'firstname' => 'Michael', 'name' => 'Seitz', 'nickname' => '', 'tel_private' => '040 87976570', 'tel_mobile' => '0171 29114511', 'birthday' => '', 'email' => 'michael.s@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 36, 'ranking' => 47, 'performance_class' => 'LK22', 'dtb_id' => 16751728, 'firstname' => 'Martin', 'name' => 'Henke', 'nickname' => '', 'tel_private' => '040 87976571', 'tel_mobile' => '0171 29114512', 'birthday' => '', 'email' => 'martin.h@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 37, 'ranking' => 48, 'performance_class' => 'LK23', 'dtb_id' => 17452379, 'firstname' => 'Skule', 'name' => 'Krause', 'nickname' => '', 'tel_private' => '040 87976572', 'tel_mobile' => '0171 29114513', 'birthday' => '', 'email' => 'skule.k@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 38, 'ranking' => 49, 'performance_class' => 'LK23', 'dtb_id' => 15751305, 'firstname' => 'Thomas', 'name' => 'Lojewsky', 'nickname' => '', 'tel_private' => '040 87976573', 'tel_mobile' => '0171 29114514', 'birthday' => '', 'email' => 'thomas.l@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 39, 'ranking' => 50, 'performance_class' => 'LK23', 'dtb_id' => 17053392, 'firstname' => 'Mike', 'name' => 'Bellmann', 'nickname' => '', 'tel_private' => '040 87976574', 'tel_mobile' => '0171 29114515', 'birthday' => '', 'email' => 'mike.b@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 40, 'ranking' => 51, 'performance_class' => 'LK23', 'dtb_id' => 16051225, 'firstname' => 'Kai', 'name' => 'Lemke', 'nickname' => '', 'tel_private' => '040 87976575', 'tel_mobile' => '0171 29114516', 'birthday' => '', 'email' => 'kai.l@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 41, 'ranking' => 52, 'performance_class' => 'LK23', 'dtb_id' => 17851776, 'firstname' => 'Ingo', 'name' => 'Israel', 'nickname' => '', 'tel_private' => '040 87976576', 'tel_mobile' => '0171 29114517', 'birthday' => '', 'email' => 'ingo.i@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 42, 'ranking' => 53, 'performance_class' => 'LK23', 'dtb_id' => 16850991, 'firstname' => 'Stefan', 'name' => 'Trapp', 'nickname' => '', 'tel_private' => '040 87976577', 'tel_mobile' => '0171 29114518', 'birthday' => '', 'email' => 'stefan.t@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 43, 'ranking' => 54, 'performance_class' => 'LK23', 'dtb_id' => 17952367, 'firstname' => 'Stephan', 'name' => 'Körner', 'nickname' => '', 'tel_private' => '040 87976578', 'tel_mobile' => '0171 29114519', 'birthday' => '', 'email' => 'stephan.k@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 44, 'ranking' => 55, 'performance_class' => 'LK23', 'dtb_id' => 17051286, 'firstname' => 'Henning', 'name' => 'Schulz', 'nickname' => '', 'tel_private' => '040 87976579', 'tel_mobile' => '0171 29114520', 'birthday' => '', 'email' => 'henning.s@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 45, 'ranking' => 56, 'performance_class' => 'LK23', 'dtb_id' => 17553462, 'firstname' => 'Szymon', 'name' => 'von Borne', 'nickname' => '', 'tel_private' => '040 87976580', 'tel_mobile' => '0171 29114521', 'birthday' => '', 'email' => 'szymon.v@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 46, 'ranking' => 57, 'performance_class' => 'LK23', 'dtb_id' => 17554056, 'firstname' => 'Björn', 'name' => 'Benna', 'nickname' => '', 'tel_private' => '040 87976581', 'tel_mobile' => '0171 29114522', 'birthday' => '', 'email' => 'björn.b@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 47, 'ranking' => 58, 'performance_class' => 'LK23', 'dtb_id' => 16452612, 'firstname' => 'Mike', 'name' => 'Lemmermann', 'nickname' => '', 'tel_private' => '040 87976582', 'tel_mobile' => '0171 29114523', 'birthday' => '', 'email' => 'mike.l@tennis.de', 'core_team' => '', 'role' => '', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}