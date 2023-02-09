<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item') -> insert([
            [
                'item_name' => "Vegetable 1",
                'item_desc' => "carrot, (Daucus carota), herbaceous, generally biennial plant of the Apiaceae family that produces an edible taproot. Among common varieties root shapes range from globular to long, with lower ends blunt to pointed.",
                'price' => "10000",
            ],
            [
                'item_name' => "Vegetable 2",
                'item_desc' => "carrot, (Daucus carota), herbaceous, generally biennial plant of the Apiaceae family that produces an edible taproot. Among common varieties root shapes range from globular to long, with lower ends blunt to pointed.",
                'price' => "15000",
            ],
            [
                'item_name' => "Vegetable 3",
                'item_desc' => "carrot, (Daucus carota), herbaceous, generally biennial plant of the Apiaceae family that produces an edible taproot. Among common varieties root shapes range from globular to long, with lower ends blunt to pointed.",
                'price' => "17000",
            ],
            [
                'item_name' => "Vegetable 4",
                'item_desc' => "carrot, (Daucus carota), herbaceous, generally biennial plant of the Apiaceae family that produces an edible taproot. Among common varieties root shapes range from globular to long, with lower ends blunt to pointed.",
                'price' => "25000",
            ],
            [
                'item_name' => "Vegetable 5",
                'item_desc' => "carrot, (Daucus carota), herbaceous, generally biennial plant of the Apiaceae family that produces an edible taproot. Among common varieties root shapes range from globular to long, with lower ends blunt to pointed.",
                'price' => "15000",
            ],
            [
                'item_name' => "Vegetable 6",
                'item_desc' => "carrot, (Daucus carota), herbaceous, generally biennial plant of the Apiaceae family that produces an edible taproot. Among common varieties root shapes range from globular to long, with lower ends blunt to pointed.",
                'price' => "20000",
            ],
            [
                'item_name' => "Vegetable 7",
                'item_desc' => "carrot, (Daucus carota), herbaceous, generally biennial plant of the Apiaceae family that produces an edible taproot. Among common varieties root shapes range from globular to long, with lower ends blunt to pointed.",
                'price' => "19000",
            ],
        ]);
    }
}
