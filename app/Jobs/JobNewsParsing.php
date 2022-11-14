<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Services\Contracts\Parser;
use App\Queries\NewsQueryBuilder;

class JobNewsParsing implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public string $link;
    public int $resource_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $link, int $resource_id)
    {
        $this->link = $link;
        $this->resource_id = $resource_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Parser $parser, NewsQueryBuilder $builder): void
    {
        $parser->setLink($this->link)
            ->setResourceId($this->resource_id)
            ->saveParserData($builder);
    }
}
