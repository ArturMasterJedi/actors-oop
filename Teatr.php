<?php


class Teatr
{
    private $count;

    public function __construct($count)
    {
        if (!empty($count)){
            $this->count=$count;
        }else{
            $this->count=0;
            return '<br> Не введено количество';
        }
    }
    /*Методы*/
    public function perfomance($arrayActor, $arrayWatching){
        echo '<h2>Вывод Количества актёров и зрителей</h2>';
        if (count($arrayActor)>0){
            $actorCount = count($arrayActor);
        }
        if (count($arrayWatching)>0){
            $watchingCount = count($arrayWatching);
        }
        return '<br>Я имею актёров - '.$actorCount.'<br>Я имею зрителей - '.$watchingCount;
    }
    public static function showAllActors($arrayActor){
        if (count($arrayActor)>0){
            echo '<h2>Вывод всех актёров</h2>';
            for ($i=0; $i<count($arrayActor); $i++){
                echo '<br>'.$arrayActor[$i]->show().'<br>';
            }
        }
    }
    public static function showAllWatching($arrayWatching){
        if (count($arrayWatching)>0){
            echo '<h2>Вывод всех зрителей</h2>';
            for ($i = 0; $i < count($arrayWatching); $i++){
                echo '<br>'.$arrayWatching[$i]->show().'<br>';
            }
        }
    }
    public static function addActor($newActor, $oldArr){
        if (!empty($newActor) && count($oldArr)>0) {
            array_push($oldArr, $newActor);
        }

        return $oldArr;
    }
    public static function addWatching($newWatching, $oldArr){
        if (!empty($newWatching) && count($oldArr)>0){
            array_push($oldArr, $newWatching);
        }

        return $oldArr;
    }

    public function setCount($count){
        if (!empty($count)){
            $this->count=$count;
        }else{
            $this->count=0;
            return '<br> Не введено количество мест в зале театре';
        }
    }

    public function getCount(){
        return $this->count;
    }

    public function print(){
        return '<br> Имею мест - '.$this->getCount();
    }
}