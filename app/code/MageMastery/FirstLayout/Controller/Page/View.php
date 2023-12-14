<?php

declare(strict_types=1);

namespace MageMastery\FirstLayout\Controller\Page;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\PageFactory;

class View implements ActionInterface
{
    protected $pageFactory;

    public function __construct(PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $page = $this->resultPageFactory->create(ResultFactory::TYPE_PAGE);
        $block = $page->getLayout()->getBlock('magemastery.first.layout.example');
        $block->setData("data_key", "some info");
        return $page;
    }
}
