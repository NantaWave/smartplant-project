<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Kreait\Firebase\Contract\Database;

class countInfoController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'SmartPlant';
    }

    public function getInfo(Request $req): view
    {
        $userInfo = DB::table('tb_user')->get();
        $mcInfo = DB::table('tb_machine')->get();
        $fbMCInfo = $this->database->getReference($this->tablename)->getValue();

        return view('countInfo',[
            'userInfo' => $userInfo,
            'mcInfo' => $mcInfo,
            'fbMCInfo' => $fbMCInfo
        ]);
    }
    
    public function getData()
    {
        $fbData = $this->database->getReference($this->tablename)->getValue();

        $fetchData = [
            'mc_id' => $fbData['mc_id'],
            'mc_status' => $fbData['status1'],
            'mc_ph' => $fbData['pH'],
            'mc_vIn_status' => $fbData['waterIn'],
            'mc_vOut_status' => $fbData['waterOut'],
            'mc_water_status' => $fbData['waterSensor']
        ];

        DB::table('tb_machine')
        ->where('mc_id', $fbData['mc_id'])
        ->update($fetchData);

        return redirect('/countInfo');
    }
}
