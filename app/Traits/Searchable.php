<?php

namespace App\Traits;

trait Searchable
{
    /**
     * Search a user in storage
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  array  $data
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $data)
    {
        $keyword = $data['keyword'];
        $type = $data['type'];

        if ($keyword !== null) {
            $query->where('name', 'like', '%'.$keyword.'%')
                ->orWhere('email', 'like', '%'.$keyword.'%');
        }

        return $query
            ->select('*')
            ->selectRaw("'$type' as model");
    }
}
