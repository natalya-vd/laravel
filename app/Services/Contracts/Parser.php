<?php

namespace App\Services\Contracts;

use App\Queries\NewsQueryBuilder;

interface Parser
{
    public function setLink(string $link): self;
    public function setResourceId(int $resource_id): self;
    public function saveParserData(NewsQueryBuilder $builder): void;
}
