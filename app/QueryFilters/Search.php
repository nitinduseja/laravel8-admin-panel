<?php

namespace App\QueryFilters;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class Search extends Filter
{

    protected function applyFilters($builder)
    {
        if (!empty($builder->first())) {
            $getTableName = ($builder->first()->getTable());
            $table_columns = DB::getSchemaBuilder()->getColumnListing($getTableName);

            $builder->where(function ($query) use ($table_columns, $getTableName) {
                foreach ($table_columns as $table_column) {
                    $query->orWhere($getTableName . '.' . $table_column, 'LIKE', '%' . request($this->filterName()) . '%');
                }
            });

            return $builder->limit(null);
        }
        return $builder;
    }
}
