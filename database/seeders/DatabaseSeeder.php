<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\AttendenceReport;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

       // 1. Management
        User::create([
            'first_name' => 'Sophea',
            'last_name' => 'Ratanak',
            'username' => 'sophea_r',
            'gender' => 'female',
            'email' => 'sophea.ratanak@example.com',
            'password' => Hash::make('mgt_pass_2026'),
            'profile_picture' => 'https://example.com/profiles/sophea.jpg',
            'position_id' => 1,
            'department_id' => 1,
        ]);

        // 2. Lead Developer
        User::create([
            'first_name' => 'Dara',
            'last_name' => 'Vannak',
            'username' => 'dara_dev',
            'gender' => 'male',
            'email' => 'dara.vannak@dev.com',
            'password' => Hash::make('dev_lead_99'),
            'profile_picture' => 'https://example.com/profiles/dara.jpg',
            'position_id' => 2,
            'department_id' => 2,
        ]);

        // 3. Junior Developer
        User::create([
            'first_name' => 'Borey',
            'last_name' => 'Sok',
            'username' => 'borey_s',
            'gender' => 'male',
            'email' => 'borey.sok@dev.com',
            'password' => Hash::make('junior_123'),
            'profile_picture' => 'https://example.com/profiles/borey.jpg',
            'position_id' => 3,
            'department_id' => 2,
        ]);

        // 4. UI/UX Designer
        User::create([
            'first_name' => 'Serey',
            'last_name' => 'Vibol',
            'username' => 'serey_v',
            'gender' => 'female',
            'email' => 'serey.vibol@design.com',
            'password' => Hash::make('pixel_perfect'),
            'profile_picture' => 'https://example.com/profiles/serey.jpg',
            'position_id' => 4,
            'department_id' => 3,
        ]);

        // 5. HR Specialist
        User::create([
            'first_name' => 'Leakena',
            'last_name' => 'Meas',
            'username' => 'leakena_m',
            'gender' => 'female',
            'email' => 'l.meas@hr.com',
            'password' => Hash::make('hr_secure_77'),
            'profile_picture' => 'https://example.com/profiles/leakena.jpg',
            'position_id' => 5,
            'department_id' => 4,
        ]);

        // 6. Project Manager
        User::create([
            'first_name' => 'Mony',
            'last_name' => 'Chann',
            'username' => 'mony_pm',
            'gender' => 'male',
            'email' => 'mony.chann@projects.com',
            'password' => Hash::make('pm_logic_2026'),
            'profile_picture' => 'https://example.com/profiles/mony.jpg',
            'position_id' => 1,
            'department_id' => 1,
        ]);

        // 7. Backend Engineer
        User::create([
            'first_name' => 'Piseth',
            'last_name' => 'Phal',
            'username' => 'piseth_p',
            'gender' => 'male',
            'email' => 'p.phal@api.com',
            'password' => Hash::make('laravel_fan_9'),
            'profile_picture' => 'https://example.com/profiles/piseth.jpg',
            'position_id' => 2,
            'department_id' => 2,
        ]);

        // 8. Quality Assurance
        User::create([
            'first_name' => 'Chenda',
            'last_name' => 'Keo',
            'username' => 'chenda_qa',
            'gender' => 'female',
            'email' => 'chenda.keo@test.com',
            'password' => Hash::make('no_bugs_allowed'),
            'profile_picture' => 'https://example.com/profiles/chenda.jpg',
            'position_id' => 6,
            'department_id' => 2,
        ]);

        // 9. Marketing Lead
        User::create([
            'first_name' => 'Vatana',
            'last_name' => 'Nhem',
            'username' => 'vatana_n',
            'gender' => 'male',
            'email' => 'v.nhem@market.com',
            'password' => Hash::make('market_grow_26'),
            'profile_picture' => 'https://example.com/profiles/vatana.jpg',
            'position_id' => 1,
            'department_id' => 5,
        ]);

        // 10. Customer Support
        User::create([
            'first_name' => 'Sivorn',
            'last_name' => 'Ang',
            'username' => 'sivorn_a',
            'gender' => 'female',
            'email' => 'sivorn.ang@support.com',
            'password' => Hash::make('help_user_24'),
            'profile_picture' => 'https://example.com/profiles/sivorn.jpg',
            'position_id' => 7,
            'department_id' => 6,
        ]);

        // 11. DevOps Engineer
        User::create([
            'first_name' => 'Tharith',
            'last_name' => 'Im',
            'username' => 'tharith_i',
            'gender' => 'male',
            'email' => 'tharith.im@cloud.com',
            'password' => Hash::make('docker_k8s_7'),
            'profile_picture' => 'https://example.com/profiles/tharith.jpg',
            'position_id' => 8,
            'department_id' => 2,
        ]);

        // 12. Content Writer
        User::create([
            'first_name' => 'Kalyan',
            'last_name' => 'Pich',
            'username' => 'kalyan_p',
            'gender' => 'female',
            'email' => 'k.pich@content.com',
            'password' => Hash::make('writer_life_101'),
            'profile_picture' => 'https://example.com/profiles/kalyan.jpg',
            'position_id' => 9,
            'department_id' => 5,
        ]);

        // 13. Financial Analyst
        User::create([
            'first_name' => 'Panha',
            'last_name' => 'Long',
            'username' => 'panha_l',
            'gender' => 'male',
            'email' => 'p.long@finance.com',
            'password' => Hash::make('budget_ctrl_26'),
            'profile_picture' => 'https://example.com/profiles/panha.jpg',
            'position_id' => 10,
            'department_id' => 7,
        ]);

        // 14. Data Scientist
        User::create([
            'first_name' => 'Sothea',
            'last_name' => 'Ouk',
            'username' => 'sothea_o',
            'gender' => 'female',
            'email' => 'sothea.ouk@data.com',
            'password' => Hash::make('python_stats_2'),
            'profile_picture' => 'https://example.com/profiles/sothea.jpg',
            'position_id' => 11,
            'department_id' => 2,
        ]);

        // 15. Security Officer
        User::create([
            'first_name' => 'Chan',
            'last_name' => 'Samnang',
            'username' => 'lucky',
            'gender' => 'male',
            'email' => 'v.ros@security.com',
            'password' => Hash::make('087884298'),
            'profile_picture' => 'https://example.com/profiles/vuthy.jpg',
            'position_id' => 12,
            'department_id' => 8,
        ]);
    }
}
