<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes negative keywords from the specified campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743725(v=msads.110).aspx DeleteNegativeKeywordsFromEntities Request Object
     * 
     * @uses EntityNegativeKeyword
     * @used-by BingAdsCampaignManagementService::DeleteNegativeKeywordsFromEntities
     */
    final class DeleteNegativeKeywordsFromEntitiesRequest
    {
        /**
         * An array of negative keyword with associated entity such as a campaign or ad group.
         * @var EntityNegativeKeyword[]
         */
        public $EntityNegativeKeywords;
    }
}
