<?php

namespace App\Repositories;

use App\Models\Order as Model;

class OrderRepository extends BaseRepository
{
    /**
     * @param integer $id
     * @return Model
     */
    public function getModelForEdit( $id )
    {
        return $this->startConditions()->find( $id );
    }

    /**
     * @param integer|null $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAllWithPagination( $perPage = null )
    {
        $columns = [
            'id',
            'name',
            'digit',
            'description',
            'order_status_id',
            'user_id',
            'created_at',
            'updated_at',
        ];
        $result = $this->startConditions()
                        ->select( $columns )
                        ->orderBy( 'id', 'DESC' )
                        ->with([ 'user', 'status' ])
                        ->paginate( $perPage );
        return $result;
    }
}