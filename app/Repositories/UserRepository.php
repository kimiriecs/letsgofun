<?php

namespace App\Repositories;

use App\Models\User as Model;

class UserRepository extends BaseRepository
{
  /**
   * @param integer $id
   *
   * @return Model
   */

   public function getModelForEdit( $id )
   {
      return $this->startConditions()->find( $id );
   }

  /**
   * @param integer|null $perPage
   *
   * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
   */
   public function getAllWithPagination( $perPage = null )
   {
      $columns = [
         'id',
         'name',
         'email',
         'created_at',
         'updated_at',
      ];
      $result = $this->startConditions()
                     ->select( $columns )
                     ->orderBy( 'id', 'DESC' )
                     ->with([ 'orders', 'tasks' ])
                     ->paginate( $perPage );
      return $result;
   }
}