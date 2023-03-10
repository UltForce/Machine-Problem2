<?php
class nameOfClass {
    private $name;
    private $job;
    private $age;

    public function setName($name){
        $this->name = $name;
     }
     public function getName(){
        return $this->name;
     }

     public function setJob($job){
        $this->job = $job;
     }
     public function getJob(){
        return $this->job;
     }

     public function setAge($age){
        $this->age = $age;
     }
     public function getAge(){
        return $this->age;
     }

     public function displayInfo($name, $job, $age){
        echo $name;
        echo $job;
        echo $age;
     }
}

class nameOfChild extends nameOfClass{
    private $department;

    public function departmentInfo($department){
         $this->department = $department;
     }
     
    public function setDepartment($department){
        $this->department = $department;
     }
     public function getDepartment(){
        return $this->department;
     }

    public function displayInfo($name, $job, $age){
        echo $name;
        echo $job;
        echo $age;
        echo "\nOverriden <br>";
    }
    
    function __call($name_of_function, $arguments)
    {

        if ($name_of_function == 'printInfo') {

            switch (count($arguments)) {
                case 1:{
                    echo $arguments[0];
                    echo "\nOverloaded <br>";
                    break;
                }
                case 4:{
                    echo $arguments[0];
                    echo $arguments[1];
                    echo $arguments[2]."<br>";
                    echo $arguments[3]."<br>";
                    echo "\nOverloaded <br>";
                    break;
                }
            }
        }
    }
}

class nameOfGrandChild1 extends nameOfChild{
    
}

class nameOfGrandChild2 extends nameOfChild{

}

$member1 = new nameOfClass();
$member1->setName("Fritz <br>");
$member1->setJob("Student <br>");
$member1->setAge(19);
$name1 = $member1->getName();
$job1 = $member1->getJob();
$age1 = $member1->getAge();
echo $member1->displayInfo($name1, $job1, $age1);
echo "<br> <br>";

$member2 = new nameOfChild();
$member2->setName("Ed <br>");
$member2->setJob("Alumni <br>");
$member2->setAge(23);
echo "<br>";
$member2->setDepartment("IT");
$name2 = $member2->getName();
$job2 = $member2->getJob();
$age2 = $member2->getAge();
$department2 = $member2->getDepartment();
echo $member2->displayInfo($name2, $job2, $age2);
echo ($member2->printInfo($name2, $job2, $age2, $department2));
echo "<br> <br>";

$member3 = new nameOfGrandChild1();
$member3->setName("Vuuzi <br>");
$member3->setJob("Graduate <br>");
$member3->setAge(24);
$member3->setDepartment("IS");
$name3 = $member3->getName();
$job3 = $member3->getJob();
$age3 = $member3->getAge();
$department3 = $member3->getDepartment();
echo $member3->displayInfo($name3, $job3, $age3);
echo ($member3->printInfo($name3));
?>