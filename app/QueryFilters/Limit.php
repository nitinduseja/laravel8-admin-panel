<?php

namespace App\QueryFilters;

class Limit extends Filter
{

    protected function applyFilters($builder)
    {
        return $builder->take(request($this->filterName()));
    }
}
