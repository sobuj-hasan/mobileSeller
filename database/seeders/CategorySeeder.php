<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Eye Protection',
            'ar_name' => 'حماية العين',
        ]);
        Category::create([
            'name' => 'Gloves',
            'ar_name' => 'القفازات',
        ]);
        Category::create([
            'name' => 'Clothing',
            'ar_name' => 'ملابس',
        ]);
        Category::create([
            'name' => 'Head & Face Protection',
            'ar_name' => 'حماية الرأس والوجه',
        ]);
        Category::create([
            'name' => 'Hearing Protection',
            'ar_name' => 'حماية السمع',
        ]);
        Category::create([
            'name' => 'Respiratory Protection',
            'ar_name' => 'حماية الجهاز التنفسي',
        ]);
        Category::create([
            'name' => 'Gas Instrumentation',
            'ar_name' => 'أجهزة الغاز',
        ]);
        Category::create([
            'name' => 'Fall Protection',
            'ar_name' => 'الحماية من السقوط',
        ]);
        Category::create([
            'name' => 'Confined Space',
            'ar_name' => 'الأماكن الضيقة',
        ]);
        Category::create([
            'name' => 'Rescue',
            'ar_name' => 'الإنقاذ',
        ]);
        Category::create([
            'name' => 'Communication Systems',
            'ar_name' => 'نظم الاتصالات',
        ]);
        Category::create([
            'name' => 'Fire Safety Equipment',
            'ar_name' => 'معدات السلامة من الحريق',
        ]);
        Category::create([
            'name' => 'Floor Matting',
            'ar_name' => 'فرش أرضيات',
        ]);
        Category::create([
            'name' => 'Foot Protection',
            'ar_name' => 'حماية القدم',
        ]);
        Category::create([
            'name' => 'Ergonomics',
            'ar_name' => 'بيئة العمل',
        ]);
        Category::create([
            'name' => 'Lockout Tag out & Security',
            'ar_name' => 'تأمين بطاقة الخروج والأمن',
        ]);
        Category::create([
            'name' => 'Protectors, Guards, & Rails',
            'ar_name' => 'حماة وحراس وسكك حديدية',
        ]);
        Category::create([
            'name' => 'Safety Cabinets',
            'ar_name' => 'خزائن أمان',
        ]);
        Category::create([
            'name' => 'Secondary Containment',
            'ar_name' => 'علب الأمان',
        ]);
        Category::create([
            'name' => 'Sorbents & Spill Control',
            'ar_name' => 'الاحتواء الثانوي',
        ]);
        Category::create([
            'name' => 'Stormwater Management',
            'ar_name' => 'المواد الماصة والتحكم في الانسكاب',
        ]);
        Category::create([
            'name' => 'Traffic Safety Supplies',
            'ar_name' => 'إدارة مياه الأمطار',
        ]);
        Category::create([
            'name' => 'Training Programs',
            'ar_name' => 'لوازم السلامة المرورية',
        ]);
    }
}
