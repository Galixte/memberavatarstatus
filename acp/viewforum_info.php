<?php
/**
 *
 * Member Avatar & Status [MAS]. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Dark❶ [dark1]
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace dark1\memberavatarstatus\acp;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * Member Avatar & Status ACP module info.
 */
class viewforum_info
{
	public function module()
	{
		return array(
			'filename'	=> '\dark1\memberavatarstatus\acp\viewforum_module',
			'title'		=> 'ACP_MAS_TITLE',
			'modes'		=> array(
				'viewforum'	=> array(
						'title'	=> 'ACP_MAS_MODE_VIEWFORUM',
						'auth'	=> 'ext_dark1/memberavatarstatus && acl_a_board',
						'cat'	=> array('ACP_MAS_TITLE')
					),
			),
		);
	}
}