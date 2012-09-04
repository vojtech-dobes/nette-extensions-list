<?php

namespace VojtechDobes;

use Nette;
use Nette\Config;


/**
 * Enables registration of other extensions in $config file
 *
 * @author  Vojtěch Dobeš
 * @license New BSD
 */
class ExtensionsList extends Config\CompilerExtension
{

	public function loadConfiguration()
	{
		$container = $this->getContainerBuilder();
		$config = $this->getConfig();

		foreach ($config as $name => $class) {
			$this->compiler->addExtension($name, new $class);
		}
	}

}
