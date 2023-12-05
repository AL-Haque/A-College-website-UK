<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminImportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([

            'username' =>'Admin',
            'password' => bcrypt('111111')
        ]);

        echo "Main admin created/r/n";


        // for ($i = 0; $i < 10; $i++) {
        //     $admin = Admin::create([

        //         'username' => 'Admin_'. rand(1000, 9999),
        //         'password' => bcrypt('111111')
        //     ]);

        //     echo $admin->username . "created/r/n";
        // }
    }
}
