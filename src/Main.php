<?php

namespace SOFe\TestComposer;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
	public function onEnable(){
		$this->getLogger()->info("I have been enabled");
	}
}
