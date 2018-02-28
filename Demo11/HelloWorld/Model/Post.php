<?php
namespace Demo11\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'mageplaza_tiki';

	protected $_cacheTag = 'mageplaza_tiki';

	protected $_eventPrefix = 'mageplaza_tiki';

	protected function _construct()
	{
		$this->_init('Demo11\HelloWorld\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}