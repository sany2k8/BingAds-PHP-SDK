<?php
// Generated on 7/10/2017 3:08:15 PM

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Adds an insertion order to the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn743758(v=msads.110).aspx AddInsertionOrder Response Object
     * 
     * @used-by BingAdsCustomerBillingService::AddInsertionOrder
     */
    final class AddInsertionOrderResponse
    {
        /**
         * A long value that represents the identifier for the insertion order that was added.
         * @var integer
         */
        public $InsertionOrderId;

        /**
         * Identifies the server time in UTC when the insertion order was added.
         * @var \DateTime
         */
        public $CreateTime;
    }
}
