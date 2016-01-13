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
    protected $session;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\Session $session,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->session=$session;
    }


    public function getPostActionUrl()
    {
        return $this->getUrl('exercise/user/view');
    }

    public function getFormData()
    {
        return $this->session->getUserFormData();
    }

}