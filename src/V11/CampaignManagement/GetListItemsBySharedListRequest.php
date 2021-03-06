<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the negative keywords of a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743729(v=msads.110).aspx GetListItemsBySharedList Request Object
     * 
     * @uses SharedList
     * @used-by BingAdsCampaignManagementService::GetListItemsBySharedList
     */
    final class GetListItemsBySharedListRequest
    {
        /**
         * The negative keyword list within the account's shared library, from which to get the negative keywords.
         * @var SharedList
         */
        public $SharedList;
    }
}
