
<!DOCTYPE html>
<html>
<head>
	<title>HomeWork PHP OOP</title>
</head>
<body>
<?php
class Accounting 
{
    public $User = array("Vasia Pupkin", 5322, 1520);

    
    public function GetInfo() //метод для получения данных о пользователе, который считает количество налогов
    {
        $name = $this->User[0];
        $invoice = $this->User[1];
        $accrual = $this->User[2];
        $scot = $accrual/2-10;
        $cash = $accrual - $scot;
        $infirmation = "$name;". "<br/>" . "№ Cчёта: $invoice;". "<br/>" . "Начислено: $accrual UAH;" . "<br/>" . "Удержано: $scot UAH;" . "<br/>" . "К выплате: $cash UAH.";
        return $infirmation;
    }
    
    public function NewInfo($name, $accrual) //метод для редактирования записи о пользователе
    {
        $this->User[0] = $name;
        $this->User[2] = $accrual;

    }
    public function DelInfo() //метод для удаления записи о пользователе
    {
        unset($this->User[1]);
    }
}

$account = new Accounting();
echo "Пользователь-1: {$account->GetInfo()}"."<br/><br/>";

$account1 = new Accounting();
$account1->NewInfo('Boris Filatov', 7777);
echo "Пользователь-2: {$account1->GetInfo()}"."<br/><br/>";

$account1 = new Accounting();
$account1->DelInfo();
echo "Пользователь-3: {$account1->GetInfo()}";


?>
</body>
</html>







