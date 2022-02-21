<?php

namespace App\QueryFilters;

class Skip extends Filter
{

    protected function applyFilters($builder)
    {
        return $builder->skip(request($this->filterName()));
    }
}
