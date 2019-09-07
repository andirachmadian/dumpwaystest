<?php

class CreateBiodata {
    // constructor
    public function __construct($name, $address, $hobbies, $is_married, $school, $skills) {
        $this->name = $name;
        $this->address = $address;
        $this->hobbies = $hobbies;
        $this->is_married = $is_married;
        $this->school = $school;
        $this->skills = $skills;
    }
}

$myName = "Andi Kharisma Rachmadian";
$myAddress = "De Green Grande Residence C2 Ciwastra Bandung";
$myHobbies = array("Basket", "Musik");
$myMarriedStatus = false;
$mySchool = array(
    "highSchool" => "SMA PGRI 1",
    "university" => "Institut Teknologi Nasional"
);

$skill1 = array(
	"name" => "HTML",
	"level" => "intermediate"
);

$skill2 = array(
	"name" => "CSS",
	"level" => "intermediate"
);

$mySkills = array($skill1, $skill2);

$biodata = new CreateBiodata($myName, $myAddress, $myHobbies, $myMarriedStatus, $mySchool, $mySkills);

header("Content-Type: application/json");

echo json_encode($biodata, JSON_PRETTY_PRINT);
