<?php
echo "<h1 style='text-align: center'>Hello. Its my first experience in work in php.</h1><br>";



for ($i = 0; $i<40; $i++) {echo "<span style='color: blueviolet'>___</span>"; }


echo "<h3 >Приклад роботи з змінними.</h3>\n";


$name = 'Vitalik';
$b = 'name';
echo "Hello. My $b is ".$$b."<br>";

$surname = "Yarynych";

function showSurname() {
    global $surname;
    echo "My surname is $surname<br><br>";
}

showSurname();

define("studInf", "Univers: KPI;<br> Faculty: TEF;<br> Group: TI-92");
echo studInf."<br><br>";


$adress = 'Rivne district, city: Varash';
echo 'My adress: $adress. - Не ті лапки.<br>';
echo "My adress: $adress. - Правильні лапки.<br>";

echo "<br>My adress in column:<br>";
$expExample = explode(',',$adress);
for ($i = 0; $i < count($expExample); $i++) {
    echo $expExample[$i].'<br/>';
}

echo "<br>My adress in row, again: ".implode(',',$expExample).'<br><br>';


$myAgeInt = 19;
$myAgeString = '19';

function printBool($bool) {
    if($bool) {
        echo "TRUE<br>";
    }
    else {
        echo "FALSE<br>";
    }
}

echo "My age in int = $myAgeInt;<br>";
echo "My age in string = '$myAgeString';<br>";
echo "So, are $myAgeInt and '$myAgeString' equal to each other? <br>";
echo "If we use == for comparison, answer will: ";
printBool($myAgeString==$myAgeInt);
echo "If we use === for comparison, answer will: ";
printBool($myAgeString===$myAgeInt);

echo '<br>Now we do one action: $myAgeString = (int)$myAgeString<br>';
$myAgeString = (int)$myAgeString;
echo "So, are now $myAgeInt and '$myAgeString' equal to each other? <br>";
echo "If we use == for comparison, answer will: ";
printBool($myAgeString==$myAgeInt);
echo "If we use === for comparison, answer will: ";
printBool($myAgeString===$myAgeInt);
echo "Magic<br>";


for ($i = 0; $i<40; $i++) {echo "<span style='color: blueviolet'>___</span>"; }




echo '<br><br>';




for ($i = 0; $i<40; $i++) {echo "<span style='color: red'>___</span>"; }


echo "<h3 >Приклад роботи з масивами.</h3>\n";


$friends = array("Katya", "Danya", "two Vadims");
$counter = count($friends);

echo "My friends: ";
foreach ($friends as $elem)
{
    if($counter <= 1) {
        echo "$elem.";
    } else {
        echo "$elem, ";
        $counter--;
    }
}

echo "<br>My best friend is $friends[1].<br>";


echo '<br><br>';


$friendsAges = array("Katya" => "19", "Danya" => "18", "Two Vadims" => "19");

foreach ($friendsAges as $name=>$age)
{
    echo "$name is $age years old.<br>";
}


$friendsStatus = array("online" => array("Katya", "Danya"), "offline" => array("two Vadims"));

echo '<br>Friends status:'."<br>";
foreach ($friendsStatus as $friendsOnline => $status) {
    foreach ($status as $inner_key => $value) {
        echo "$value: $friendsOnline<br>";
    }
}



for ($i = 0; $i<40; $i++) {echo "<span style='color: red'>___</span>"; }




echo '<br><br>';




for ($i = 0; $i<40; $i++) {echo "<span style='color: sandybrown'>___</span>"; }

echo "<h3 >OOP</h3>\n";

interface ISweets {
    public function show();
}

abstract class Sweets implements ISweets {
    public abstract function show();
}

class Cake extends Sweets {
    private $name;
    private $taste;
    private $cost;
    private $weight;

    public function __construct($name, $taste, $cost, $weight) {
        $this->name = $name;
        $this->taste = $taste;
        $this->cost = $cost;
        $this->weight = $weight;
    }

    public function show() {
        echo "Name: $this->name; taste: $this->taste; value: $this->cost; weight: $this->weight";
    }
}

class Pie extends Cake {
    private $syrup;

    public function __construct($name, $taste, $cost, $weight, $syrup) {
        parent::__construct($name, $taste, $cost, $weight);
        $this->syrup = $syrup;
    }

    public function show() {
        parent::show();
        echo "; syrup: $this->syrup";
    }
}

class Donat extends Sweets {
    private $name;
    private $taste;
    private $cost;
    private $sprinkle;

    public function __construct($name, $taste, $cost, $sprinkle) {
        $this->name = $name;
        $this->taste = $taste;
        $this->cost = $cost;
        $this->sprinkle = $sprinkle;
    }

    public function show() {
        echo "Name: $this->name;  taste: $this->taste;  value: $this->cost;  sprinkle: $this->sprinkle";
    }

    public function __destruct() {
        echo "<br>Object destroyed<br>";
    }
}

$objCake = new Cake("Принц", "Шоколад", 10, 0.5);
echo "<br>Our cake:<br>";
$objCake->show();

$objPie = new Pie("Королева", "Яблуко", 7, 0.25, "Кокос");
echo "<br>Our pie:<br>";
$objPie->show();

$objDonat = new Donat("Насолода", "Згужене молоко", 3, "Вишня");
echo "<br>Our donat:<br>";
$objDonat->show();
echo "<br>";




for ($i = 0; $i<40; $i++) {echo "<span style='color: sandybrown'>___</span>"; }

echo "<br><br>";

class Singleton {
    private static $instance;
    private $arr = array();

    public static function get_instance()
    {
        if (empty(self::$instance)) self::$instance = new self();
        return self::$instance;
    }

    public function getArr()
    {
        return $this->arr;
    }

    public function setArr($v)
    {
        $this->arr[] = $v;
    }
}

$Obj1 = Singleton::get_instance();
$Obj1->setArr('first');

$Obj2 = Singleton::get_instance();
$Obj2->setArr('second');

$Obj3 = Singleton::get_instance();
print_r($Obj3->getArr());
