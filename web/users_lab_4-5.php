<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>HTML5</title>
</head>
<body>
<?php
abstract class UserAbstract {
	public abstract function showInfo();
}

interface ISuperUser{
	public function getInfo();
}

interface IAuthorizeUser{
	public function auth($login, $password);
}

class SuperUser extends User implements ISuperUser, IAuthorizeUser {
	public $role;
	static $counter = 0;  
	public function __construct($username, $login, $password, $r){
		parent::__construct($username, $login, $password);
		$this->r = $r;
		SuperUser::$counter++;
	}    
	public function showInfo() {
		echo "Name - " . $this->username . " Login - " . $this->login . " Password - " . $this->password . " ROLE - " . $this->role .PHP_EOL;
	}

	public function getInfo(){
		return [
			"username" => $this->username,
			"login" => $this->login,
			"password" => $this->password,
			"role" => $this->r
		];
	}
	public function auth($login, $password){
			return ($this->login == $login) && ($this->password == $password);
	}
}

class User extends UserAbstract
{
	static $counter = 0;
	public $name;
	public $login;
	public $password;
	function __construct($n, $l, $p) {
		$this->name = $n;
		$this->login = $l;
		$this->password = $p;
		User::$counter++;
	}
	//function __destruct() {
     //  echo "Пользователь {$this->login} удалён ";
 //  }
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
$user4 = new SuperUser("Sanya","SuperUser","228336","admin");

echo $user1->showInfo();
echo $user2->showInfo();
echo $user3->showInfo();

echo "Всего root-userov: " . SuperUser::$counter .PHP_EOL;
echo "Всего обычных userov: " . (User::$counter-SuperUser::$counter) .PHP_EOL;
?>
</body>
</html>