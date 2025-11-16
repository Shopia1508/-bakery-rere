<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([

            //Coffe

            [
                'name' => 'Caramel Latte',
                'category' => 'Coffe',
                'description' => 'Coffe latte yang dipadukan dengan caramel gurih',
                'price' => 32000,
                'image' => 'caramel latte.jpg',
            ],
            [
                'name' => 'Americano',
                'category' => 'Coffe',
                'description' => 'kopi hitam yang dapat disajikan dingin maupun hangat',
                'price' => 35000,
                'image' => 'americano.jpg',
            ],
            [
                'name' => 'Hazelnut Cappuccino',
                'category' => 'Coffe',
                'description' => 'Cappuccino lembut dengan aroma hazelnut yang khas dan menenangkan.',
                'price' => 32000,
                'image' => 'hazelnut-cappuccino.jpg',
            ],
            [
                'name' => 'Mocha Classic',
                'category' => 'Coffe',
                'description' => 'Perpaduan cokelat dan espresso yang rich, cocok untuk pecinta manis.',
                'price' => 30000,
                'image' => 'mocha-classic.jpg',
            ],
            [
                'name' => 'Vanilla Cold Brew',
                'category' => 'Coffe',
                'description' => 'Cold brew yang segar dengan hint vanilla yang halus.',
                'price' => 27000,
                'image' => 'vanilla-cold-brew.jpg',
            ],
            [
                'name' => 'Signature Espresso',
                'category' => 'Coffe',
                'description' => 'Espresso bold dengan karakter rasa kuat dan aroma pekat.',
                'price' => 25000,
                'image' => 'signature-espresso.jpg',
            ],

            //foods

               [
        'name' => 'Beef Lasagna',
        'category' => 'Food',
        'description' => 'Lasagna daging dengan saus bolognese dan keju melimpah yang creamy.',
        'price' => 55000,
        'image' => 'beef-lasagna.jpg',
    ],
    [
        'name' => 'Chicken Rice Bowl',
        'category' => 'Food',
        'description' => 'Nasi hangat dengan chicken teriyaki yang juicy dan gurih.',
        'price' => 35000,
        'image' => 'chicken-rice-bowl.jpg',
    ],
    [
        'name' => 'Creamy Carbonara Pasta',
        'category' => 'Food',
        'description' => 'Pasta creamy dengan smoked beef dan saus carbonara khas.',
        'price' => 45000,
        'image' => 'creamy-carbonara-pasta.jpg',
    ],
    [
        'name' => 'Cheese Garlic Bread',
        'category' => 'Food',
        'description' => 'Roti garlic lembut dengan topping keju meleleh yang gurih.',
        'price' => 25000,
        'image' => 'cheese-garlic-bread.jpg',
    ],
    [
        'name' => 'Chicken Katsu Bento',
        'category' => 'Food',
        'description' => 'Set bento lengkap dengan chicken katsu renyah dan saus tonkatsu.',
        'price' => 48000,
        'image' => 'chicken-katsu-bento.jpg',
    ],

    //non_coffe


      [
        'name' => 'Strawberry Milk',
        'category' => 'NonCoffe',
        'description' => 'Susu segar dengan puree strawberry asli yang manis dan creamy.',
        'price' => 22000,
        'image' => 'strawberry-milk.jpg',
    ],
    [
        'name' => 'Matcha Latte',
        'category' => 'NonCoffe',
        'description' => 'Minuman matcha premium dengan rasa earthy dan susu yang lembut.',
        'price' => 28000,
        'image' => 'matcha-latte.jpg',
    ],
    [
        'name' => 'Lemon Tea',
        'category' => 'NonCoffe',
        'description' => 'Teh lemon segar dengan rasa asam manis yang menyegarkan.',
        'price' => 18000,
        'image' => 'lemon-tea.jpg',
    ],
    [
        'name' => 'Chocolate Frappe',
        'category' => 'NonCoffe',
        'description' => 'Minuman cokelat blended dengan tekstur creamy dan topping whipped cream.',
        'price' => 30000,
        'image' => 'chocolate-frappe.jpg',
    ],
    [
        'name' => 'Taro Latte',
        'category' => 'NonCoffe',
        'description' => 'Minuman taro yang manis dan harum dengan tekstur lembut.',
        'price' => 26000,
        'image' => 'taro-latte.jpg',
    ],

    //dessert

       [
        'name' => 'Chocolate Lava Cake',
        'category' => 'Dessert',
        'description' => 'Kue cokelat lembut dengan lelehan coklat panas di bagian tengah.',
        'price' => 35000,
        'image' => 'chocolate-lava-cake.jpg',
    ],
    [
        'name' => 'Strawberry Cheesecake',
        'category' => 'Dessert',
        'description' => 'Cheesecake creamy dengan topping strawberry segar.',
        'price' => 42000,
        'image' => 'strawberry-cheesecake.jpg',
    ],
    [
        'name' => 'Vanilla Panna Cotta',
        'category' => 'Dessert',
        'description' => 'Panna cotta lembut dengan aroma vanilla dan saus berry.',
        'price' => 30000,
        'image' => 'vanilla-panna-cotta.jpg',
    ],
    [
        'name' => 'Oreo Cream Parfait',
        'category' => 'Dessert',
        'description' => 'Lapisan oreo crumbs, whipped cream, dan custard yang manis.',
        'price' => 28000,
        'image' => 'oreo-cream-parfait.jpg',
    ],
    [
        'name' => 'Mango Pudding',
        'category' => 'Dessert',
        'description' => 'Puding mangga segar dengan tekstur lembut dan aroma tropis.',
        'price' => 25000,
        'image' => 'mango-pudding.jpg',
    ],

        ]);
    }
}
