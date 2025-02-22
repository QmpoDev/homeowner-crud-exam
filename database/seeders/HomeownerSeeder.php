<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Homeowner;
use Faker\Factory as Faker;

class HomeownerSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('en_PH'); 

        for ($i = 0; $i < 20; $i++) {
            Homeowner::create([
                'first_name' => $faker->firstName,
                'middle_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'phone' => $this->generatePhilippineMobileNumber(),
                'address' => $this->formatAddress($faker->address), 
                'occupation' => $faker->jobTitle,
            ]);
        }
    }

       private function generatePhilippineMobileNumber()
    {
       $prefixes = ['0915', '0916', '0917', '0918', '0919', '0920', '0921', '0922', '0923', '0926', '0927', '0928', '0929', '0930', '0932', '0933', '0934', '0935', '0936', '0938', '0939', '0942', '0943', '0945', '0946', '0947', '0948', '0949', '0950', '0951', '0952', '0953', '0954', '0955', '0956', '0957', '0958', '0959', '0960', '0961', '0962', '0963', '0964', '0965', '0966', '0967', '0968', '0969', '0970', '0971', '0972', '0973', '0974', '0975', '0976', '0977', '0978', '0979', '0981', '0982', '0983', '0984', '0985', '0986', '0987', '0988', '0989', '0995', '0996', '0997', '0998', '0999'];

        $prefix = $prefixes[array_rand($prefixes)];
        $suffix = mt_rand(1000000, 9999999);

        return $prefix . $suffix;
    }

    private function formatAddress($address)
    {

        $parts = explode(',', $address);
        if (count($parts) >= 2) {
            return trim($parts[0]) . ", " . trim($parts[1]); 
        } else {
            return trim($address); 
        }
    }
}