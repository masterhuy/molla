<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.shop.traffic_seo.meta' shared service.

$this->services['form.type.shop.traffic_seo.meta'] = $instance = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\TrafficSeo\Meta\MetaType(${($_ = isset($this->services['prestashop.core.form.choice_provider.default_meta_page_name']) ? $this->services['prestashop.core.form.choice_provider.default_meta_page_name'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_DefaultMetaPageNameService.php')) && false ?: '_'}->getChoices(), ${($_ = isset($this->services['prestashop.core.form.choice_provider.module_meta_page_name']) ? $this->services['prestashop.core.form.choice_provider.module_meta_page_name'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_ModuleMetaPageNameService.php')) && false ?: '_'}->getChoices());

$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});

return $instance;
