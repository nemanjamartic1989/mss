<?php 

namespace Classes;

class User extends QueryBuilder
{
    private $register_result = NULL;
    private $loggedUser = NULL;

    public function registerUser()
    {
        $sql = "INSERT INTO users VALUES(NULL, ?, ?, ?, ?)";
        $query = $this->db->prepare($sql);
        $query->execute([
            $_POST['register_name'], $_POST['register_email'], $_POST['access_level'], md5($_POST['register_password'])
        ]);

        if ($query) {
			$this->register_result = true;
		}
    }
}