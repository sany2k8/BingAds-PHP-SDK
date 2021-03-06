<?php
// Generated on 7/10/2017 3:08:06 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a product dimension performance report request that aggregates the performance data by product category, custom label, title, and type for a specified time period.
     * @link http://msdn.microsoft.com/en-us/library/dn913141(v=msads.110).aspx ProductDimensionPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses ProductDimensionPerformanceReportColumn
     * @uses ProductDimensionPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ProductDimensionPerformanceReportRequest extends ReportRequest
    {
        public $Aggregation;
        public $Columns;
        public $Filter;
        public $Scope;
        public $Time;
    }

}
