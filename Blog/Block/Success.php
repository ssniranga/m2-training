<?php
/**
 * Netstarter Pty Ltd.
 *
 * @category    Ns
 * @package Netstarter\Blog\Block
 * @author      Netstarter Team <contact@netstarter.com>
 * @copyright   Copyright (c) 2015 Netstarter Pty Ltd. (http://www.netstarter.com.au)
 */


namespace Netstarter\Blog\Block;


class Success extends \Magento\Framework\View\Element\Template
{

    public function getRegData()
    {
        return $this->getRequest()->getParams();
    }
}