<?php

namespace App\Models\News;

class News
{
    private Categories $category;

    private $news = [
        '1' => [
            'id' => 1,
            'title' => 'Новость 1',
            'description' => 'Краткое описание новости 1...',
            'text' => 'Новость 1.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => false,
            'category_id' => 1
        ],
        '2' => [
            'id' => 2,
            'title' => 'Новость 2',
            'description' => 'Краткое описание новости 2...',
            'text' => 'Новость 2.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => true,
            'category_id' => 1
        ],
        '3' => [
            'id' => 3,
            'title' => 'Новость 3',
            'description' => 'Краткое описание новости 3...',
            'text' => 'Новость 3.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => false,
            'category_id' => 1
        ],
        '4' => [
            'id' => 4,
            'title' => 'Новость 4',
            'description' => 'Краткое описание новости 4...',
            'text' => 'Новость 4.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => false,
            'category_id' => 1
        ],

        '5' => [
            'id' => 5,
            'title' => 'Новость 5',
            'description' => 'Краткое описание новости 5...',
            'text' => 'Новость 5.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => false,
            'category_id' => 2
        ],
        '6' => [
            'id' => 6,
            'title' => 'Новость 6',
            'description' => 'Краткое описание новости 6...',
            'text' => 'Новость 6.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => false,
            'category_id' => 2
        ],
        '7' => [
            'id' => 7,
            'title' => 'Новость 7',
            'description' => 'Краткое описание новости 7...',
            'text' => 'Новость 7.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => true,
            'category_id' => 2
        ],
        '8' => [
            'id' => 8,
            'title' => 'Новость 8',
            'description' => 'Краткое описание новости 8...',
            'text' => 'Новость 8.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => true,
            'category_id' => 2
        ],

        '9' => [
            'id' => 9,
            'title' => 'Новость 9',
            'description' => 'Краткое описание новости 9...',
            'text' => 'Новость 9.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => false,
            'category_id' => 3
        ],
        '10' => [
            'id' => 10,
            'title' => 'Новость 10',
            'description' => 'Краткое описание новости 10...',
            'text' => 'Новость 10.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => false,
            'category_id' => 3
        ],
        '11' => [
            'id' => 11,
            'title' => 'Новость 11',
            'description' => 'Краткое описание новости 11...',
            'text' => 'Новость 11.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => false,
            'category_id' => 3
        ],
        '12' => [
            'id' => 12,
            'title' => 'Новость 12',
            'description' => 'Краткое описание новости 12...',
            'text' => 'Новость 12.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => false,
            'category_id' => 3
        ],

        '13' => [
            'id' => 13,
            'title' => 'Новость 13',
            'description' => 'Краткое описание новости 13...',
            'text' => 'Новость 13.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => true,
            'category_id' => 4
        ],
        '14' => [
            'id' => 14,
            'title' => 'Новость 14',
            'description' => 'Краткое описание новости 14...',
            'text' => 'Новость 14.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => false,
            'category_id' => 4
        ],
        '15' => [
            'id' => 15,
            'title' => 'Новость 15',
            'description' => 'Краткое описание новости 15...',
            'text' => 'Новость 15.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => true,
            'category_id' => 4
        ],
        '16' => [
            'id' => 16,
            'title' => 'Новость 16',
            'description' => 'Краткое описание новости 16...',
            'text' => 'Новость 16.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => false,
            'category_id' => 4
        ],

        '17' => [
            'id' => 17,
            'title' => 'Новость 17',
            'description' => 'Краткое описание новости 17...',
            'text' => 'Новость 17.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => false,
            'category_id' => 5
        ],
        '18' => [
            'id' => 18,
            'title' => 'Новость 18',
            'description' => 'Краткое описание новости 18...',
            'text' => 'Новость 18.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => true,
            'category_id' => 5
        ],
        '19' => [
            'id' => 19,
            'title' => 'Новость 19',
            'description' => 'Краткое описание новости 19...',
            'text' => 'Новость 19.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => false,
            'category_id' => 5
        ],
        '20' => [
            'id' => 20,
            'title' => 'Новость 20',
            'description' => 'Краткое описание новости 20...',
            'text' => 'Новость 20.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque repellendus minima deleniti? Aperiam, vero! Nesciunt tempore blanditiis minus placeat recusandae labore sequi animi eligendi similique et, consequatur ipsam non!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia esse, minus dolorum deserunt ipsam sit, aperiam dolor, assumenda fuga expedita veritatis ad. Impedit, inventore cupiditate voluptatum ad necessitatibus nemo sint error eveniet hic commodi itaque atque ab porro, amet officia perspiciatis sequi ea rem nobis, iusto tempora sunt. Modi, quis pariatur, optio quasi hic dicta nisi iusto quibusdam, debitis earum mollitia excepturi neque. Iste suscipit ut sed voluptas quisquam dolores quos, temporibus facere laudantium commodi reiciendis magnam ipsam omnis beatae dicta sit? Qui, et? Quod, quasi voluptas. Quas recusandae numquam provident, hic amet laudantium voluptates, maxime atque, non laborum dolores?',
            'isPrivate' => false,
            'category_id' => 5
        ]
    ];

    public function __construct(Categories $category)
    {
        $this->category = $category;
    }

    public function getNewsByCategorySlug($slug): array
    {
        $id = $this->category->getIdCategoryBySlug($slug);
        $news = [];
        foreach ($this->getNews() as $item) {
            if ($item['category_id'] == $id) {
                $news[] = $item;
            }
        }

        return $news;
    }

    public function getNews(): array
    {
        return $this->news;
    }

    public function getNewsId($slug, $id): ?array
    {
        $newsList = $this->getNews();
        $category_id = $this->category->getIdCategoryBySlug($slug);
        if (array_key_exists($id, $newsList) && $newsList[$id]['category_id'] == $category_id) {
            return $newsList[$id];
        }

        return null;
    }

    public function getNewsWithSlug()
    {
        $newsList = [];
        foreach ($this->getNews() as $item) {
            $slug = $this->category->getSlugById($item['category_id']);
            $item['slug'] = $slug;
            $newsList[] = $item;
        }

        return $newsList;
    }
}
