<?php
namespace main;

use main\cmd\trade;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;

class main extends PluginBase implements Listener
{


    public function onLoad()
    {

    }

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getPluginManager()->registerEvents(new lists(), $this);
        $this->getServer()->getCommandMap()->register("Plugin", new trade());
    }

    public function playerchat(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        $player->sendMessage("сломай блок травы");

    }

    public function onBreak(BlockBreakEvent $event){
        $player = $event->getPlayer();
        $block = $event->getBlock();
        $id = $block->getId();

        $array = [1,2,3,5];

        var_dump($array);

        if(in_array($id, $array)){
            $player->sendMessage("напиши команду /trade");

        }
    }

    public function onDisable()
    {

    }
}