<?php

namespace Omega892\Dash\Events;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\VanillaItems;
use pocketmine\math\Vector3;

class DashEvent implements Listener {

    public function onInteract(PlayerInteractEvent $event): void {
        $player = $event->getPlayer();
        $item = $event->getItem();

        if($item->getTypeId() === VanillaItems::FEATHER()->getTypeId()) {
            $direction = $player->getDirectionVector()->normalize()->multiply(1.8);
            $player->setMotion(new Vector3($direction->x, 0.3, $direction->z));
        }
    }
}