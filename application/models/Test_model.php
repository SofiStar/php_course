<?php
Class Test_model extends CI_model {


public function getNames(){
  $names=array(
  array("fname" => 'jim',"lname"=>'Jones');
  array("fname" => 'lisa',"lname"=>'Jones');
  array("fname" => 'anna',"lname"=>'Jones');
);
  return $names;
}
}
