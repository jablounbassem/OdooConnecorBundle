<?php
/**
 * Created by PhpStorm.
 * User: safa
 * Date: 30/03/2019
 * Time: 10:40 PM
 */

namespace Odoo\ConnectorBundle;

use Odoo\ConnectorBundle\DependencyInjection\OdooServiceExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;
class OdooConnectorBundle extends Bundle
{
    /**
     * Overridden to allow for the custom extension alias.
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new OdooServiceExtension();
        }
        return $this->extension;
    }
}