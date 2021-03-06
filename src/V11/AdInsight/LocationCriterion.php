<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The location criterion that you can include when requesting keyword ideas or traffic estimates.
     * @link http://msdn.microsoft.com/en-us/library/mt784404(v=msads.110).aspx LocationCriterion Data Object
     * 
     * @used-by LocationSearchParameter
     */
    final class LocationCriterion extends Criterion
    {
        /**
         * The Bing Ads identifier of the location that you want to target.
         * @var integer
         */
        public $LocationId;
    }

}
