<?php
/**
 * File fr.php
 *
 * This file override original i18n file to have same info between javascript and php
 *
 * PHP version 5.4+
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   3.1.0
 * @link      http://www.sweelix.net
 * @category  i18n
 * @package   sweelix.yii1.admin.core.i18n
 */
return CMap::mergeArray(
	require(Yii::getPathOfAlias('system.i18n.data').DIRECTORY_SEPARATOR.basename(__FILE__)),
	array(
		'dateFormats' =>
		array (
			'full' => 'EEEE d MMMM y',
			'jui_full' => 'DD d MM yy',
			'long' => 'd MMMM y',
			'jui_long' => 'd MM yy',
			'medium' => 'd MMM y',
			'jui_medium' => 'd M yy',
			'short' => 'dd/MM/yyyy',
			'jui_short' => 'dd/mm/yy',
		)
	)
);
