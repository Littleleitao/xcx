<?php

namespace app\api\model;

use think\Model;

class Image extends BaseModel
{
    protected $hidden = ['delete_time', 'id', 'from'];

    public function getUrlAttr($value, $data)
    {
    	//获取图片url的完整路径(图片存放在本地服务器,若是云服务器上则可以不用)
        return $this->prefixImgUrl($value, $data);
    }
}

