<?php
require '../vendor/autoload.php';

use Widmogrod\Monad\Maybe as m;
use Widmogrod\Functional as f;

use function Widmogrod\Functional\fromIterable;  // use function 新用法

$list1 = fromIterable([2, 5, 2]);
$list2 = fromIterable([2, 0, 2]);
// var_dump($list);die;

$divide = function($acc, $i) {
    return $i == 0 ? m\nothing() : m\just($acc / $i);
};

var_dump(f\foldM($divide, 100, $list1)->extract()); // foldM 的参数类型 必须是 Foldable 类型 查看测试文件
// int(5)

var_dump(f\foldM($divide, 100, $list2)->extract());
// NULL

// foldM 定义
/*
 * foldM :: (Foldable t, Monad m) => (b -> a -> m b) -> b -> t a -> m b
 *
 * ```haskell
 * foldlM :: (Foldable t, Monad m) => (b -> a -> m b) -> b -> t a -> m b
 * foldlM f z0 xs = foldr f' return xs z0
 *      where f' x k z = f z x >>= k
 *
 * foldr :: (a -> b -> b) -> b -> t a -> b
 * ```
 *
 * @param callable $f  (a -> b -> m a)
 * @param null     $z0
 * @param Foldable $xs [b]
 *
 * @return mixed m a
 */
/*
function foldM(callable $f, $z0 = null, Foldable $xs = null)
{
    return curryN(3, function (
        callable $f,
        $z0,
        $xs
    ) {
        $result = foldr(function ($x, $k) use ($f, $z0) {
            if ($k === null) {
                return $f($z0, $x);
            } else {
                return $k->bind(function ($z) use ($f, $x) {
                    return $f($z, $x);
                });
            }
        }, null, $xs);

        return $result === null
            ? fromNil()
            : $result;
    })(...func_get_args());
}


*/

