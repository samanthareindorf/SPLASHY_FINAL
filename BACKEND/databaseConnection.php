<?php

//to use parameters to connect to database
require('databaseCredentials.php');

//database class for ease

class Database{
    //properties
    public $dataBase=null;
    public $result= null;

    //database has connection function
    public function SQLIconnect()
    {

        //assign connection to the $dataBase variable
        $this->dataBase = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);



        //test connection
        if(mysqli_connect_errno())
        {
            return false;
        }else{
            return true;
             }

    }

    //function to run queries
    public function runQuery($sqlQuery)
    {// check if not connected to database yet
        if(!$this->SQLIconnect())
        {
            return false;
        }elseif($this->dataBase == null)
        {
            return false;
        }

        //run query if passes these checks
        $this->result=mysqli_query($this->dataBase, $sqlQuery);
        if($this->result==false)
        {
            return false;
        }else
        {return true;

        }

    }
        //function to fetch record from database
        public function fetchResult()
        {//check if something is in result
            if($this->result==null)
            {
                return false;

            }elseif($this->result==false){
                return false;
            }

            //if it runs return result
            return mysqli_fetch_assoc($this->result);

        }

}



?>