<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 01.03.19
 * Time: 12:19
 */

namespace Training\Test\Model\Config;


class SchemaLocator implements \Magento\Framework\Config\SchemaLocatorInterface
{
    /**
     * Path to corresponding XSD file with validation rules for merged config
     *
     * @var string
     */
    protected $_schema = null;
    /**
     * Path to corresponding XSD file with validation rules for separate config
     * files
     * @var string
     */
    protected $_perFileSchema = null;
    /**
     * @param \Magento\Framework\Module\Dir\Reader $moduleReader
     */
    public function __construct(\Magento\Framework\Module\Dir\Reader $moduleReader)
    {
        $etcDir = $moduleReader->getModuleDir('etc', 'Training_Test');
        $this->_schema = $etcDir . '/test.xsd';
        $this->_perFileSchema = $etcDir . '/test.xsd';
    }
    /**
     * Get path to merged config schema
 *
     * @return string|null
     */
    public function getSchema()
    {
        return $this->_schema;
    }
    /**
     * Get path to pre file validation schema
     *
     * @return string|null
     */
    public function getPerFileSchema()
    {
        return $this->_perFileSchema;
    }
}