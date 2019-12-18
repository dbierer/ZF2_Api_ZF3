<?php
namespace Application\Traits;

use Application\Model\UserModel;

trait UserModelTrait
{
    protected $model;
    public function __construct(UserModel $model)
    {
        $this->model = $model;
    }
}
