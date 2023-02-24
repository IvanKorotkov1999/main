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
            public $col;
            public $a = [];
            public $s ;
            public function __construct($col, $s)
            {
                $this->col=$col;
                $this->s=$s;
            }

            // Проверка на множественное число

            public  function tree(){
                if ($this->col == 1){
                    return " дерева: ";
                } else{
                    return " деревьев: ";
                }
            }

            /* Заполнеиене деревьев в массив и мгновенное заполнение их 
            нумерации по индексу, дальше прибовление им количество груш или яблок.
             Дальше суммирование их с помощью функции.*/

            public function arr(){
                for ($i = 1; $i <= $this->col; $i++)
                {
                    $a["tree №".$i] = $this->s."</br>";
                }
                print_r($a);
                echo "</br> Количество собранных яблок с ".$this->col.$this->tree().array_sum($a)." яблок</br>";
            }
            
            
        }
        class Pear{
            public $col;
            public $a = [];
            public $s ;
            public function __construct($col, $s)
            {
                $this->col=$col;
                $this->s=$s;
            }

            // Проверка на множественное число

            public  function tree(){
                if ($this->col == 1){
                    return " дерева: ";
                } else{
                    return " деревьев: ";
                }
            }

            /* Заполнеиене деревьев в массив и мгновенное заполнение их 
            нумерации по индексу, дальше прибовление им количество груш или яблок.
             Дальше суммирование их с помощью функции.*/

            public function arr(){
                for ($i = 1; $i <= $this->col; $i++)
                {
                    $a["tree №".$i] = $this->s."</br>";
                }
                print_r($a)."</br>";
                echo "</br> Количество собранных груш с ".$this->col.$this->tree().array_sum($a)." груш</br>";
            }
        }

        // здесь заполняется количество деревьев и выпавших плодов
        $ap = new Apple(1, rand(40,50));
        $ap->arr() ;
        $pe = new Pear(4, rand(10,20));
        $pe->arr() ;
    ?>
</body>
</html>