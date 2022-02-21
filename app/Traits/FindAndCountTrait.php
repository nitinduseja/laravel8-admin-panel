<?php

namespace App\Traits;

use Illuminate\Pipeline\Pipeline;

trait FindAndCountTrait
{
    public static function FindAndCount($query = null)
    {
        $filter = app(Pipeline::class)
              ->send($query ?? self::query())
              ->through([
                    \App\QueryFilters\Status::class,
                    \App\QueryFilters\Sort::class,
                    \App\QueryFilters\Limit::class,
                    \App\QueryFilters\Search::class,
                    \App\QueryFilters\Skip::class,
                ])
               ->thenReturn();

        return $filter->paginate(request('limit') ?? 10);
    }
}
