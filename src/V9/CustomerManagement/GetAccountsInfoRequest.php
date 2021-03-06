<?php
// Generated on 6/7/2017 5:53:03 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Gets a list of objects that contains account identification information, for example the name and identifier of the account, for the specified customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451289(v=msads.90).aspx GetAccountsInfo Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetAccountsInfo
     */
    final class GetAccountsInfoRequest
    {
        /**
         * The identifier of the customer who owns the accounts to get.
         * @var integer
         */
        public $CustomerId;

        /**
         * Determines whether to return only the accounts that belong to the customer or to also return the accounts that the customer manages for other customers.
         * @var boolean
         */
        public $OnlyParentAccounts;
    }
}
