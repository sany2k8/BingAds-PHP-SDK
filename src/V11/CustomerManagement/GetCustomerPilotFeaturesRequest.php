<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Gets a list of the pilot programs in which the specified customer participates.
     * @link http://msdn.microsoft.com/en-us/library/dn451285(v=msads.110).aspx GetCustomerPilotFeatures Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetCustomerPilotFeatures
     */
    final class GetCustomerPilotFeaturesRequest
    {
        /**
         * The identifier of the customer whose list of pilot programs you want to get.
         * @var integer
         */
        public $CustomerId;
    }
}
