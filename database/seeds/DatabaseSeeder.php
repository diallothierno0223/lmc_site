<?php

use Illuminate\Database\Seeder;
use App\Journal;
use App\Photo;
use App\Reglement;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'auteur' => "thierno",
            'title' => "title seeder",
            'subtitle' => "subtitle seeder",
            'article' => "  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa excepturi iste beatae maxime quasi sint velit, earum eius animi debitis rem. Magnam assumenda in ab earum, exercitationem quas ipsa asper   Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa excepturi iste beatae maxime quasi sint velit, earum eius animi debitis rem. Magnam assumenda in ab earum, exercitationem quas ipsa aspernatur.natur.",
            'image' => "journals\June2021\gqkRawlwxfgaM5MDbY8D.png",
        ];
        $data2 = [
            'title' => "test title",
            'description' => "description test",
            'image' => "journals\June2021\gqkRawlwxfgaM5MDbY8D.png",
        ];
        $data3 = [
            'title' => "title reglement",
            'content' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa excepturi iste beatae maxime "
        ];
        // $this->call(UserSeeder::class);
        for($i = 0; $i < 31; $i++){
            // Journal::create($data);
            // Photo::create($data2);
            Reglement::create($data3);
        }
    }
}
