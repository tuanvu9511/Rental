<?php
namespace App\Repositories;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Models\warehouse;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * Get all
     * @return mixed
     */
    public function getAll()
    {
        return warehouse::all();
    }

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return warehouse::find($id);
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create($attributes=[])
    {
        return warehouse::create();

    }

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return mixed
     */
    public function update($id, $attributes = [])
    {

    }

    /**
     * Delete
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {

    }
}