<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ArticleRat extends Model
{
    //设置默认操作的表名
    public $table = 'articles_ratings';
    //设置日期字段保存格式
   // protected $dateFormat = 'U';
    //public $timestamps = false; //不验证时间
}
