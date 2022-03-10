<?php
namespace app\Repositories;
interface Repository
{
    public function getAll();

    public function findById($id);

    public function create($data);

    public function update($object, $data);

    public function destroy($object);
}
