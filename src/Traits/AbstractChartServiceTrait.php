<?php

namespace App\Traits;

use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

trait AbstractChartServiceTrait
{
    public const PIE_TYPE = Chart::TYPE_PIE;
    public const LINE_TYPE = Chart::TYPE_LINE;
    public const BAR_TYPE = Chart::TYPE_BAR;
    public const BUBBLE_TYPE = Chart::TYPE_BUBBLE;
    public const DOUGHNUT_TYPE = Chart::TYPE_DOUGHNUT;
    public const POLAR_AREA_TYPE = Chart::TYPE_POLAR_AREA;
    public const RADAR_TYPE = Chart::TYPE_RADAR;
    public const SCATTER_TYPE = Chart::TYPE_SCATTER;

    protected Chart $chart;
    public function __construct(?string $chartType, ChartBuilderInterface $chartBuilder)
    {
        $this->chart = $chartBuilder->createChart(
            match(strtoupper($chartType) . "_TYPE") {
                "BUBBLE_TYPE" => $this::BUBBLE_TYPE,
                "BAR_TYPE" => $this::BAR_TYPE,
                "PIE_TYPE" => $this::PIE_TYPE,
                "LINE_TYPE" => $this::LINE_TYPE,
                "DOUGHNUT_TYPE" => $this::DOUGHNUT_TYPE,
                "POLAR_AREA_TYPE" => $this::POLAR_AREA_TYPE,
                "RADAR_TYPE" => $this::RADAR_TYPE,
                "SCATTER_TYPE" => $this::SCATTER_TYPE,
            }
        );
    }

    public function setData(array $labels = [], array $dataSets = []): void
    {
        $this->chart->setData([
            'labels' => $labels,
            'datasets' => $dataSets
        ]);
    }

    public function setOptions(array $options = []): void
    {
        $this->chart->setOptions($options);
    }

    /**
     * @return Chart
     */
    public function getChart(): Chart
    {
        return $this->chart;
    }
}