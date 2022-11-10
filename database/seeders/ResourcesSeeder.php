<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resources')->insert($this->getData());
    }

    private function getData()
    {
        $resources = [
            'https://lenta.ru/rss/news/travel',
            'https://lenta.ru/rss/news/russia',
            'https://lenta.ru/rss/news/world',
            'https://lenta.ru/rss/news/ussr',
            'https://lenta.ru/rss/news/economics',
            'https://lenta.ru/rss/news/forces',
            'https://lenta.ru/rss/news/science',
            'https://lenta.ru/rss/news/culture',
            'https://lenta.ru/rss/news/sport',
            'https://lenta.ru/rss/news/media',
            'https://lenta.ru/rss/news/style',
            'https://lenta.ru/rss/news/life',
            'https://lenta.ru/rss/news/realty',
            'https://lenta.ru/rss/news/wellness',
        ];

        $resourcesDb = [];
        foreach ($resources as $item) {
            $resourcesDb[] = [
                'title' => $item,
                'link' => $item,
            ];
        }

        return $resourcesDb;
    }
}
