<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds new Universal Event Tracking (UET) tags that you can add to your website to allow Bing Ads to collect actions people take on your website.
     * @link http://msdn.microsoft.com/en-us/library/mt759506(v=msads.110).aspx AddUetTags Response Object
     * 
     * @uses UetTag
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddUetTags
     */
    final class AddUetTagsResponse
    {
        public $UetTags;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
