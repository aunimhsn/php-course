<?php

/**
 * Write a class User with the attributes mentionned in data.json
 * and methods listed below:
 *      __construct()
 *      getUsersCount()
 *      setEmail()
 *      getAllUsers()
 * 
 * Then in an other file, with the help of any CSS framework, display users by creating nice cards for each user retrieved.
 * 
 * 
 * 
 */

class User {

    private int $_id;
    private string $_email;
    private string $_firstName;
    private string $_lastName;
    private string $_avatar;

    public function __construct(string $email, string $firstName, string $lastName, string $avatar) {
        $this->_id = $this->getUsersCount() + 1;
        $this->_email = $this->setEmail($email);
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_avatar = $avatar;
    }

    private function getUsersCount() : int {
        $file = file_get_contents('data.json');
        $json = json_decode($file, true);
        
        return count($json['users']);
    }

    public function setEmail(string $email) : void {
        (filter_var($email, FILTER_VALIDATE_EMAIL)) ? $this->_email = $email : throw new Exception('Invalid email format');     
    }

    static public function getAllUsers($assoc = false) : mixed {
        $file = file_get_contents('data.json');
        $json = json_decode($file, $assoc);

        return (is_array($json)) ? $json['users'] : $json->users;
    }

}

?>