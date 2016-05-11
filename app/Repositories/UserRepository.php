<?php
/**
 * Created by PhpStorm.
 * User: didik
 * Date: 06/05/16
 * Time: 22:19
 */

namespace Mytransaction\Repositories;

use Mytransaction\Models\User;

class UserRepository
{
    /**
     * @var User
     */
    private $model;

    /**
     * UserRepository constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * @param array $filters
     * @param array $relationships
     *
     * @return mixed
     */
    private function collection($filters = [], $relationships = [])
    {
        $collection = $this->model->noFilter();

        // do custom query here

        // do filter query
        if (count($filters) > 0) {

        }

        // call relationships
        if (count($relationships) > 0) {
            $collection->withRelationship($relationships);
        }

        return $collection;
    }

    /**
     * @param bool $paginate
     * @param array $filters
     * @param array $relationships
     *
     * @return mixed
     */
    public function all($paginate = true, $filters = [], $relationships = [])
    {
        $collection = $this->collection($filters, $relationships)->createdAtDesc();
        if ($paginate) {
            return $collection->paginate(10);
        }

        return $paginate->get();
    }

    /**
     * @param $id
     * @param array $relationships
     *
     * @return mixed
     */
    public function findById($id, $relationships = [])
    {
        return $this->collection([], $relationships)->modelId($id)->first();
    }

    /**
     * @param $data
     *
     * @return static
     */
    public function store($data)
    {
        return $this->model->create($data);
    }

    /**
     * @param $id
     * @param $data
     *
     * @return mixed
     */
    public function update($id, $data)
    {
        return $this->model->modelId($id)->update($data);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->modelId($id)->delete();
    }
}