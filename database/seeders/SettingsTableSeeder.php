<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['type' => 'current_session', 'description' => '2024-2025'],
            ['type' => 'system_title', 'description' => 'ESMA'],
            ['type' => 'system_name', 'description' => 'Ecole  Secondaire des Métiers d\'Art Hermann Gmeiner'],
            ['type' => 'term_ends', 'description' => '7/09/2025'],
            ['type' => 'term_begins', 'description' => '7/06/2025'],
            ['type' => 'phone', 'description' => '+229 01 21 36 07 12'],
            ['type' => 'address', 'description' => 'Abomey Calavi Bénin, SOS'],
            ['type' => 'system_email', 'description' => 'esma@sosvillagesenfantsbenin.org'],
            ['type' => 'alt_email', 'description' => ''],
            ['type' => 'email_host', 'description' => ''],
            ['type' => 'email_pass', 'description' => ''],
            ['type' => 'lock_exam', 'description' => 0],
            ['type' => 'logo', 'description' => ''],
            ['type' => 'next_term_fees_j', 'description' => '100000'],
            ['type' => 'next_term_fees_pn', 'description' => '150000'],
            ['type' => 'next_term_fees_p', 'description' => '250000'],
            ['type' => 'next_term_fees_n', 'description' => '250000'],
            ['type' => 'next_term_fees_s', 'description' => '270000'],
            ['type' => 'next_term_fees_c', 'description' => '270000'],
        ];

        DB::table('settings')->insert($data);

    }
}
