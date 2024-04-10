
<?php
class User {
    private $name;
    private $email;
    private $password;

    public function first_step($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function useName() {
        if ($this->name== "ram") {
            echo "Valid user name";
        } else {
            echo "Invalid user name";
        }
    }

    public function useEmail() {
        if ( $this->email== "ram@123.com") {
            echo "Valid user email";
        } else {
            echo "Invalid email";
        }
    }

    public function usePassword() {
        if ($this->password  == 98765) {
            echo "Valid password";
        } else {
            echo "Invalid password";
        }
    }
}


$user = new User();
$user ->first_step("ram","ram@123.com",98765);
$user->useName(); 
$user->useEmail(); 
$user->usePassword(); 
?>

