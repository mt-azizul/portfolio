<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'id' => 1, 
                'key' => 'name',
                'value' => 'My Portfolio',
            ],
            [
                'id'=>2,
                'key' => 'title',
                'value' => 'My Portfolio',
            ],
            [
                'id'=>3,
                'key' => 'author',
                'value' => 'My Portfolio',
            ],
            [
                'id'=>4,
                'key' => 'address',
                'value' => 'New York',
            ],
            [
                'id'=>5,
                'key' => 'email',
                'value' => 'xyz@email.com',
            ],
            [
                'id'=>6,
                'key' => 'phone',
                'value' => '+0123456 (789)',
            ],
            [
                'id'=>7,
                'key' => 'facebook',
                'value' => 'abcxyz.com',
            ],
            [
                'id'=>8,
                'key' => 'twitter',
                'value' => 'abcxyz.com',
            ],
            [
                'id'=>9,
                'key' => 'instagram',
                'value' => 'abcxyz.com',
            ],
            [
                'id'=>10,
                'key' => 'linkedin',
                'value' => 'abcxyz.com',
            ],
            [
                'id'=>11,
                'key' => 'logo',
                'value' => 'logo.png',
            ],
            [
                'id'=>12,
                'key' => 'favicon',
                'value' => 'favicon.ico',
            ],
        ];
        Setting::truncate();
        Setting::insert($settings);
    }
}
