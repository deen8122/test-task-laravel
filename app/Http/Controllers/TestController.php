<?php

namespace App\Http\Controllers;

use App\Models\TestTask\Order;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController
{

    public function testTask()
    {
        $this->l("########## Задача №1 ##########");
        $this->task1();
        $this->l("########## Задача №2 ##########");
        $this->task2();
        $this->l("########## Задача №3 ##########");
        $this->task3();

    }

    /*########## Задача №1 ##########*/
    private function task1()
    {
        $a = new Test("a");
        $b = new Test("b");
        $c = new Test("c");
        $d = new Test("d");
        $a->next = $b;
        $b->next = $c;
        $c->next = $d;

        $d->next = null;
        $this->l("До");
        $this->l($a);

        $ob1 = $this->reverse($a);
        $this->l("После");
        $this->l($ob1);

    }


    private function reverse($a) {
        $tmp = clone($a);
        $lastObj = null;
        while($tmp){
            $nextObj = $tmp->next ;
            $tmp->next = $lastObj;
            $lastObj = $tmp;
            $tmp = $nextObj;
        }
        return $lastObj;
    }

    /*########## Задача №2 ##########*/
    private function task2()
    {
        $orders = Order::with('manager')->take(5)->get();

        foreach ($orders as $order) {
            echo '<br>';
            echo 'order_id = '.$order->id.' '.$order->manager->fullname;
        }

    }


    /*########## Задача №3 ##########*/
    private function task3()
    {
        // первые входные данные
        $boxes = [1, 2, 1, 5, 1, 3, 5, 2, 5, 5];
        $weight = 6;
        $maxCount = $this->getResult($boxes,$weight);
        echo '<br>максимальное количество рейсов = '.$maxCount;
        // вторые входные данные
        $boxes = [2,4,3,6,1];
        $weight = 5;
        $maxCount = $this->getResult($boxes,$weight);
        echo '<br>максимальное количество рейсов = '.$maxCount;
    }

    /*
     *
     *
     */
    public function getResult(array $boxes, int $weight): int
    {

        $arResult = [
            "normal",
            "not_normal"
        ];
        foreach ($boxes as $i => &$box1Weight){
            foreach ($boxes as $j => &$box2Weight){
                /*
                 * 1 - исключаем суммирование самого на себя $i != $j
                 * 2 - сумма должна быть = $weight
                 */
                if( $i != $j  && ($box1Weight + $box2Weight)  == $weight ){
                    $arResult["normal"][]  = "[{$i}] {$box1Weight} +  [{$j}] {$box2Weight} = {$weight}";
                    unset($boxes[$i]);
                    unset($boxes[$j]);
                    break;
                }
            }
        }
        /*
         * Не удовлетвовряющие условию элементы массива
         */
        $arResult['not_normal'] = $boxes;
        // $this->l($arResult);
        return count($arResult['normal']);
    }





    private function l($arr){
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

}
