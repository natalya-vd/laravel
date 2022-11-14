<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\JobNewsParsing;
use App\Models\News\Resource;

class ParserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $urls = Resource::query()
            ->get();

        foreach ($urls as $url) {
            dispatch(new JobNewsParsing($url->link, $url->id));
        }

        return 'Парсинг завершен';
    }
}
