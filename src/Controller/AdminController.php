<?php

namespace App\Controller;

use App\Services\Charts\LineChartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\{HttpFoundation\Response, Routing\Attribute\Route, Security\Http\Attribute\IsGranted};

#[Route('/admin', name: 'admin.')]
#[IsGranted('ROLE_ADMIN')]
class AdminController extends AbstractController
{
    private const DASHBOARD_INDEX = 'Dashboard';

    #[Route('', name: 'index')]
    public function index(LineChartService $lineChartService): Response
    {
        $lineChartService->setData(
            ["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5", "Mar 6", "Mar 7", "Mar 8", "Mar 9", "Mar 10", "Mar 11", "Mar 12", "Mar 13"],
            [
                [
                    "label" => "Sessions",
                    "lineTension" => 0.3,
                    "backgroundColor" => "rgba(2,117,216,0.2)",
                    "borderColor" => "rgba(2,117,216,1)",
                    "pointRadius" => 5,
                    "pointBackgroundColor" =>  "rgba(2,117,216,1)",
                    "pointBorderColor" => "rgba(255,255,255,0.8)",
                    "pointHoverRadius" => 5,
                    "pointHoverBackgroundColor"=> "rgba(2,117,216,1)",
                    "pointHitRadius" => 50,
                    "pointBorderWidth" => 2,
                    "data" => [10000, 30162, 26263, 18394, 18287, 28682, 31274, 33259, 25849, 24159, 32651, 31984, 38451],
                ]
            ]);
        $lineChartService->setOptions(
            [
                "scales" => [
                    "x" => [
                        "time" => [
                            "unit" => "date"
                        ],
                        "gridlines" => [
                            "display" => false
                        ],
                        "ticks" => [
                            "maxTicksLimit" => 7
                        ]
                    ],
                    "y" => [
                        "ticks" => [
                            "min" => 0,
                            "max" => 40000,
                            "maxTicksLimit" => 5
                        ],
                        "gridLines" => [
                            "color" => "rgba(0, 0, 0, .125)"
                        ],
                    ]
                ]
            ]
        );
        return $this->render('admin/index.html.twig', [
            'controller_name' => $this::DASHBOARD_INDEX,
            'fileName' => $this::DASHBOARD_INDEX,
            'chart' => $lineChartService->getChart()
        ]);
    }
}
