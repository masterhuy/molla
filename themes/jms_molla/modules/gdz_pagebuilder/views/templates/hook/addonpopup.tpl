{*
* 2007-2020 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2020 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="pb-popup gdz-popup-overlay" style="display: none;">
	<div class="gdz-popup newsletter-popup-container animated fadeIn hidden">
		<div class="row no-gutters bg-white newsletter-popup-content">
			<div class="col-xl-3-5col col-lg-7 banner-content-wrap">
				<div class="gdz-popup-content banner-content text-center">
					<img src="{$urls.theme_assets}images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
					{if $popup_title}
						<h2>
							{$popup_title|escape:'htmlall':'UTF-8'}
						</h2>
					{/if}
					<h2 class="banner-title">get <span>25<span class="light">%</span></span> off</h2>
					<p>{l s='Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products' mod='gdz_pagebuilder'}.</p>
					<div class="gdz-popup-content">
						{$popup_content nofilter}
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" name="dontshowagain" value="1" id="dontshowagain" class="custom-control-input">
						<label class="custom-control-label">{l s='Do not show this popup again' mod='gdz_pagebuilder'}</label>
					</div>
				</div>
				<input type="hidden" name="width_default" id="width-default" value="{$popup_width|escape:'htmlall':'UTF-8'}" />
				<input type="hidden" name="height_default" id="height-default" value="{$popup_height|escape:'htmlall':'UTF-8'}" />
				<input type="hidden" name="loadtime" id="loadtime" value="{$loadtime|escape:'htmlall':'UTF-8'}" />
			</div>
			<div class="col-xl-2-5col col-lg-5">
				<img src="{$urls.theme_assets}images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
			</div>
		</div>
		<a class="mfp-close popup-close"></a>
	</div>
</div>
