<?php
class person{
    private $fname;
    private $lname;
    public function __construct($fname, $lname){
        echo"initialising the object......</br>";
        $this->fname = $fname;
        $this->lname=$lname;
    }
public function __destruct(){
    echo "destroying object.......</br>";
}
public function showname(){
    echo"my name is:".$this->fname.".".$this->lname."</br>";
}
}
$mahajana=new person("Mahajana","mysore");
$mahajana->showname();
?>