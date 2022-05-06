<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            'description'=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde omnis iste natus error sit voluptatem Excepteu

                            sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspi deserunt mollit anim id est laborum. sed ut perspi.",
            'short_des'=>"E-shop là trang web mua sắm online, với các sản phẩm đa dạng và cập nhật nhanh chóng theo xu hướng, giao diện thân thiện với người dùng.",
            'photo'=>"image.jpg",
            'logo'=>'logo.jpg',
            'address'=>"NO. 342 - London Oxford Street, 012 United Kingdom",
            'email'=>"eshop@gmail.com",
            'phone'=>"+060 (800) 801-582",
        );
        DB::table('settings')->insert($data);
    }
}
