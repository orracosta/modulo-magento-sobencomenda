<?php
namespace RafaelCosta\SobEncomendaModal\Model\Attribute\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Options extends AbstractSource
{
    /**
     * Get all options
     * @return array
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => __('Ativo'), 'value' => '1'],
                ['label' => __('Inativo'), 'value' => '0']
            ];
        }
        return $this->_options;
    }
}
