<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that you use to specify the start and end dates of a date range.
     * @link http://msdn.microsoft.com/en-us/library/mt219345(v=msads.110).aspx DayMonthAndYear Data Object
     * 
     * @used-by AdGroupBidLandscape
     * @used-by DateRangeSearchParameter
     * @used-by HistoricalSearchCountPeriodic
     * @used-by KeywordBidLandscape
     * @used-by GetHistoricalSearchCountRequest
     */
    final class DayMonthAndYear
    {
        /**
         * The day of the month.
         * @var integer
         */
        public $Day;

        /**
         * The month specified as an integer value in the range of 1 through 12, where 1 is January and 12 is December.
         * @var integer
         */
        public $Month;

        /**
         * The year specified as a four-digit integer value.
         * @var integer
         */
        public $Year;
    }

}
