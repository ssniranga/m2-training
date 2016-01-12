<?php
/**
 * Netstarter Pty Ltd.
 *
 * @category    Ns
 * @package Netstarter\Exercise1\Controller\User
 * @author      Netstarter Team <contact@netstarter.com>
 * @copyright   Copyright (c) 2015 Netstarter Pty Ltd. (http://www.netstarter.com.au)
 */


namespace Netstarter\Exercise1\Controller\User;


class View extends \Magento\Framework\App\Action\Action
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

        $page = $this->pageFactory->create();

        $data = $this->getRequest()->getParams();




        if ($data['password'] != $data['password_confirmation']) {
            $this->messageManager->addError(__('Please check your password.'));
            $resultRedirect = $this->resultRedirectFactory->create();
            $resultRedirect->setPath('exercise/user/create');
            return $resultRedirect;

        }else if($data['email']=='nirangamail@gmail.com'){
            $this->messageManager->addError(__('Can not register yourselves'));
            $resultRedirect = $this->resultRedirectFactory->create();
            $resultRedirect->setPath('exercise/user/create');
            return $resultRedirect;
        }
        else if($data['dob']< 18 ){
            $this->messageManager->addError(__('uba podi ekek!!'));
            $resultRedirect = $this->resultRedirectFactory->create();
            $resultRedirect->setPath('exercise/user/create');
            return $resultRedirect;
        }

        else {
            return $page;
        }


    }
}