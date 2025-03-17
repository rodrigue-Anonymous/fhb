<?php
namespace Database\Seeders;

use App\Models\Lga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LgasTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('lgas')->delete();

        $state_id = [
            1, 1, 1, 1, 1, 1, // Alibori
            2, 2, 2, 2, 2, 2, 2, 2, 2, // Atacora
            3, 3, 3, 3, 3, 3, 3, 3, // Atlantique
            4, 4, 4, 4, 4, 4, 4, 4, // Borgou
            5, 5, 5, 5, 5, 5, // Collines
            6, 6, 6, 6, 6, 6, // Couffo
            7, 7, 7, 7, // Donga
            8, // Littoral
            9, 9, 9, 9, 9, 9, // Mono
            10, 10, 10, 10, 10, 10, 10, 10, 10, // Ouémé
            11, 11, 11, 11, 11, // Plateau
            12, 12, 12, 12, 12, 12, 12, 12, 12, // Zou
        ];

        $lgas = [
            "Banikoara", "Gogounou", "Kandi", "Karimama", "Malanville", "Ségbana",
            "Boukoumbé", "Cobly", "Kérou", "Kouandé", "Matéri", "Natitingou", "Péhunco", "Tanguiéta", "Toucountouna",
            "Abomey-Calavi", "Allada", "Kpomassè", "Ouidah", "Sô-Ava", "Toffo", "Tori-Bossito", "Zè",
            "Bembéréké", "Kalalé", "N'Dali", "Nikki", "Parakou", "Pèrèrè", "Sinendé", "Tchaourou",
            "Bantè", "Dassa-Zoumè", "Glazoué", "Ouèssè", "Savalou", "Savè",
            "Aplahoué", "Djakotomey", "Dogbo", "Klouékanmè", "Lalo", "Toviklin",
            "Bassila", "Copargo", "Djougou", "Ouaké",
            "Cotonou",
            "Athiémé", "Bopa", "Comè", "Grand-Popo", "Houéyogbé", "Lokossa",
            "Adjarra", "Adjohoun", "Aguégués", "Akpro-Missérété", "Avrankou", "Bonou", "Dangbo", "Porto-Novo", "Sèmè-Kpodji",
            "Adja-Ouèrè", "Ifangni", "Kétou", "Pobè", "Sakété",
            "Abomey", "Agbangnizoun", "Bohicon", "Covè", "Djidja", "Ouinhi", "Zagnanado", "Za-Kpota", "Zogbodomey",
        ];

        for($i=0; $i<count($lgas); $i++){
            Lga::create(['state_id' => $state_id[$i], 'name' => $lgas[$i]]);
        }
    }

}
