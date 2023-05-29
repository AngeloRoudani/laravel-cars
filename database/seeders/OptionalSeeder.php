<?php

namespace Database\Seeders;

use App\Models\Optional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionals=['cerchi in lega','servo sterzo','android car','airbag','luci led', 'porte usb'];
        foreach($optionals as $optional){
            $newOptional = new Optional();
            $newOptional->name = $optional;
            $newOptional->slug = Str::slug($optional,'-');
            $newOptional->save();


        }
    }
}
