<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.currency' shared service.

$this->services['form.type.currency'] = $instance = new \PrestaShopBundle\Form\Admin\Improve\International\Currencies\CurrencyType(${($_ = isset($this->services['prestashop.core.form.choice_provider.currency_name_by_iso_code']) ? $this->services['prestashop.core.form.choice_provider.currency_name_by_iso_code'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_CurrencyNameByIsoCodeService.php')) && false ?: '_'}->getChoices(), ${($_ = isset($this->services['prestashop.adapter.multistore_feature']) ? $this->services['prestashop.adapter.multistore_feature'] : $this->load('getPrestashop_Adapter_MultistoreFeatureService.php')) && false ?: '_'}->isUsed());

$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});

return $instance;
