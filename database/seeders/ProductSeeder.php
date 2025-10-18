<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([

            //birthday cake

            [
                'name' => 'Choco Boom Cake',
                'category' => 'Birthday cake',
                'description' => 'Kue lembut rasa cokelat dengan lapisan krim halus.',
                'price' => 45000,
                'image' => 'choco-boom-cake.jpg',
            ],
            [
                'name' => 'Strawberry Bliss Cake',
                'category' => 'Birthday cake',
                'description' => 'Kue vanilla lembut dengan topping stroberi segar.',
                'price' => 48000,
                'image' => 'strawberry-bliss-cake.jpg',
            ],
            [
                'name' => 'Cheese Heaven Cake',
                'category' => 'Birthday cake',
                'description' => 'Kue keju lembut dengan krim manis dan gurih.',
                'price' => 52000,
                'image' => 'cheese-heaven-cake.jpg',
            ],
            [
                'name' => 'Red Velvet Dream',
                'category' => 'Birthday cake',
                'description' => 'Kue red velvet klasik dengan frosting krim keju.',
                'price' => 55000,
                'image' => 'red-velvet-dream.jpg',
            ],
            [
                'name' => 'Oreo Crunch Cake',
                'category' => 'Birthday cake',
                'description' => 'Kue cokelat lembut dengan topping Oreo renyah.',
                'price' => 50000,
                'image' => 'oreo-crunch-cake.jpg',
            ],


            //brownies

            [
                'name' => 'Classic Fudge Brownies',
                'category' => 'Brownies',
                'description' => 'Brownies klasik dengan tekstur fudgy dan rasa cokelat pekat.',
                'price' => 25000,
                'image' => 'classic-fudge-brownies.jpg',
            ],
            [
                'name' => 'Almond Choco Brownies',
                'category' => 'Brownies',
                'description' => 'Brownies lembut dengan taburan kacang almond panggang di atasnya.',
                'price' => 28000,
                'image' => 'almond-choco-brownies.jpg',
            ],
            [
                'name' => 'Cheese Swirl Brownies',
                'category' => 'Brownies',
                'description' => 'Perpaduan cokelat pekat dan swirl keju lembut yang lumer di mulut.',
                'price' => 30000,
                'image' => 'cheese-swirl-brownies.jpg',
            ],
            [
                'name' => 'Nutella Lava Brownies',
                'category' => 'Brownies',
                'description' => 'Brownies cokelat isi Nutella leleh yang meleleh di setiap gigitan.',
                'price' => 35000,
                'image' => 'nutella-lava-brownies.jpg',
            ],
            [
                'name' => 'Matcha Choco Brownies',
                'category' => 'Brownies',
                'description' => 'Brownies unik rasa matcha berpadu dengan cokelat manis yang pas.',
                'price' => 32000,
                'image' => 'matcha-choco-brownies.jpg',
            ],
            [
                'name' => 'Peanut Butter Brownies',
                'category' => 'Brownies',
                'description' => 'Brownies lembut dengan lapisan peanut butter gurih dan manis.',
                'price' => 33000,
                'image' => 'peanut-butter-brownies.jpg',
            ],

            //bento cake

              [
                'name' => 'Sweet Pastel Bento Cake',
                'category' => 'Bento Cake',
                'description' => 'Mini cake berwarna pastel dengan krim lembut dan desain minimalis yang cantik.',
                'price' => 30000,
                'image' => 'sweet-pastel-bento-cake.jpg',
            ],
            [
                'name' => 'Chocolate Dream Bento Cake',
                'category' => 'Bento Cake',
                'description' => 'Bento cake cokelat dengan rasa fudgy dan topping ganache lembut.',
                'price' => 32000,
                'image' => 'chocolate-dream-bento-cake.jpg',
            ],
            [
                'name' => 'Strawberry Bliss Bento Cake',
                'category' => 'Bento Cake',
                'description' => 'Cake lembut dengan krim stroberi segar dan hiasan buah di atasnya.',
                'price' => 33000,
                'image' => 'strawberry-bliss-bento-cake.jpg',
            ],
            [
                'name' => 'Blueberry Cream Bento Cake',
                'category' => 'Bento Cake',
                'description' => 'Perpaduan krim vanilla lembut dan selai blueberry homemade yang manis-asam.',
                'price' => 34000,
                'image' => 'blueberry-cream-bento-cake.jpg',
            ],
            [
                'name' => 'Matcha Harmony Bento Cake',
                'category' => 'Bento Cake',
                'description' => 'Cake matcha wangi dengan buttercream lembut dan sentuhan cokelat putih.',
                'price' => 35000,
                'image' => 'matcha-harmony-bento-cake.jpg',
            ],
            [
                'name' => 'Red Velvet Love Bento Cake',
                'category' => 'Bento Cake',
                'description' => 'Bento cake red velvet dengan cream cheese frosting yang lembut dan nikmat.',
                'price' => 36000,
                'image' => 'red-velvet-love-bento-cake.jpg',
            ],

            //dessert box

              [
                'name' => 'Nutela Dessert Box',
                'category' => 'Dessert Box',
                'description' => 'Dessert box lembut berlapis krim Nutella yang lumer dengan tampilan minimalis.',
                'price' => 30000,
                'image' => 'nutela-dessert-box.jpg',
            ],
            [
                'name' => 'Choco Oreo Box',
                'category' => 'Dessert Box',
                'description' => 'Lapisan cokelat creamy berpadu remahan Oreo renyah.',
                'price' => 32000,
                'image' => 'choco-oreo-box.jpg',
            ],
            [
                'name' => 'Strawberry Cheesecake Box',
                'category' => 'Dessert Box',
                'description' => 'Krim keju lembut dengan saus stroberi segar di atasnya.',
                'price' => 33000,
                'image' => 'strawberry-chessecake-box.jpg',
            ],
            [
                'name' => 'Tiramisu Bliss Box',
                'category' => 'Dessert Box',
                'description' => 'Rasa kopi lembut dengan krim mascarpone yang ringan.',
                'price' => 34000,
                'image' => 'tiramisu-bliss-box.jpg',
            ],
            [
                'name' => 'Red Velvet Cream Box',
                'category' => 'Dessert Box',
                'description' => 'Red velvet moist dengan krim keju lembut dan tampilan elegan.',
                'image' => 'red-velvet-cream-box.jpg',
            ],

            //bolu

              [
                'name' => 'Bolu Pandan Lembut',
                'category' => 'Bolu',
                'description' => 'Bolu harum pandan dengan tekstur lembut dan rasa manis yang pas.',
                'price' => 25000,
                'image' => 'bolu-pandan-lembut.jpg',
            ],
            [
                'name' => 'Bolu Cokelat Moist',
                'category' => 'Bolu',
                'description' => 'Bolu cokelat lembap dengan aroma kakao yang kuat dan topping cokelat leleh.',
                'price' => 27000,
                'image' => 'bolu-cokelat-moist.jpg',
            ],
            [
                'name' => 'Bolu Keju Premium',
                'category' => 'Bolu',
                'description' => 'Bolu lembut dengan parutan keju melimpah dan aroma gurih yang menggoda.',
                'price' => 30000,
                'image' => 'bolu-keju-premium.jpg',
            ],
            [
                'name' => 'Bolu Tape Susu',
                'category' => 'Bolu',
                'description' => 'Perpaduan manis dan sedikit asam dari tape singkong, berpadu dengan susu lembut.',
                'price' => 28000,
                'image' => 'bolu-tape-susu.jpg',
            ],
            [
                'name' => 'Bolu Marble Vanilla',
                'category' => 'Bolu',
                'description' => 'Bolu vanilla dan cokelat yang berpadu membentuk motif marble yang cantik.',
                'price' => 26000,
                'image' => 'bolu-marble-vanilla.jpg',
            ],
            [
                'name' => 'Bolu Kopi Lembut',
                'category' => 'Bolu',
                'description' => 'Bolu rasa kopi dengan aroma khas yang nikmat dan cocok untuk pecinta kopi.',
                'price' => 29000,
                'image' => 'bolu-kopi-lembut.jpg',
            ],

            //dry cake

               [
                'name' => 'Kastengel Keju Premium',
                'category' => 'Dry Cake',
                'description' => 'Kue keju gurih dan renyah dengan aroma butter yang wangi.',
                'price' => 45000,
                'image' => 'kastengel-keju-premium.jpg',
            ],
            [
                'name' => 'Nastar Lembut Nanas',
                'category' => 'Dry Cake',
                'description' => 'Kue nastar isi selai nanas homemade yang lembut dan manis.',
                'price' => 43000,
                'image' => 'nastar-lembut-nanas.jpg',
            ],
            [
                'name' => 'Putri Salju Klasik',
                'category' => 'Dry Cake',
                'description' => 'Kue berbentuk bulan sabit dengan taburan gula halus yang lumer di mulut.',
                'price' => 40000,
                'image' => 'putri-salju-klasik.jpg',
            ],
            [
                'name' => 'Choco Chip Cookies',
                'category' => 'Dry Cake',
                'description' => 'Kue kering renyah dengan potongan cokelat chip yang melimpah.',
                'price' => 42000,
                'image' => 'choco-chip-cookies.jpg',
            ],
            [
                'name' => 'Lidah Kucing Vanilla',
                'category' => 'Dry Cake',
                'description' => 'Kue tipis renyah dengan aroma vanilla yang harum dan rasa manis pas.',
                'price' => 41000,
                'image' => 'lidah-kucing-vanilla.jpg',
            ],
            [
                'name' => 'Sagu Keju Lumer',
                'category' => 'Dry Cake',
                'description' => 'Kue sagu keju yang renyah di luar dan langsung lumer di mulut.',
                'price' => 44000,
                'image' => 'sagu-keju-lumer.jpg',
            ],

        ]);
    }
}
