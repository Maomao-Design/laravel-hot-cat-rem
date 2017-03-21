<?php
/**
 * Created by PhpStorm.
 * User: Anla-E
 * Date: 2017/3/21
 * Time: 10:22
 */

namespace App\Contracts;
use Closure;

interface AnCache
{
    public function setTag($tag);
    public function setTime($time_in_minute);
    public function remember($key, Closure $entity, $tag = null);
    public function forget($key, $tag = null);
    public function clearCache($tag = null);
    public function clearAllCache();
}