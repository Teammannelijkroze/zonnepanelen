<?php

    /**
     * Created by PhpStorm.
     * User: svenvdz
     * Date: 16-9-2016
     * Time: 10:10
     */

    class connect
    {
        $connection = new connect("root", "duurzaam001");

        private $conn;
        function __construct($user, $pass)
        {

            try {
                $dbh = new PDO('mysql:host=10.96.20.169; dbname=zonp_erfachter', $user, $pass);
            }

    
        $dbh = null;
        }
            catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }  
    }

        
        // function connect(){
        //     $this->conn = new PDO("10.96.20.169","root","duurzaam001","zonp_erfachter");
        //     if(mysqli_connect_errno()){
        //         echo "something went wrong, please try again";
        //     }
        //     return $this->conn;
        // }

    }
?>