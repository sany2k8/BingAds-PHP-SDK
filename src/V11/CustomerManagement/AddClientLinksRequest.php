<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Initiates the client link process to manage the account of another customer.
     * @link http://msdn.microsoft.com/en-us/library/dn632187(v=msads.110).aspx AddClientLinks Request Object
     * 
     * @uses ClientLink
     * @used-by BingAdsCustomerManagementService::AddClientLinks
     */
    final class AddClientLinksRequest
    {
        /**
         * The list of client links to add.
         * @var ClientLink[]
         */
        public $ClientLinks;
    }
}
