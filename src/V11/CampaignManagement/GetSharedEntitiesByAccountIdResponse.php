<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743728(v=msads.110).aspx GetSharedEntitiesByAccountId Response Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::GetSharedEntitiesByAccountId
     */
    final class GetSharedEntitiesByAccountIdResponse
    {
        /**
         * The shared entities from the account's shared library, for example negative keyword lists.
         * @var SharedEntity[]
         */
        public $SharedEntities;
    }
}
