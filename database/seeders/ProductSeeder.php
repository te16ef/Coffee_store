<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->truncate(); // Clear existing products
        // Insert new products
        DB::table('products')->insert([
            [
                'name' => 'حبّة محمصة - كولومبيا',
                'description' => "كراميل ناعم ولمسة شوكولاتة متزنة\nالذوق العالي له مذاقه، جربها ولا تردد!",
                'price' => 35,
                'image' => 'colombia-coffee.png',
                'category' => 'قهوة محمصة',
            ],
            [
                'name' => 'حبّة محمصة - إثيوبي',
                'description' => "زهور بيضاء، فواكه استوائية، لمسة حمضية\nمن أول رشفة تشدّك نكهة تنعش اليوم!",
                'price' => 38,
                'image' => 'ethiopian-coffee.png',
                'category' => 'قهوة محمصة',
            ],
            [
                'name' => 'حبّة محمصة - يمني',
                'description' => "عسل، بهارات دافئة، وقوام ثقيل\nطابعها أصيل إذا تحب الثقل، هذه لك!",
                'price' => 42,
                'image' => 'yemeni-coffee.png',
                'category' => 'قهوة محمصة',
            ],
            [
                'name' => 'كوب إسبريسو',
                'description' => "صغير بالحجم قوي بالتأثير  تمامًا زي اللقطة!",
                'price' => 15,
                'image' => 'espresso-cup.png',
                'category' => 'أكواب',
            ],
            [
                'name' => 'كوب قهوة V60',
                'description' => "تصميم بسيط يضبط مزاجك ، طقوسك تستاهل كوب يشبهك!",
                'price' => 18,
                'image' => 'v60-cup.png',
                'category' => 'أكواب',
            ],
            [
                'name' => 'أدوات قهوة مختصة',
                'description' => "العدة كلها بطقم أنيق وعملي بسيط، وكأنك باريستا !",
                'price' => 55,
                'image' => 'v60-filter.png',
                'category' => 'معدات تحضير',
            ],
        ]);
    }
}