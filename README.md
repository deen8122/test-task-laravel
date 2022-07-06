<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Тестовое задание


########## Задача №1 ##########

Напишите функцию, которая развернёт список.
Последний элемент должен стать первым, а первый - последним.
$c→next должен содержать $b и так далее...

class test {
public $next;
}

$a = new test();
$b = new test();
$c = new test();
$a->next = $b;
$b->next = $c;
$c->next = null;

Пример результата:
function reverse($a) {
// какой-то код
}
$ob1 = reverse($a);
var_dump($ob1);















########## Задача №2 ##########

Даны две модели Order и Manager
class Order extends Model
{
public function manager()
{
return $this->hasOne('App\Manager');
}
}

class Manager extends Model
{
}

Каждый Order имеет manager_id. Manager имеет id, firstName, lastName
Необходимо вывести 50 заказов (Order) + fullName менеджера с минимальным кол-вом запросов к бд.
Дополните класс Order.
Реализовать нужно без использование join.

===========================

$orders = Order::with("manager")->take( 50 )









########## Задача №3 ##########

Даны веса посылок $boxes и вес, который может увезти курьер $weight.
Курьер должен возить по 2 посылки, которые вмес~~~~те по весу будут строго равны $weight.
Необходимо найти максимальное количество рейсов, которые курьер сможет сделать с учетом условий.

// первые входные данные
$boxes = [1, 2, 1, 5, 1, 3, 5, 2, 5, 5];
$weight = 6;
// вторые входные данные
$boxes = [2,4,3,6,1];
$weight = 5;

public function getResult(array $boxes, int $weight): int
{
// какой-то код
}


## Решение

1 Смотрите контроллер TestController::testTask() <br>Ссылка на контроллер: https://github.com/deen8122/test-task-laravel/blob/main/app/Http/Controllers/TestController.php<br>
2 Скриншот c результатами: ![Screenshot](storage/test1.png)<br>
3. Для запуска (если друг захочется делаем миграцию)<br>
