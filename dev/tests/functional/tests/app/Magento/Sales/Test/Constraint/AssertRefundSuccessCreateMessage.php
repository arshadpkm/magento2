<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Sales\Test\Constraint;

use Magento\Sales\Test\Page\Adminhtml\SalesOrderView;
use Magento\Mtf\Constraint\AbstractConstraint;

/**
 * Assert that success create credit memo message is present on order view page
 */
class AssertRefundSuccessCreateMessage extends AbstractConstraint
{
    /* tags */
    const SEVERITY = 'low';
    /* end tags */

    /**
     * Text value to be checked
     */
    const SUCCESS_CREATE_MESSAGE = 'You created the credit memo.';

    /**
     * Assert that success create credit memo message is present on order view page
     *
     * @param SalesOrderView $salesOrderView
     * @return void
     */
    public function processAssert(SalesOrderView $salesOrderView)
    {
        \PHPUnit_Framework_Assert::assertEquals(
            self::SUCCESS_CREATE_MESSAGE,
            $salesOrderView->getMessagesBlock()->getSuccessMessages()
        );
    }

    /**
     * Returns a string representation of the object
     *
     * @return string
     */
    public function toString()
    {
        return 'Success create credit memo message is present  on order view page.';
    }
}
