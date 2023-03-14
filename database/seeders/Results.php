<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Results extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Insert(
            " INSERT INTO `results` (`mark`, `subject`, `student_id`, `created_at`, `updated_at`) VALUES
            ('40.00', 'English', '151', NULL, NULL),
            ('50.00', 'English', '152', NULL, NULL),
            ('60.00', 'English', '153', NULL, NULL),
            ('70.00', 'English', '154', NULL, NULL),
            ('80.00', 'English', '155', NULL, NULL),
            ('90.00', 'English', '156', NULL, NULL),
            ('85.00', 'English', '157', NULL, NULL),
            ('77.00', 'English', '158', NULL, NULL);

"
        );
    }
}
