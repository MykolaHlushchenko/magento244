<?php
/**
 * MageBook_HelloMagento module Index controller.
 *
 * @author Mykola Hlushchenko <mage.book.tools@gmile.com>
 * @copyright 2022 MageBook
 */

namespace MageBook\HelloMagento\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page as ResultPage;

/**
 *  HelloMagento Class Index
 */
class Index extends Action implements HttpGetActionInterface, HttpPostActionInterface
{
    /**
     * @var PageFactory
     */
    protected $pageFactory;

    /**
     * Constructor
     *
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    /**
     * Renders Magento hello page
     *
     * @return ResultPage
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function execute(): ResultPage
    {
         return $this->pageFactory->create();
    }
}
