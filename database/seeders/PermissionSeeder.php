<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=[
            'category-list','category-create','category-edit','category-delete',
            'color-list', 'color-create', 'color-edit', 'color-delete',
            'image-list','image-create','image-edit','image-delete',
            'product-list','product-create','product-edit','product-delete',
            'size-list','size-create','size-edit','size-delete',
            'slider-list','slider-create','slider-edit','slider-delete',
            'role-list', 'role-create', 'role-edit', 'role-delete',
            'user-list', 'user-create', 'user-edit', 'user-delete',
        ];

        foreach( $permissions as  $permission){
            Permission::create([
                'name'=>$permission,
            ]);
        }
    }
}
