<?php

namespace App\Services\Charts;

use App\Abstract\Charts\AbstractChartService;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;

class PieChartService extends AbstractChartService
{
    private const TYPE_CHART = 'pie';

    public function __construct(ChartBuilderInterface $chartBuilderInterface)
    {
        parent::__construct($this::TYPE_CHART, $chartBuilderInterface);
    }
}