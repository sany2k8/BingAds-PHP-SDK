<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Searches for accounts that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn743757(v=msads.110).aspx SearchAccounts Request Object
     * 
     * @uses Predicate
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerManagementService::SearchAccounts
     */
    final class SearchAccountsRequest
    {
        /**
         * Determines the request conditions.
         * @var Predicate[]
         */
        public $Predicates;

        /**
         * Determines the order of results by the specified property of an account Note: You should only specify one OrderBy element in the array.
         * @var OrderBy[]
         */
        public $Ordering;

        /**
         * Determines the index and size of results per page.
         * @var Paging
         */
        public $PageInfo;
    }
}
