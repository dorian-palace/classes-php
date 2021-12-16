<?php

class User
{

    private $id;
    public $login;
    public $email;
    public $firstname;
    public $lastname;

    public function __construct()
    {
    }

    public function register($login, $password, $email, $firstname, $lastname)
    {

        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;

        $bdd = mysqli_connect('localhost', 'root', 'root', 'classes');
        $req = "INSERT INTO utilisateurs(login,password,email,firstname,lastname) VALUES ('$login', '$password', '$email', '$firstname', '$lastname')";

        $query = mysqli_query($bdd, $req);
    }

    public function connect($login, $password)
    {
        $bdd = mysqli_connect('localhost', 'root', 'root', 'classes');
        $req = "SELECT * FROM utilisateurs";

        $query = mysqli_query($bdd, $req);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

        var_dump($result);
    }

    public function disconnect()
    {
        $bdd = mysqli_connect('localhost', 'root', 'root', 'classes');
        $req = "SELECT * FROM utilisateurs";
        $bdd->close();
    }

    public function delete()
    {
        $bdd = mysqli_connect('localhost', 'root', 'root', 'classes');
        $req = "DELETE * FROM utilisateurs";
        $query = mysqli_query($bdd, $req);
        $bdd->close();
    }

    public function update()
    {
        $bdd = mysqli_connect('localhost', 'root', 'root', 'classes');
        $req = "UPDATE ";
    }
}
