<?php
// Generated on 6/7/2017 5:54:05 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets the historical performance of the normalized search term.
     * @link http://msdn.microsoft.com/en-us/library/mt219302(v=msads.100).aspx GetHistoricalKeywordPerformance Response Object
     * 
     * @uses KeywordHistoricalPerformance
     * @used-by BingAdsAdInsightService::GetHistoricalKeywordPerformance
     */
    final class GetHistoricalKeywordPerformanceResponse
    {
        /**
         * An array of KeywordHistoricalPerformance data objects.
         * @var KeywordHistoricalPerformance[]
         */
        public $KeywordHistoricalPerformances;
    }
}
