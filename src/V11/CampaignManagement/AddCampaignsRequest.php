<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more campaigns to the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn277510(v=msads.110).aspx AddCampaigns Request Object
     * 
     * @uses Campaign
     * @used-by BingAdsCampaignManagementService::AddCampaigns
     */
    final class AddCampaignsRequest
    {
        /**
         * The identifier of the account to add the campaigns to.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of campaigns to add to the specified account.
         * @var Campaign[]
         */
        public $Campaigns;
    }
}
