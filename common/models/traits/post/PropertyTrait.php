<?php
/**
 * Created by PhpStorm.
 * User: 12916
 * Date: 2018/4/3
 * Time: 16:03
 */
namespace common\models\traits\post;

/**
 * Trait PropertyTrait
 * @package common\models\traits\post
 */
trait PropertyTrait
{
    /**
     * @var
     */
    protected $_statusname;

    /**
     * @return mixed
     */
    public function getStatusname()
    {
//        var_dump($this->status0);exit();
        return $this->status0->name;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->_status = $status;
    }

}
