<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Personality;

class PersonalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personalities = [
        ['name' => 'INTJ 建築家_分析家'],
        ['name' => 'INTP 論理学者_分析家'],
        ['name' => 'ENTJ 指揮官_分析家'],
        ['name' => 'ENTP 討論者_分析家'],
        ['name' => 'INFJ 提唱者_外交官'],
        ['name' => 'INFP 仲介者_外交官'],
        ['name' => 'ENFJ 主人公_外交官'],
        ['name' => 'ENFP 運動家_外交官'],
        ['name' => 'ISTJ 管理者_番人'],
        ['name' => 'ISFJ 擁護者_番人'],
        ['name' => 'ESTJ 幹部_番人'],
        ['name' => 'ESFJ 領事_番人'],
        ['name' => 'ISTP 巨匠_探検家'],
        ['name' => 'ISFP 冒険家_探検家'],
        ['name' => 'ESTP 起業家_探検家'],
        ['name' => 'ESFP エンターテイナー_探検家'],

        ];

        foreach($personalities as $personality){
            Personality::create($personality);
        }

    }
}
