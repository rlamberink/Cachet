<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

/**
 * This is the searchable trait.
 *
 * @author James Brooks <james@alt-three.com>
 */
trait SearchableTrait
{
    /**
     * Adds a search scope.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array                                 $search
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch(Builder $query, array $search = [])
    {
        if (empty($search)) {
            return $query;
        }

        $allowed_search = array_intersect_key($search, array_flip($this->searchable));
        if (! $allowed_search) {
            return $query;
        }

        return $query->where($allowed_search);
    }
}
