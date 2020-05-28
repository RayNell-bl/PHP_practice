<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>HTML5</title>
</head>
<body>
<?php
class User 
{
	public $name;
	public $login;
	public $password;
	function __construct($n, $l, $p) {
		$this->name = $n;
		$this->login = $l;
		$this->password = $p;
	}
	function __destruct() {
       echo "Пользователь {$this->login} удалён ";
   }
	function eol(){
		echo "<br>\n";
    }
	public function showInfo() {
		echo "{$this->name} {$this->login} {$this->password}";
		$this->eol();
	}
}
$user1 = new User('Alexey', 'Alexey22', '12345');
$user2 = new User('Andrew', 'Andrew21', '54321');
$user3 = new User('Alexius', 'Alexey23', '32222');
/*
$user1->name = 'Alexey';
$user1->login = 'Alexey22';
$user1->password = '12345';

$user2->name = 'Andrew';
$user2->login = 'Andrew21';
$user2->password = '54321';

$user3->name = 'Alexius';
$user3->login = 'Alexey23';
$user3->password = '32222';
*/
echo $user1->showInfo();
echo $user2->showInfo();
echo $user3->showInfo();
?>
</body>
</html>