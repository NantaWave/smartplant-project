<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Carbon\Carbon;
use Kreait\Firebase\Contract\Database;

class beanController extends Controller
{
    protected $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'SmartPlant';
    }
    public function getShowPlanting(): view
    {
        $sptData = DB::table('tb_planting')->get();
        return view('planting',[
            "shpt"=>$sptData
        ]);
    }
    public function plantingAdd(Request $request)
    {
        if ($request->isMethod('post')) {
            $inputMcId =  $request->input('inputMcId');
            $inputUserId =  $request->input('inputUserId');
            $inputBnId =  $request->input('inputBnId');
            $inputQuantity =  $request->input('inputQuantity');
            $inputDate =  $request->input('inputDate');
            $inputDate = date('Y-m-d');

            $item = [
                'mc_id' => $inputMcId,
                'user_id' => $inputUserId,
                'bean_id' => $inputBnId,
                'planting_quantity' => $inputQuantity,
                'planting_date' => $inputDate,
                'planting_result' => '0'
            ];

            DB::table('tb_planting')->insert($item);
            return redirect('/planting');
        }
    }
    public function plantingEdit(Request $req, string $id)
    {
        $spt = DB::table('tb_planting')
        ->where('planting_id',$id)
        ->first();

        return view('planting-edit',[
            'spt' =>$spt
        ]);
    }
    public function plantingUpdate(Request $request)
    {
        if($request->isMethod('post'))
        {
            $inputPlantingId =  $request->input('inputPlantingId');;
            $inputMcId =  $request->input('inputMcId');
            $inputUserId =  $request->input('inputUserId');
            $inputBnId =  $request->input('inputBnId');
            $inputQuantity =  $request->input('inputQuantity');
            $inputDate =  $request->input('inputDate');
            $inputDate = date('Y-m-d');
            $inputResult = $request->input('inputResult');

            $item = [
                'planting_id' => $inputPlantingId,
                'mc_id' => $inputMcId,
                'user_id' => $inputUserId,
                'bean_id' => $inputBnId,
                'planting_quantity' => $inputQuantity,
                'planting_date' => $inputDate,
                'planting_result' => $inputResult
            ];

            DB::table('tb_planting')
            ->where('planting_id', $inputPlantingId)
            ->update($item);
            return redirect('/planting');

        }
    }
    public function plantingSubmit(Request $req, string $id)
    {
        $spt = DB::table('tb_planting')
        ->where('planting_id',$id)
        ->first();

        return view('planting-submit',[
            'spt' =>$spt
        ]);
    }
    public function plantingSubmitUp(Request $request)
    {
        if($request->isMethod('post'))
        {
            $inputPlantingId =  $request->input('inputPlantingId');;
            $inputResult = $request->input('inputResult');

            $item = [
                'planting_result' => $inputResult
            ];

            DB::table('tb_planting')
            ->where('planting_id', $inputPlantingId)
            ->update($item);
            return redirect('/planting');

        }
    }
    public function plantingDelete(Request $req, string $id)
    {
        DB::table('tb_planting')
        ->where('planting_id', $id)
        ->delete();

        return redirect('/planting');
    }
    public function showPlanting()
    {
        $shpt = DB::table('tb_planting')->get();
        foreach ($shpt as $spt) {
            $spt->days_until_harvest = Carbon::parse($spt->planting_date)->diffInDays(Carbon::parse($spt->planting_harvestDate));
        }
        return view('planting', compact('shpt'));
    }
    public function getShowMcDash(Request $req): view
    {
        $fbData = $this->database->getReference($this->tablename)->getValue();

        return view('dashboard', [
            'fbData' => $fbData
        ]);
    }
    public function getShowMcWR(Request $req): view
    {
        $fbData = $this->database->getReference($this->tablename)->getValue();

        return view('watering', [
            'fbData' => $fbData
        ]);
    }
    public function downloadData()
    {
        $products = DB::table('tb_planting')->get();
        $csvFileName = 'planting.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $csvFileName . '"',
        ];

        $handle = fopen('php://output', 'w');
        fputcsv($handle, [
            'planting_id',
            'mc_id',
            'user_id',
            'bean_id',
            'planting_date',
            'planting_quantity',
            'planting_harvestDate',
            'planting_result'
        ]);

        foreach ($products as $product) {
            fputcsv($handle, [
                $product->planting_id, 
                $product->mc_id,
                $product->user_id,
                $product->bean_id,
                $product->planting_date,
                $product->planting_quantity,
                $product->planting_harvestDate,
                $product->planting_result
            ]);
        }

        fclose($handle);

        return response('', 200, $headers);
    }

    public function statusMC($status) {
        $newStatus = $status ? 0 : 1;
        $this->database->getReference($this->tablename)->update(['status1' => $newStatus]);
        return back();
    }
    public function statusVaIn($statusVin) {
        $newStatus = $statusVin ? 0 : 1;
        $this->database->getReference($this->tablename)->update(['waterIn' => $newStatus]);
        return back();
    }
    public function statusVaOut($statusVout) {
        $newStatus = $statusVout ? 0 : 1;
        $this->database->getReference($this->tablename)->update(['waterOut' => $newStatus]);
        return back();
    }
    public function statusWaterPump($statusWP) {
        $newStatus = $statusWP ? 0 : 1;
        $this->database->getReference($this->tablename)->update(['status1' => $newStatus]);
        return back();
    }
}
