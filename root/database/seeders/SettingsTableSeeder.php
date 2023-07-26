<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Settings;
use App\Models\Category;
class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new Settings();
        //$setting->system_name = 'ACCOUNTS & STOCK SOLUTIONS';
        $setting->system_name = 'IT Life';
        //$setting->title = 'ACCOUNTS & STOCK SOLUTIONS';
        $setting->title = 'IT Life';
        //$setting->address = 'WAHDAT ROAD, MANSOORA DEGREE COLLEGE';
        $setting->address = 'Farid Kot Road, Lahore.';
        $setting->phone = '0321 4197290';
        $setting->email = 'info@itlife.com.pk';
        $setting->currency = '$';
        $setting->city = 'Lahore';
        $setting->state = 'Punjab';
        $setting->country = 'Pakistan';
        $setting->ntn = '234583-8';
        $setting->strn = '03-00-4281-958-11';
        $setting->website = 'www.itlife.com.pk';
        $setting->logo = 'Industry Mall Logo-01.png';
        $setting->description = 'We love to hear from you on our customer service, merchandise, website or any topics you want to share with us. Your comments and suggestions will be appreciated. Please complete the form below.';
        $setting->map = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.324323864338!2d74.35194901448044!3d31.432737158610482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191d65ae9fa779%3A0x4a7e8f6464f8c1b7!2siT%20Life%20-%20Software%20Company!5e0!3m2!1sen!2s!4v1658215491693!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        $setting->disclaimer = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation";
        $setting->save();
    }
}
