<?php 

namespace Classes;
use Carbon\Carbon;

class User extends QueryBuilder
{
    private $register_result = NULL;
    private $loggedUser = NULL;

    public function registerUser()
    {
        $sql = "INSERT INTO users VALUES(NULL, ?, ?, ?, ?, ?, ?)";
        $query = $this->db->prepare($sql);
        $query->execute([
            $_POST['register_name'], $_POST['register_email'], $_POST['access_level'], md5($_POST['register_password']), Carbon::now(), Carbon::now()
        ]);

        if ($query) {
			$this->register_result = true;
            header("Location: index");
		}
    }

    public function logUser()
	{
		$sql = "SELECT * FROM users WHERE email = ? AND password = ?";
		$query = $this->db->prepare($sql);
		$query->execute([$_POST['login_email'], md5($_POST['password'])]);
		$loggedUser = $query->fetch(\PDO::FETCH_OBJ);

		if ($loggedUser != NULL) {
			$_SESSION['loggedUser'] = $loggedUser;
			$this->loggedUser = $loggedUser;

            header("Location: index");
		}
	}

    public function logoutUser()
    {
        session_destroy();

        header("Location: login");
    }

}