<?php


namespace App\QueryFilters;

class Sort extends Filter
{

    protected function applyFilters($builder)
    {
        return $builder->orderBy(request('order') ?? 'id', request($this->filterName()));
    }
}
