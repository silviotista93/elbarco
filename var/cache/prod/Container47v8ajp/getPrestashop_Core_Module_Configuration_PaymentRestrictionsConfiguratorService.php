<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.module.configuration.payment_restrictions_configurator' shared service.

return $this->services['prestashop.core.module.configuration.payment_restrictions_configurator'] = new \PrestaShop\PrestaShop\Core\Module\Configuration\PaymentRestrictionsConfigurator(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'eb_', ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : ($this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext())) && false ?: '_'}->getContext()->shop->id, ${($_ = isset($this->services['prestashop.adapter.module.payment_module_provider']) ? $this->services['prestashop.adapter.module.payment_module_provider'] : $this->load('getPrestashop_Adapter_Module_PaymentModuleProviderService.php')) && false ?: '_'});
