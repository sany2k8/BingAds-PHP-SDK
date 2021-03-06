<?php
// Generated on 7/10/2017 3:08:06 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a goals and funnels report request.
     * @link http://msdn.microsoft.com/en-us/library/gg262840(v=msads.110).aspx GoalsAndFunnelsReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses GoalsAndFunnelsReportColumn
     * @uses GoalsAndFunnelsReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class GoalsAndFunnelsReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
