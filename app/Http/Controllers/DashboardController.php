<?php
  
namespace App\Http\Controllers;
  
use Analytics;
use Spatie\Analytics\Period;
  
class DashboardController extends Controller
{
    public function get() {
        $period = Period::days(7); // Change the period as needed

        // $data = Analytics::fetchVisitorsAndPageViews($period);

        // $dates = $data->pluck('date');
        // $visitors = $data->pluck('visitors');
        // $pageViews = $data->pluck('pageViews');

        return view('content.admin.dashboard', [
            // 'dates' => $dates,
            // 'visitors' => $visitors,
            // 'pageViews' => $pageViews,
        ]);
    }
    
}