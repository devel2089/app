<?php
class csv extends mysqli
{
    private $state_csv= false;
    public  function __construct()
    {
        parent::__construct("localhost","root","","csv");
        if ($this->connect_error) {
            echo "Fail to connect to database:". $this-> connect_error;
        }
    }
    public function import ($file) 
    {
        $file = fopen('file.csv','r');
        while ($row= fgetcsv($file)){
        $value = "'".implode("','",$row)."'";
        $q= "INSERT INTO file(first,last,age) VALUES(".$value.")";
        if ($this->query($q)) {
            $this->state_csv=true;

        } else {
            $this->state_csv=false;
            echo $this->error;
        }
        }
        if($this->state_csv) {
            echo "successfully Imported";

        }
        else{
            echo "import error";
        }
         
        $file = fopen('file2.csv','r');
        while ($row= fgetcsv($file)){
        $value = "'".implode("','",$row)."'";
        $q= "INSERT INTO file2(test,test,test) VALUES(".$value.")";
        if ($this->query($q)) {
            $this->state_csv=true;

        } else {
            $this->state_csv=false;
            echo $this->error;
        }
        }
        if($this->state_csv) {
            echo "successfully Imported";

        }
        else{
            echo "import error";
        }
    }


}
?>