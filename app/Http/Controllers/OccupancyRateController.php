<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\OccupancyRate;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class OccupancyRateController extends Controller
{
    public function __construct(OccupancyRate $occupancyRate){
        $this->occupancyRate = $occupancyRate;
    }

    public function index(){
        $occupancy_by_month = (new LarapexChart)->lineChart();

        $occupancy_by_month->addData('2016', $this->occupancyRate->byMonth(2016)->pluck('occupancy_rate')->toArray());
        $occupancy_by_month->addData('2017', $this->occupancyRate->byMonth(2017)->pluck('occupancy_rate')->toArray());
        $occupancy_by_month->addData('2018', $this->occupancyRate->byMonth(2018)->pluck('occupancy_rate')->toArray());
        $occupancy_by_month->addData('2019', $this->occupancyRate->byMonth(2019)->pluck('occupancy_rate')->toArray());
        $occupancy_by_month->addData('2020', $this->occupancyRate->byMonth(2020)->pluck('occupancy_rate')->toArray());

        $occupancy_by_quarter = (new LarapexChart)->lineChart(); 

        $occupancy_by_quarter->addData('2016', $this->occupancyRate->byQuarter(2016)->pluck('occupancy_rate')->toArray());
        $occupancy_by_quarter->addData('2017', $this->occupancyRate->byQuarter(2017)->pluck('occupancy_rate')->toArray());
        $occupancy_by_quarter->addData('2018', $this->occupancyRate->byQuarter(2018)->pluck('occupancy_rate')->toArray());
        $occupancy_by_quarter->addData('2019', $this->occupancyRate->byQuarter(2019)->pluck('occupancy_rate')->toArray());
        $occupancy_by_quarter->addData('2020', $this->occupancyRate->byQuarter(2020)->pluck('occupancy_rate')->toArray());
        
        return view('occupancy-rate.index', compact('occupancy_by_month','occupancy_by_quarter' ));     
    }
}
