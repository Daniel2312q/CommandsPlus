<?php

namespace Black_Rider;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;
use pocketmine\Player;

class Commands extends PluginBase implements Listener {
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		$player = $sender->getPlayer()->getName();
		if(strtolower($cmd->getName()) === "cc") {
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage("");
			$this->getServer()->broadcastMessage(TextFormat::GREEN . "? " . TextFormat::WHITE . "Chat zosta? wyczyszczony przez: " . TextFormat::GREEN . $player);
			}
		}
}
