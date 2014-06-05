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
    public function __construct(ServerAPI $api, $server = false)
    {
        $this->api = $api;
    }
    public function init()
    {
     $this->api->console->register("Cops","the main command"array($this, "command"));
      $this->api->console->register("Cops add", "to add Cops"array($this, "command1"));
	 $this->api->console->alias("Cops a","cops add")
	 $this -> cops = new Config($this -> path . "cops.yml", CONFIG_YAML, array());



		 public function command1($cmd, $args, $issuer)
    {
        switch($args[0])
        {
            case "Cop" :
            case "cops" :
                $target = $args[1];
                array_push($this -> cops, $target);
                $this -> cops = $this -> api -> plugin -> writeYAML($this -> path . "cops.yml", $target);
                return "the cop " . $target . " is ready for service";
                break;
		else{
		 $output="ERORR"
		 return $output;
		}
        }


