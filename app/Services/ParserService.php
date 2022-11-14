<?php

declare(strict_types=1);

namespace App\Services;

use App\Queries\NewsQueryBuilder;
use App\Services\Contracts\Parser;
use Illuminate\Support\Facades\Storage;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserService implements Parser
{
    private string $link;
    private int $resource_id;

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function setResourceId(int $resource_id): self
    {
        $this->resource_id = $resource_id;

        return $this;
    }

    public function saveParserData(NewsQueryBuilder $builder): void
    {
        $xml = XmlParser::load($this->link);

        $data = $xml->parse([
            'title' => [
                'uses' => 'channel.title'
            ],
            'link' => [
                'uses' => 'channel.link'
            ],
            'description' => [
                'uses' => 'channel.description'
            ],
            'image' => [
                'uses' => 'channel.image.url'
            ],
            'news' => [
                'uses' => 'channel.item[title,link,guid,description]'
            ]
        ]);

        $builder->createParser($data, $this->resource_id);
    }
}
