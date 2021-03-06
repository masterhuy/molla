<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.kpi.order_per_customer' shared service.

return $this->services['prestashop.adapter.kpi.order_per_customer'] = new \PrestaShop\PrestaShop\Adapter\Kpi\OrdersPerCustomerKpi(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.kpi_configuration']) ? $this->services['prestashop.adapter.legacy.kpi_configuration'] : ($this->services['prestashop.adapter.legacy.kpi_configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration\KpiConfiguration())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getAdminLink("AdminStats", true, ["ajax" => 1, "action" => "getKpi", "kpi" => "orders_per_customer"]));
