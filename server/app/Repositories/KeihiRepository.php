<?php

namespace App\Repositories;

use App\Repositories\KeihiInterface;
use App\Models\Keihi;

/**
 * Class KeihiRepository
 * @pakage Keihi\Repositories
 */
class KeihiRepository implements KeihiInterface
{
    /**
     * @var Keihi
     */
    protected $keihi;

    /**
     * @param Keihi $keihi
     */
    public function __construct(Keihi $keihi)
    {
        $this->keihi = $keihi;
    }

    /**
     * 取得
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        return $this->keihi->find($id);
    }

    public function getList(){
        return $this->keihi->all();
    }

    /**
     * @inheritDoc
     */
    public function update($id, $data)
    {
        if ($this->keihi->find($id)->update($data)) {
            return $id;
        }
        return null;
    }

    /**
     * @inheritDoc
     */
    public function create($data)
    {
        $model = $this->keihi->create($data);
        if (isset($model->id)) {
            return $model->id;
        }
        return null;
    }

    /**
     * @inheritDoc
     */
    public function delete($id)
    {
        return $this->keihi->find($id)->delete();
    }

    public function createEntity()
    {
        return $this->keihi->newInstance();
    }
}
