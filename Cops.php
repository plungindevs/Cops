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
    private $api;
    private $config;
    
    public function __construct(ServerAPI $api, $server = false)
    {
        $this->api = $api;
    }
    
    public function init()
    {
     $this->config = new Config($this -> path . "config.yml", CONFIG_YAML, array());
     $this->api->console->register("Cops","the main command", array($this, "command"));
     //$this->api->console->register("Cops add", "to add Cops", array($this, "command1"));
     //$this->api->console->alias("Cops a","cops add")


    public function command1($cmd, $args, $issuer)
    {
        /*The whole command needs to be reworked completely
        switch($args[0])
        {
            case "Cop" :
            //Random case with another case inside, that makes no sense?
            case "cops" :
                $target = $args[1];
                array_push($this -> cops, $target);
                $this -> cops = $this -> api -> plugin -> writeYAML($this -> path . "cops.yml", $target);
                return "the cop " . $target . " is ready for service";
                break;
		//Else statement for no reason?
		else{
		 $output="ERORR"
		 return $output;
		}
        {

        $target->setArmor(0,$this->getArmor(298));	
        $target->setArmor(1,$this->getArmor(311));
	$target->setArmor(2,$this->getArmor(312));
        $target->setArmor(3,$this->getArmor(301));

        }
        
        
      {
      	
      	 $this->api->console->run("give " . $target . " 345 1");
      	 $this->api->console->run("give " . $target . " 288 1");
         $this->api->console->run("give " . $target . " 364 64");
      	 $this->api->console->run("give " . $target . " 50 64");
      	 $this->api->console->run("give " . $target . " 267 1");
      	
      }
      	
      {	
      	$this->api->chat->broadcast("[Cops] $target is now a Cop member");
      }
      	
      	{
      		
                $this -> config['Cop'][$player] = $pref;
                $this -> api -> plugin -> writeYAML($this -> path . "cops.yml", $this -> config);
                
      	}
      	 $this -> api -> chat -> sendTo(false,"[Cops] you are now a cop");
      
      }*/
}

 public function __destruct()
    {

    }

}
?>
