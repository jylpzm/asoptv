<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Admin;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
        	"full_name" => "super admin",
        	"admin_position" => "superadmin",
        	"email_address" => "superadmin@asoptv.com",
        	"admin_password" => Hash::make("admin123"),
        	"role_id" => "0"
        ]);
        Admin::create([
            "full_name" => "super admin2",
            "admin_position" => "superadmin",
            "email_address" => "superadmin2@asoptv.com",
            "admin_password" => Hash::make("admin123"),
            "role_id" => "0"
        ]);
    }
}
