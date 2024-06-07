<?php
    namespace dashboard\projects\Igame\Igame\app\Models;
    use Illuminate\Database\Eloquent\Model;

class registerModel
{

    //Declare variables
    private $servername;
    private $username;
    private $password;
    private $conn;
    private $dbname;

    public function __construct(string $name)
    {
        //initialise variables
        $this->servername="mysqli";
        $this->username="root";
        $this->password="";
        $this->dbname="laraveligame2024";

        $this->insertUsername($name);
    }
    private function openDbConnection()
    {
        //create connection
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);

        //chheck connection
        if($this->conn->connect_error)
        {
            die("Connection failed: " . $this->conn->connect_error);
        }else
        {
            echo "Connected succsesfully!";
        }
    }
    public function insertUsername(string $name)
    {
        //call function in this class to open a db connection
        $this->openDbConnection();

        //sqlquery with 1 prepared statement
        $sql="INSERT INTO users (username) VALUES (?)";

        //prepare the statement
        $stmt = $this->conn->prepare($sql);

        //bind prepared statement to value
        $stmt->bind_param("s", $name);
        $stmt->execute();

        if($this->conn->query($sql) == TRUE)
        {
            echo "New record created succsesfully!";
        }else
        {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }

        //close connection
        $stmt->close();
        $this->conn->close();
    }
}

