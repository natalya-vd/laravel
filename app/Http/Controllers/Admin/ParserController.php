<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News\Aggregator;
use App\Services\Contracts\Parser;
use App\Queries\NewsQueryBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, NewsQueryBuilder $builder, Parser $parser)
    {
        $load = $parser->setLink('https://lenta.ru/rss/news/travel')
            ->getParserData();

        try {
            DB::transaction(function () use ($load, $builder) {
                $aggregator = [
                    'title' => $load['title'],
                    'description' => $load['description'],
                    'link' => $load['link'],
                    'image' => $load['image']
                ];

                $aggregatorModel = Aggregator::create($aggregator);

                foreach ($load['news'] as $item) {
                    $item['category_id'] = 1; // TODO: Пока так. Не поняла ,что делать с категорией.
                    $item['aggregator_id'] = $aggregatorModel->id;
                    $item['is_private'] = false;
                    $item['text'] = $item['description'];

                    $builder->create($item);
                }
            });

            return redirect()->route('admin.news.list')->with('success', __('messages.admin.news.create.success'));
        } catch (\PDOException $e) {
            return back()->with('error',  __('messages.admin.news.create.error'));
        }
    }
}
