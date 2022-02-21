<?php

namespace App\QueryFilters;

class Count extends Filter
{

    protected function applyFilters($builder)
    {
        return $builder->count();
    }
}
