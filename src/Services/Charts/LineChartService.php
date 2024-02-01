<?php

namespace App\Services\Charts;

use App\Abstract\Charts\AbstractChartService;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;

class LineChartService extends AbstractChartService
{
    private const TYPE_CHART = 'line';

    public function __construct(ChartBuilderInterface $chartBuilderInterface)
    {
        parent::__construct($this::TYPE_CHART, $chartBuilderInterface);
    }
}