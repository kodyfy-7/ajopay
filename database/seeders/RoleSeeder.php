<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('roles')->truncate();
        Schema::enableForeignKeyConstraints();
        $roles = [
            [
              "slug" => "site-admin",
              "name" => "Site Admin"
            ]
        ];
        $permissions = Permission::get();
        collect($roles)->each(function ($role) use ($permissions) {
            $new = Role::create($role);
            $new->permissions()->attach($permissions);
        });
    }
}