<?php

namespace Database\Seeders;

use App\Models\FAQ2;
use Illuminate\Database\Seeder;

class FAQ2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FAQ2::create([
            'question' => 'Do I need to open an account in order to shop with you?',
            'answer' => '<p>No, you don&rsquo;t need to. You can make purchases and check out as a guest everytime. However, by setting up an account with us, it will allow you to order without having to enter your details every time you shop with us. You can sign up right now, or you can first start shopping and create your account before you check out at the shopping cart page.</p>'
        ]);
        FAQ2::create([
            'question' => 'How do I /create an account?',
            'answer' => 'Please click on “Login/Register” followed by ‘Create An Account’ and fill in your personal particulars.'
        ]);
    }
}
