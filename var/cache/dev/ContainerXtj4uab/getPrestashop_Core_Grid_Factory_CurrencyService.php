<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.factory.currency' shared service.

return $this->services['prestashop.core.grid.factory.currency'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(${($_ = isset($this->services['prestashop.core.grid.definition.factory.currency']) ? $this->services['prestashop.core.grid.definition.factory.currency'] : $this->load('getPrestashop_Core_Grid_Definition_Factory_CurrencyService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.currency.grid_data_factory']) ? $this->services['prestashop.core.currency.grid_data_factory'] : $this->load('getPrestashop_Core_Currency_GridDataFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.grid.filter.form_factory']) ? $this->services['prestashop.core.grid.filter.form_factory'] : $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'});
