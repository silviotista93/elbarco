{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<div class="footer-container">
	<div class="statictop">
		{hook h='displayBlockFooter1'}
	</div>
	<div class=" footer-middle">
		<div class="container">	
			  <div class="row">	
					<div class="col-sm-12 col-md-12 col-lg-3 col-xs-12 footer_block box1">
						{hook h='displayFooterBefore'}
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12 box2">
						<div class="row">
						{hook h='displayFooter'}
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-3 col-xs-12 footer_block box3">
						{hook h='displayFooterAfter'}
					</div>
			  </div>
		</div>
	</div>
	{hook h='displayBlockFooter2'}
</div>
