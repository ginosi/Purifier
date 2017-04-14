<?php
/**
 * @license See the file LICENSE for copying permission.
 */

namespace Soflomo\Purifier\Factory;

use Soflomo\Purifier\MutableCreationOptionsInterface;
use Soflomo\Purifier\MutableCreationOptionsTrait;
use Soflomo\Purifier\PurifierFilter;
use Zend\ServiceManager\ServiceManager;

class PurifierFilterFactory implements MutableCreationOptionsInterface
{
    use MutableCreationOptionsTrait;

    public function __invoke(ServiceManager $serviceManager)
    {
        $htmlPurifier = $serviceManager->get('HTMLPurifier');

        return new PurifierFilter($htmlPurifier, $this->getCreationOptions());
    }
}
