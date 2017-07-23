<?php


namespace CKylin;

//COMMON Uses
use pocketmine\plugin\Plugin;
use pocketmine\utils\TextFormat as Color;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\event\entity\ItemSpawnEvent;
use pocketmine\entity\Entity;


class CkDropDisplay extends PluginBase implements Listener
{

    public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
    
    public function onItemSpawn(ItemSpawnEvent $e){
        $entity = $e->getEntity();
        $item = $entity->getItem();
        $name = $item->getName();
        $entity->setNameTag($name);
        $entity->setNameTagVisible(true);
        $entity->setNameTagAlwaysVisible(true);
    }
}
