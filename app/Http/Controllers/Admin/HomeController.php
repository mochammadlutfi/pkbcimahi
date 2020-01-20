<?php

namespace App\Http\Controllers\Admin;
use App\Models\Event;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pertanyaan;
use App\Charts\ChartPertanyaan;
use Carbon\Carbon;
use DB;

class HomeController extends Controller
{
    /**
     * Only Authenticated users for "admin" guard
     * are allowed.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show Admin Dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $user = User::latest()->count();
        $acara = Event::latest()->count();
        $pertanyaan_baru = Pertanyaan::latest()->count();

        Carbon::setWeekStartsAt(Carbon::MONDAY);
        Carbon::setWeekEndsAt(Carbon::SUNDAY);

        $now = Carbon::now();
        $start = Carbon::now()->startOfWeek()->subDay(1);
        // dd($start);
        $days = $start->diff($now)->days;
        // Hari Label
        $hari = collect([]);
        $a = 1;
        for($i = 2; $i <= $now->day; $i++)
        {
            $tgl[] = $this->get_hari($start->addDays(1)->format('Y-m-d'));
            // $tgl[] = $start->addDays(1)->format('Y-m-d');
            $hari->put($i, 0);

        }
        // dd($tgl);
        // $data = Pertanyaan::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        // dd($data);

        $posts = Pertanyaan::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()])
            ->groupBy( 'date' )
            ->orderBy( 'date' )
            ->get( [
                DB::raw( 'DAY(created_at) as date' ),
                DB::raw( 'COUNT( * ) as "count"' )
            ] )
            ->pluck('count', 'date');
        // dd($posts);
        $posts = $posts->union($hari);
        $items =  $posts->all();
        ksort($items);
        $items = collect($items);
        // dd($items);
        $coba = collect([]);
        $coba = $coba->merge($items);
        // dd($coba);

        $chart = new ChartPertanyaan;
        $chart->labels($tgl)->displayAxes('yAxes');
        $chart->dataset('Pertanyaan', 'line', $coba)
        ->backgroundColor('rgba(66,165,245,.25)')
        ->color('rgba(66,165,245,1)')
        ->fill(TRUE);

        return view('backend.beranda', compact('user', 'acara', 'pertanyaan_baru', 'chart'));
    }

    public function get_hari($tanggal)
    {
        $tgl=substr($tanggal,8,2);
        $bln=substr($tanggal,5,2);
        $thn=substr($tanggal,0,4);
        $info=date('w', mktime(0,0,0,$bln,$tgl,$thn));
        switch($info){
            case '0': return "Minggu"; break;
            case '1': return "Senin"; break;
            case '2': return "Selasa"; break;
            case '3': return "Rabu"; break;
            case '4': return "Kamis"; break;
            case '5': return "Jumat"; break;
            case '6': return "Sabtu"; break;
        };
    }
}
