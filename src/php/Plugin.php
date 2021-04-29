<?php

namespace Plugin;

use Lnk7\Genie\AjaxHandler;
use Lnk7\Genie\Interfaces\GenieComponent;
use Lnk7\Genie\Utilities\AddShortcode;
use Lnk7\Genie\Utilities\HookInto;
use Lnk7\Genie\Utilities\RegisterAjax;
use Lnk7\Genie\View;
use Plugin\Exceptions\ThemeException;

class Plugin implements GenieComponent
{


	public static function setup()
	{
		/**
		 * Make sure we load jQuery
		 */
		HookInto::action('init')
			->run(function () {
				wp_enqueue_script('jQuery');
			});




	}

}
