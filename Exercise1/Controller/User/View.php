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
    protected $session;

    public function __construct(
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\App\Action\Context $context,
        \Magento\Customer\Model\Session $session
    ) {
        parent::__construct($context);
        $this->pageFactory = $resultPageFactory;
        $this->session = $session;
    }



    public function execute()
    {

        $page = $this->pageFactory->create();

        $data = $this->getRequest()->getParams();
        $valid = "";
        $boo = false;

        if ($data['email'] == 'nirangamail@gmail.com') {
            $valid .= 'Can not register yourselves';
            $boo = true;
        }
        if ($data['password'] != 'password_confirmation') {
            $valid .= '| Please check your password.';
            $boo = true;
        }
        if ($data['dob'] < 18) {
            $valid .= '| Chk Age';
            $boo = true;
        }
        if ($boo) {

            $this->messageManager->addError($valid);
            $this->session->setUserFormData($this->getRequest()->getPostValue());
            $resultRedirect = $this->resultRedirectFactory->create();
            $resultRedirect->setPath('exercise/user/create');
            //  $this->sesssion
            return $resultRedirect;

        } else {
            return $page;
        }

    }
}