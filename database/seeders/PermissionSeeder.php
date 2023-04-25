<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('permissions')->truncate();
        Schema::enableForeignKeyConstraints();
        $permissions = [
            [
              "level" => 1,
              "slug" => "add-organization",
              "name" => "Add organization"
            ],
            [
              "level" => 1,
              "slug" => "get-organizations",
              "name" => "Get organizations"
            ],
            [
              "level" => 1,
              "slug" => "update-organization",
              "name" => "Update organization"
            ],
            [
                "level" => 1,
                "slug" => "delete-organization",
                "name" => "Delete organization"
            ],
            [
                "level" => 1,
                "slug" => "add-user",
                "name" => "Add user"
              ],
              [
                "level" => 1,
                "slug" => "get-users",
                "name" => "Get users"
              ],
              [
                "level" => 1,
                "slug" => "update-user",
                "name" => "Update user"
              ],
              [
                  "level" => 1,
                  "slug" => "delete-user",
                  "name" => "Delete user"
              ],
              [
                "level" => 1,
                "slug" => "add-plan",
                "name" => "Add plan"
              ],
              [
                "level" => 1,
                "slug" => "get-plans",
                "name" => "Get plans"
              ],
              [
                "level" => 1,
                "slug" => "update-plan",
                "name" => "Update plan"
              ],
              [
                  "level" => 1,
                  "slug" => "delete-plan",
                  "name" => "Delete plan"
              ],
            [
              
              "level" => 1,
              "slug" => "add-permission",
              "name" => "Add permission"
            ],
            [
              "level" => 1,
              "slug" => "delete-permission",
              "name" => "Delete permission"
            ],
            [
              
              "level" => 1,
              "slug" => "get-permission",
              "name" => "Get permissions"
            ],
            [
              
              "level" => 1,
              "slug" => "update-permission",
              "name" => "Update permission"
            ],
            [
              
                "level" => 1,
                "slug" => "add-role",
                "name" => "Add role"
              ],
              [
                "level" => 1,
                "slug" => "delete-role",
                "name" => "Delete role"
              ],
              [
                
                "level" => 1,
                "slug" => "get-role",
                "name" => "Get roles"
              ],
              [
                
                "level" => 1,
                "slug" => "update-role",
                "name" => "Update role"
              ],
              
            ];
    
            collect($permissions)->each(function ($permission) {
                Permission::create($permission);
            });
    }
}