<?php

namespace Database\Seeders;

use App\Models\Testimonials;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    public function run()
    {
        Testimonials::create([
            'name' => 'Victoria Ventura',
            'designation' => 'Customer',
            'image' => '62d17456d60ae1-100x100.png',
            'message' => "<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>"
        ]);
        Testimonials::create([
            'name' => 'Henry Harry',
            'designation' => 'Banker',
            'image' => '62d1750bcabe42-100x100.png',
            'message' => "<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>"
        ]);
        Testimonials::create([
            'name' => 'Anna Marianda',
            'designation' => 'Vendor',
            'image' => '62d1751fe8c8f3-100x100.png',
            'message' => "<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>"
        ]);
    }
}
