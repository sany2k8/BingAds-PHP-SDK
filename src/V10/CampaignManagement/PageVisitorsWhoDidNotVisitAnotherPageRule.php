<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a page visitors who did not visit another page remarketing rule.
     * @link http://msdn.microsoft.com/en-us/library/mt772356(v=msads.100).aspx PageVisitorsWhoDidNotVisitAnotherPageRule Data Object
     * 
     * @uses RuleItemGroup
     */
    final class PageVisitorsWhoDidNotVisitAnotherPageRule extends RemarketingRule
    {
        /**
         * The list of rule item groups that you want applied as exclusions to the remarketing list.
         * @var RuleItemGroup[]
         */
        public $ExcludeRuleItemGroups;

        /**
         * The list of rule item groups that you want applied to the remarketing list.
         * @var RuleItemGroup[]
         */
        public $IncludeRuleItemGroups;
    }

}
