<?php
	/**
	 * Elgg COPPA plugin
	 * 
	 * @package ElggCOPPA
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008-2009
	 * @link http://elgg.com/
	 */

	function coppa_init()
	{
		register_plugin_hook("action", "register", "coppa_register");
	}
	
	function coppa_register($hook, $entity_type, $returnvalue, $params)
	{
		$coppa = get_input('coppa');
		if ($coppa)
			return true;
			
		register_error('coppa:fail');
		return false;
	}
	
	register_elgg_event_handler('init','system','coppa_init');
?>