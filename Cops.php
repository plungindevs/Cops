<?php
/*
__PocketMine Plugin__
 name=Cops
 description=Catch some killers 
 version=0.0.1
 author=hamachichi
 class=Cops
 apiversion=10,11,12,13
 */

class Cops implements Plugin
{
    private $api,$path,$config,$prefix;
    public function __construct(ServerAPI $api, $server = false)
    {
        $this->api = $api;
    }
    public function init()
    {
     $this->api->console->register("Cops","the main command", array($this, "command"));
 $this->api->console->register("Copslist","the main command", array($this, "copslist"));
	  $this -> path = $this -> api -> plugin -> configPath($this);
	 
    }	

		
		  
		 public function command($cmd,$args,$issuer)
        {
        switch($args[0])
{
            case "add" :
            case "a" :
                $target = $args[1];
                array_push($this -> cops, $target);
                $this -> cops = $this -> api -> plugin -> writeYAML($this -> path . "cops.yml", $target);
                return "the cop " . $target . " is ready for service";
                
      $target->setArmor(0,$this->getArmor(298));
      $target->setArmor(1,$this->getArmor(311));
      $target->setArmor(2,$this->getArmor(312));
      $target->setArmor(3,$this->getArmor(301));
                
       $this->api->console->run("give " . $target . "345 1");
       $this->api->console->run("give " . $target . "267 1");
       $this->api->console->run("give " . $target . "364 64");
       $this->api->console->run("give " . $target . "259 1");
     
      		}
    }
               

	public function __destruct(){
    }
}
