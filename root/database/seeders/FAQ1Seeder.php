<?php

namespace Database\Seeders;

use App\Models\FAQ1;
use Illuminate\Database\Seeder;

class FAQ1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FAQ1::create([
            'question' => 'Do I need to open an account in order to shop with you?',
            'answer' => '<p class="mb-1">Once the order has been dispatched, an email confirmation will be sent to you with the tracking number. You may check and track the delivery status of your orders with our local logistics partner, with your 6-digit Order Number for allSingapore deliveries.</p>
                        <p>For International deliveries, you may track your orders <strong><a class="txt_under" href="https://www.google.com.pk/">here</a></strong></p>',
            'faq_category_id' => 1
        ]);
        FAQ1::create([
            'question' => 'How do I /create an account?',
            'answer' => 'Please click on “Login/Register” followed by ‘Create An Account’ and fill in your personal particulars.',
            'faq_category_id' => 1
        ]);
        FAQ1::create([
            'question' => 'How do I order?',
            'answer' => 'Shop for the items you want and add it to your shopping cart. When you have finished, you can proceed to your shopping cart and check out. Check and ensure that all information is correct before confirming your purchases and payment.',
            'faq_category_id' => 1
        ]);
        FAQ1::create([
            'question' => 'When will my order be processed?',
            'answer' => 'All orders will be processed within 2 working days, excluding weekends and public holidays. Time stated is based on Singapore Time (UTC/GMT +8hours).',
            'faq_category_id' => 2
        ]);
    }
}
