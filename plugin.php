<?php
pocketmine\plugin("TestComposer")
	->main(SOFe\TestComposer\Main::class)
	->loadBefore("AnEarlyPlugin")
;
