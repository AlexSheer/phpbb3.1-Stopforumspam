<?php
/**
*
* @package phpBB Extension - Find Spamer
* @copyright (c) 2018 Sheer
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace sheer\stopforumspam\migrations;

class stopforumspam_1_0_2 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['stopforumspam']) && version_compare($this->config['stopforumspam'], '1.0.2', '>=');
	}

	static public function depends_on()
	{
		return array('\sheer\stopforumspam\migrations\stopforumspam_1_0_1');
	}

	public function update_schema()
	{
		return array(
		);
	}

	public function revert_schema()
	{
		return array(
		);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('sfs_apikey', '000000')),
			// Current version
			array('config.update', array('stopforumspam', '1.0.2')),
		);
	}
}
