<?php
namespace unerds\coords;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;





class Main extends PluginBase {
	
	public function onEnable(): void{
	$this->getLogger()->info("/coords enabled.");
		
	}

	public function onLoad():void {
		$this->getLogger()->info("coords loaded");
	}

	public function onCommand(CommandSender $sender, Command $command, $label, array $args):bool {
		switch($command->getName()){
			case "coords":
				if($sender instanceof Player){
					$playerX = $sender->getPosition()->getFloorX();
                			$playerY = $sender->getPosition()->getFloorY();
                			$playerZ = $sender->getPosition()->getFloorZ();
                			


                			$sender->sendMessage("x:" . $playerX . ", y:" . $playerY . ", z:" . $playerZ);

					return true;
				}

				else{
					$sender->sendMessage("This command only works in-game.");
					return false;
            			}
			// FUCK YOU FUCK YOU FUCK YOU FUCK YOU FUCK YOU CUNT CUNT CUNT DONT MAKE SLOPPY CODE FUCKWIT
			
		}
	}    

    public function onDisable(): void{
            $this->getLogger()->info("/coords disabled.");

	}

}
