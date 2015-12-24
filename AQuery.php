<?php
/**
 * @Author: Jaeger <hj.q@qq.com>
 * @Date:   2015-11-11 17:52:40
 * @Last Modified by:   Jaeger
 * @Last Modified time: 2015-12-24 18:07:24
 * @version         1.0
 * 扩展基类
 */
namespace QL\Ext;

use QL\QueryList;

abstract class AQuery
{
     abstract function run(array $args);

    public function getInstance($className = QueryList::class)
    {
        $args = func_get_args();
        array_shift($args);
        $getInstance = new ReflectionMethod("QL\QueryList::getInstance");
        return $getInstance->invokeArgs(null,args);
    }

}
