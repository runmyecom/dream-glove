<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Console\Command;

class CreateProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $uniqId = Carbon::now()->timestamp . uniqid();

        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Deam AS Neon',
            'mrp' => '25.00 – 35.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2023/04/Neon-Green-Gloves.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream AS Baby Blue/ Yellow',
            'mrp' => '25.00 – 35.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2023/04/Gloves-without-Star.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream AS Black/Gold',
            'mrp' => '25.00 – 35.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2022/11/IMG-20221101-WA0046.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream AS Elite Black/Tan',
            'mrp' => '30.00 – 35.00',
            'description' => 'batting gloves are meticulously crafted with high-quality materials to enhance your performance and provide unparalleled comfort. These gloves are designed to meet the demands of professional and amateur players alike, offering exceptional grip, protection, and durability.
            The exterior of the gloves is constructed using top-grade leather, renowned for its strength and flexibility. This ensures long-lasting performance and a snug fit that molds to the contours of your hand. The Premium Cabretta leather also provides superior grip, allowing you to maintain full control of the bat and make precise, powerful swings.',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2023/11/Black-Golden-Gloves.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream AS Elite Grey/White/Black',
            'mrp' => '30.00 – 35.00',
            'description' => 'The exterior of the gloves is constructed using top-grade leather, renowned for its strength and flexibility. This ensures long-lasting performance and a snug fit that molds to the contours of your hand. The Premium Cabretta leather also provides superior grip, allowing you to maintain full control of the bat and make precise, powerful swings.',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2023/11/White-Grey-Gloves.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream AS Elite Pink/Mint/White',
            'mrp' => '30.00 – 35.00',
            'description' => 'The exterior of the gloves is constructed using top-grade leather, renowned for its strength and flexibility. This ensures long-lasting performance and a snug fit that molds to the contours of your hand. The Premium Cabretta leather also provides superior grip, allowing you to maintain full control of the bat and make precise, powerful swings.',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2023/11/AS-Mint-Pink-Yellow-Gloves.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream AS Freedom',
            'mrp' => '25.00 – 30.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2023/06/American-Flag-Gloves-4.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream AS Mint/Gold',
            'mrp' => '25.00 – 35.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2022/06/bg-mint.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream AS Paradise',
            'mrp' => '35.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2022/10/IMG-20220930-WA0059.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream AS white/Gold',
            'mrp' => '25.00 - 35.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2023/06/gold-white.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream Dual Strap Orange/Black',
            'mrp' => '45.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2024/03/Long-Cuff-Orange-Black-Gloves.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream Spice Black',
            'mrp' => '35.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2024/03/Jorden-Gloves.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream Spice Neon/Black',
            'mrp' => '35.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2024/03/Jorden-Green-Black-Gloves.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream Stars & Stripes',
            'mrp' => '25.00 - 35.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2023/06/American-Flag-Gloves-1.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream Vice Special Edition',
            'mrp' => '25.00 - 35.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2022/10/palm.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream Wave Gold Rush',
            'mrp' => '25.00 - 35.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2024/03/Shiny-Gold-Gloves.jpg',
            'category_name' => 'baseball-batting-gloves-adult'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Deam AS Neon',
            'mrp' => '25.00 - 35.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2023/04/Neon-Green-Gloves.jpg',
            'category_name' => 'baseball-batting-gloves-youth'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream AS Baby Blue/ Yellow',
            'mrp' => '25.00 - 35.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2023/04/Gloves-without-Star.jpg',
            'category_name' => 'baseball-batting-gloves-youth'
        ]);
        Product::create([
            'unique_id' => $uniqId,
            'name' => 'Dream AS Black/Gold',
            'mrp' => '25.00 - 35.00',
            'description' => '',
            'thumbnail' => 'https://www.dreamgloveco.com/wp-content/uploads/2022/11/IMG-20221101-WA0046.jpg',
            'category_name' => 'baseball-batting-gloves-youth'
        ]);
    }
}
