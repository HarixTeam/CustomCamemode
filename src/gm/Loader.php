<?php
namespace gm;
use gm\Commands\GM0;
use gm\Commands\GM1;
use gm\Commands\GM2;
use gm\Commands\GM3;
use gm\Commands\GMHELP;
use pocketmine\plugin\PluginBase;

class Loader extends PluginBase{
    public function onEnable()
    {
        $this->getLogger()->info("");
        $this->getServer()->getCommandMap()->registerAll("CustomGamemode", [
            new GM0("gm0", "§fPermet de passer en mode Survie", "§4Usage: §f/gm0 /gms", ["gms"]),
            new GM1("gm1", "§fPermet de passer en mode Créative", "§4Usage : §f /gm1 /gmc", ["gmc"]),
            new GM2("gm2", "§fPermet de passer en mode Aventure", "4Usage : §f /gm2 /gma", ["gma"]),
            new GM3("gm3", "§fPermet de passer en mode Spéctateur", "4Usage : §f /gm3 /gmspec", ["gmspec"]),
            new GMHELP("gmhelp", "§fPermet de voir le menu d'aide du plugin §2CustomGamemode", "gmhelp", []),
        ]);
    }
}