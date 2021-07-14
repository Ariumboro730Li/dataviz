<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use LarapexChart as LaraChart;


class BasicChartController extends Controller
{
    public function pieChart(){
        $chart = (new LarapexChart)->pieChart()
        ->setTitle('Top Skor di Tim')
        ->setSubtitle('Musim 2021.')
        ->addData([40, 50, 30])
        ->setLabels(['Pemain 7', 'Pemain 10', 'Pemain 9']);

        return view('basic-chart.index', compact('chart'))->with("name", "Pie");
    }

    public function pieChart2(){
        $chart1 =  LaraChart::pieChart()
        ->setTitle("Test Pie Chart")
        ->setLabels(['In Progress', 'Open', 'Done'])
        ->setColors(['#e9f542', '#f55142', '#42f54b'])
        ->addData([10, 30, 40])
        ->setDatalabels();

        $chart2 = LaraChart::pieChart()
        ->setTitle('Top 3 scorers of the team.')
        ->setSubtitle('Season 2021.')
        ->addData([20, 24, 30])
        ->setLabels(['Player 7', 'Player 10', 'Player 9'])
        ->setDatalabels();

        $charts =  compact('chart1', 'chart2');

        return view('basic-chart.index2')
        ->with('charts', $charts);
    }

    public function barChart(){
        $chart = (new LarapexChart)->barChart()
            ->setTitle('Persija vs Persita')
            ->setSubtitle('Kemenangan di Musim 2021')
            ->addData('Persija', [16, 9, 3, 40, 10, 8])
            ->addData('Persita', [17, 3, 4, 28, 16, 24])
            ->addData('Persipa', [27, 6, 5, 21, 26, 4])
            ->addData('Persiwa', [37, 8, 6, 22, 6, 34])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);

            return view('basic-chart.index', compact('chart'))->with("name", "Bar");
        }

    public function horizontalBarChart(){
        $chart = (new LarapexChart)->horizontalBarChart()
            ->setTitle('Persija vs Persita')
            ->setSubtitle('Kemenangan di Musim 2021')
            ->addData('Persija', [16, 9, 3, 40, 10, 8])
            ->addData('Persita', [17, 3, 4, 28, 16, 24])
            ->addData('Persipa', [27, 6, 5, 21, 26, 4])
            ->addData('Persiwa', [37, 8, 6, 22, 6, 34])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);

            return view('basic-chart.index', compact('chart'))->with("name", "Bar Horizontal");
        }

    public function donutChart(){
        $chart = (new LarapexChart)->donutChart()
            ->setTitle('Top Skor di Tim')
            ->setSubtitle('Musim 2021.')
            ->addData([40, 50, 30])
            ->addData([10, 30, 40])
            ->setLabels(['Pemain 7', 'Pemain 10', 'Pemain 9']);

            return view('basic-chart.index', compact('chart'))->with("name", "Donut");
        }

    public function radialChart(){
        $chart = (new LarapexChart)->radialChart()
            ->setTitle('Efektivitas Umpan')
            ->setSubtitle('Barcelona city vs Madrid sports.')
            ->addData([75, 90])
            ->setLabels(['Barcelona city', 'Madrid sports'])
            ->setColors(['#D32F2F', '#03A9F4']);

        return view('basic-chart.index', compact('chart'))->with("name", "Radial");
    }

    public function polarAreaChart(){
        $chart = (new LarapexChart)->polarAreaChart()
        ->setTitle('Top Skor di Tim')
        ->setSubtitle('Musim 2021.')
        ->addData([40, 50, 30])
        ->addData([10, 30, 40])
        ->setLabels(['Pemain 7', 'Pemain 10', 'Pemain 9']);
        return view('basic-chart.index', compact('chart'))->with("name", "Polar");
    }

    public function lineChart(){
        $chart = (new LarapexChart)->lineChart()
            ->setTitle('Persija vs Persita')
            ->setSubtitle('Kemenangan di Musim 2021')
            ->addData('Persija', [6, 9, 3, 4, 10, 8])
            ->addData('Persita', [7, 3, 8, 2, 6, 4])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);

            return view('basic-chart.index', compact('chart'))->with("name", "Line");
    }


    public function areaChart(){
        $chart = (new LarapexChart)->areaChart()
            ->setTitle('Persija vs Persita')
            ->setSubtitle('Kemenangan di Musim 2021')
            ->addData('Persija', [6, 9, 3, 4, 10, 8])
            ->addData('Persita', [7, 3, 8, 2, 6, 4])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);

            return view('basic-chart.index', compact('chart'))->with("name", "Area");
    }

    public function heatMapChart(){
        $chart = (new LarapexChart)->heatMapChart()
            ->setTitle('Grafik HeatMap Dasar')
            ->addData('Pembelian', [60, 30, 10, 30, 10, 2])
            ->addData('Penjualan', [80, 50, 30, 40, 100, 20])
            ->addHeat('Profit', [70, 10, 80, 20, 60, 40])
            ->setMarkers(['#FFA41B', '#4F46E5'], 7, 10)
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);

            return view('basic-chart.index', compact('chart'))->with("name", "Heat Map");
    }

    public function radarChart(){
        $chart = (new LarapexChart)->radarChart()
            ->setTitle('Statistik Pemain Rique Puig')
            ->setSubtitle('Musim 2021.')
            ->addData('Stats', [70, 93, 78, 97, 50, 90])
            ->setXAxis(['Pass', 'Dribble', 'Shot', 'Stamina', 'Long shots', 'Tactical'])
            ->setMarkers(['#303F9F'], 7, 10);

            return view('basic-chart.index', compact('chart'))->with("name", "Radar");
    }
}
