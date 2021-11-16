<?php
namespace gm\Commands;
use gm\Utils\Messages;
use gm\Utils\Permission;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class GM3 extends Command{
    public function __construct(string $name, string $description = "", string $usageMessage = null, array $aliases = [])
    {
        parent::__construct($name, $description, $usageMessage, $aliases);
    }
    public function execute(CommandSender $player, string $commandLabel, array $args)
    {
        if($player instanceof Player){
            if($player->hasPermission(Permission::GM3)){
                $player->setGamemode(3);
                $player->sendMessage(Messages::GM3);
            }else{
                $player->sendMessage(Messages::NOPERM);
            }
        }else{
            $player->sendMessage(Messages::NOPLAYER);
        }
    }
}