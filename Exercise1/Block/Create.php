<?php
/**
 * Netstarter Pty Ltd.
 *
 * @category    Ns
 * @package Netstarter\Exercise1\Block
 * @author      Netstarter Team <contact@netstarter.com>
 * @copyright   Copyright (c) 2015 Netstarter Pty Ltd. (http://www.netstarter.com.au)
 */


namespace Netstarter\Exercise1\Block;


class Create extends \Magento\Framework\View\Element\Template
{
    public function getPostActionUrl()
    {
        return $this->getUrl('exercise/user/view');
    }
}