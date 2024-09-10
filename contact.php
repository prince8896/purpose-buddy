<?php 

class user{
    private $con;
     
    public function __construct() {
        $this->con= mysqli_connect("localhost","root","","testing");
        if(mysqli_connect_error()){
            echo mysqli_connect_error();
        }
    }
    public function addrecord($data){
       
        $query="INSERT INTO data set name='".$data['name']."',age='".$data['age']."',password='".$data['password']."'";
        $runquery=mysqli_query($this->con, $query);
        if($runquery){
            echo "done";
        }else
        echo mysqli_error($this->con);
    }

    public function recordlist(){
        $query="select * from data";
        $runquery=mysqli_query($this->con, $query);
        $responseArray=array();
        while($data=mysqli_fetch_array($runquery))
        {
            $responseArray[]=$data;
           

        }
        return $responseArray;
    }
    public function delete($id){
        $query="delete from data where id='".$id."'";
        $runquery=mysqli_query($this->con, $query);
        if($runquery){
            return true;

        }else{
            return  mysqli_error($this->con);
        }
       
    }
    public function getformdata($id){
        $query="select * from data where id='".$id."'";
        $runquery=mysqli_query($this->con, $query);
        $getdat=mysqli_fetch_array($runquery);
        return $getdat;
    }
    
    public function updaterecord($data,$id){
       
        $query="UPDATE data set name='".$data['name']."',age='".$data['age']."',password='".$data['password']."' where id='".$id."'";
        $runquery=mysqli_query($this->con, $query);
        if($runquery){
           return true;
        }else
        echo mysqli_error($this->con);
    }
}

$user=new user();


?>



