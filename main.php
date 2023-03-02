<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 


        class Apple{
            public $treeCount;
            public $garden = [];
            public function __construct($treeCount)
            {
                $this->treeCount=$treeCount;
            }

            // Проверка на множественное число

            public  function tree(){
                if ($this->treeCount == 1){
                    return " дерева: ";
                } else{
                    return " деревьев: ";
                }
            }

            /* Заполнеиене деревьев в массив и мгновенное заполнение их 
            нумерации по индексу, дальше прибовление им количество груш или яблок.
             Дальше суммирование их с помощью функции.*/

            public function arr(){
                for ($i = 1; $i <= $this->treeCount; $i++)
                {
                    $garden["tree №".$i] =  rand(10,20)."</br>";
                }
                print_r($garden);
                echo "</br> Количество собранных яблок с ".$this->treeCount.$this->tree().array_sum($garden)." яблок</br>";
            }
            
            
        }
        class Pear{
            public $treeCount;
            public $garden = [];
            public function __construct($treeCount )
            {
                $this->treeCount=$treeCount;
            }

            // Проверка на множественное число

            public  function tree(){
                if ($this->treeCount == 1){
                    return " дерева: ";
                } else{
                    return " деревьев: ";
                }
            }

            /* Заполнеиене деревьев в массив и мгновенное заполнение их 
            нумерации по индексу, дальше прибовление им количество груш или яблок.
             Дальше суммирование их с помощью функции.*/

            public function arr(){
                for ($i = 1; $i <= $this->treeCount; $i++)
                {
                    $garden["tree №".$i] =  rand(10,20)."</br>";
                }
                print_r($garden)."</br>";
                echo "</br> Количество собранных груш с ".$this->treeCount.$this->tree().array_sum($garden)." груш</br>";
            }
        }

        // здесь заполняется количество деревьев и выпавших плодов
        $gardenp = new Apple(3);
        $gardenp->arr() ;
        $pe = new Pear(4);
        $pe->arr() ;
    ?>
</body>
</html>
