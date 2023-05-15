<?php

namespace main\cmd {

    use pocketmine\command\Command;
    use pocketmine\command\CommandSender;
    class trade extends \pocketmine\command\Command
    {

        public function __construct()
        {
            parent::__construct(
                "trade",
                "описание",
                "использование",
                ['Trade']);
        }

        public function execute(CommandSender $sender, $commandLabel, array $args)
        {

        }
    }

}