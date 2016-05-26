<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Class MEQP1_Tests_Performance_GetFirstItemUnitTest
 */
class MEQP1_Tests_Performance_GetFirstItemUnitTest extends AbstractSniffUnitTest
{
    /**
     * @inheritdoc
     */
    public function getErrorList()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function getWarningList()
    {
        return [
            8 => 1,
            9 => 1,
        ];
    }
}
