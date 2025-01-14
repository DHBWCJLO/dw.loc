<?php

// File: FruitsTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FruitsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('fruits')->insert([
            [
                'name' => 'Mangosteen',
                'description' => 'Mangosteen are without a doubt one of the most exquisite fruits of the tropics - you\'re missing out if you don\'t try some! In the late 19th century, it was rumoured Queen Victoria would grant a knighthood to anyone who brought her mangosteen. This, as well as its superb flavour, was enough to earn the mangosteen a new name, "the queen of fruits". Still today, these small purple-skinned fruits are very highly regarded, and for good reason. Beneath their hard skin is fibrous, white, segmented flesh that is refreshingly juicy and has a delightful flavour: one bite of mangosteen\'s delicate flesh will dazzle your tongue with a distinctive combination of both sweet and citrus notes, and the succulent flesh will create an explosion of flavours in your mouth. We\'d say the taste is most comparable to a mouthwatering mix of lychee, peach, grape and pineapple, although some people liken mangosteen to sherbet!',
                'origin' => 33, 
                'seasonality' => 'Winter',
                'storage_place' => 'Fridge',
                'storage_period' => '2Weeks',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mangosteen',
                'description' => 'Mangosteen are without a doubt one of the most exquisite fruits of the tropics - you\'re missing out if you don\'t try some! In the late 19th century, it was rumoured Queen Victoria would grant a knighthood to anyone who brought her mangosteen. This, as well as its superb flavour, was enough to earn the mangosteen a new name, "the queen of fruits". Still today, these small purple-skinned fruits are very highly regarded, and for good reason. Beneath their hard skin is fibrous, white, segmented flesh that is refreshingly juicy and has a delightful flavour: one bite of mangosteen\'s delicate flesh will dazzle your tongue with a distinctive combination of both sweet and citrus notes, and the succulent flesh will create an explosion of flavours in your mouth. We\'d say the taste is most comparable to a mouthwatering mix of lychee, peach, grape and pineapple, although some people liken mangosteen to sherbet!',
                'origin' => 36, 
                'seasonality' => 'Winter',
                'storage_place' => 'Fridge',
                'storage_period' => '2Weeks',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Papaya',
                'description' => 'Papayas are mouthwatering and incredibly nutritious fruits that all exotic fruit lovers need to try! Papayas are elongated to spherical shape and can be as long as 50cm (although the fruits we receive from our farmers are usually 20cm to 30cm in length). Their smooth, glossy skin is deep green in colour when the fruits are immature, however the skin develops orange-yellow hues as the fruits ripen. Beneath their appealing skin is bright orange flesh encasing a cavity filled with many black seeds, each seed surrounded by a bubble of flavourless jelly. Both the flesh and seeds are edible! Once the papaya is fully ripe, the eye-catching flesh becomes so soft that it boasts a butter-like consistency, and this wonderfully creamy flesh wows with its combination of sweet notes - hints of mango, peach, and banana can be detected! - and distinctively musky undertones. The crunchy seeds contribute to the unique flavour profile of papaya, as they taste just like pepper!',
                'origin' => 34, 
                'seasonality' => 'Winter',
                'storage_place' => 'Fridge',
                'storage_period' => '2Weeks',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Papaya',
                'description' => 'Papayas are mouthwatering and incredibly nutritious fruits that all exotic fruit lovers need to try! Papayas are elongated to spherical shape and can be as long as 50cm (although the fruits we receive from our farmers are usually 20cm to 30cm in length). Their smooth, glossy skin is deep green in colour when the fruits are immature, however the skin develops orange-yellow hues as the fruits ripen. Beneath their appealing skin is bright orange flesh encasing a cavity filled with many black seeds, each seed surrounded by a bubble of flavourless jelly. Both the flesh and seeds are edible! Once the papaya is fully ripe, the eye-catching flesh becomes so soft that it boasts a butter-like consistency, and this wonderfully creamy flesh wows with its combination of sweet notes - hints of mango, peach, and banana can be detected! - and distinctively musky undertones. The crunchy seeds contribute to the unique flavour profile of papaya, as they taste just like pepper!',
                'origin' => 34, 
                'seasonality' => 'Autumn',
                'storage_place' => 'Fridge',
                'storage_period' => '2Weeks',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Soursop',
                'description' => 'Soursop, also known as graviola, guanabana, and guyabano is a delicious fruit in high demand because of the health benefits it\'s believed to have. The flavour of the soursop fruit has been described as a combination of strawberry and pineapple, with citrus flavour notes contrasting with an underlying creamy texture reminiscent of coconut and banana! We choose to source soursop from the Caribbean islands of St Lucia, Grenada and Jamaica or Vietnam as all these countries produce high quality soursop with a delicious sweeter flavour and a smaller amount of fibre compared to fruits of other origin.',
                'origin' => 24, 
                'seasonality' => 'Summer',
                'storage_place' => 'WoodBox',
                'storage_period' => 'Week',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);


        // Seed images for fruits
        DB::table('fruit_images')->insert([
            [
                'fruit_id' => 1,
                'filename' => 'Mangosteen-1571423887275.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruit_id' => 1,
                'filename' => 'mangosteen-1561411611900.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruit_id' => 2,
                'filename' => 'papaya-1677607874243.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruit_id' => 2,
                'filename' => 'papaya-1677607874244.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruit_id' => 3,
                'filename' => 'Soursop-1548341067724.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruit_id' => 3,
                'filename' => 'Soursop-1548341088114.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
