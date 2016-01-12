<?php
/**
 * Netstarter Pty Ltd.
 *
 * @category    Ns
 * @package Netstarter\Blog\Controller\Index
 * @author      Netstarter Team <contact@netstarter.com>
 * @copyright   Copyright (c) 2015 Netstarter Pty Ltd. (http://www.netstarter.com.au)
 */


namespace Netstarter\Blog\Controller\Index;


class Success extends \Magento\Framework\App\Action\Action
{

   protected $pageFactory;

    public function __construct(
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\App\Action\Context $context
    ) {
        parent::__construct($context);
        $this->pageFactory = $resultPageFactory;
    }

    public function execute()
    {
//        print_r($this->getRequest()->getParams());
        $page = $this->pageFactory->create();
        return $page;

    }

}