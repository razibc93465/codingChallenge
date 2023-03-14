<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{

    public function run()
    {
        DB::Insert(
            " INSERT INTO `users` (`uuid`, `first_name`, `last_name`, `email`, `created_at`, `updated_at`) VALUES
('aa', 'Razib', 'Chakraborti', 'razib@gmail.com', NULL, NULL),
('bb', 'Iqbal', 'Hossain', 'iqbal@gmail.com', NULL, NULL),
('cc', 'Foysal', 'Mahmud', 'foysal@gmail.com', NULL, NULL),
('dd', 'Raju', 'Hossain', 'raju@gmail.com', NULL, NULL),
('ee', 'MD', 'Shimul', 'shimul@gmail.com', NULL, NULL),
('ff', 'Robiul', 'Islam', 'robiul@gmail.com', NULL, NULL),
('gg', 'Tanvir', 'Alam', 'tanvir@gmail.com', NULL, NULL),
('hh', 'Raja', 'Mia', 'raja@gmail.com', NULL, NULL),
('ii', 'Shoriful', 'Islam', 'shoriful@gmail.com', NULL, NULL);
"
        );
    }
}
