<?php
// Generated on 7/10/2017 3:08:05 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a calendar date by month, day, and year.
     * @link http://msdn.microsoft.com/en-us/library/dn376514(v=msads.110).aspx Date Data Object
     * 
     * @used-by BudgetSummaryReportTime
     * @used-by ReportTime
     */
    final class Date
    {
        /**
         * Specifies the day of the month.
         * @var integer
         */
        public $Day;

        /**
         * Specifies the month.
         * @var integer
         */
        public $Month;

        /**
         * Specifies the year.
         * @var integer
         */
        public $Year;
    }

}
