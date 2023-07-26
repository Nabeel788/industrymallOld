<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $role_editor = Role::where('name', 'Editor')->first();
        $role_author = Role::where('name', 'Author')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'sammarforu@gmail.com';
        $admin->password = bcrypt('sammar');
        $admin->phone1 = '0331443489';
        $admin->category_id = '1';
        $admin->biller_id = '1';
        $admin->phone = '03xx xxxxxxx';
        $admin->addres = 'LAHORE';
        $admin->type = 'USER';
        $admin->image = 'Industry Mall Logo-01.png';
        $admin->role = 'Admin';
        $admin->save();
        $admin->roles()->attach($role_admin);

        $teacher = new User();
        $teacher->name = 'Author';
        $teacher->email = 'author@gmail.com';
        $teacher->password = bcrypt('author');
        $teacher->phone1 = '0331443489';
        $teacher->category_id = '2';
        $teacher->biller_id = '1';
        $teacher->phone = '03xx xxxxxxx';
        $teacher->addres = 'LAHORE';
        $teacher->image = 'Industry Mall Logo-01.png';;
        $teacher->type = 'USER';
        $teacher->save();
        $teacher->roles()->attach($role_author);

        $student = new User();
        $student->name = 'Editor';
        $student->email = 'editor@gmail.com';
        $student->password = bcrypt('editor');
        $student->phone1 = '0331443489';
        $student->category_id = '2';
        $student->biller_id = '1';
        $student->phone = '03xx xxxxxxx';
        $student->addres = 'LAHORE';
        $student->image = 'Industry Mall Logo-01.png';;
        $student->type = 'USER';
        $student->save();
        $student->roles()->attach($role_editor);
    }
}
