<?php

namespace Omega892\Dash;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use Omega892\Dash\Events\DashEvent;

class Main extends PluginBase {

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents(new DashEvent(), $this);
    }
}