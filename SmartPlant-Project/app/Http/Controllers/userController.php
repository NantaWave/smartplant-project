<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function userLogin(Request $req): RedirectResponse {
        $inEmail = $inPasswd = '';
        $inEmail = $req->input('inEmail');
        $inPasswd = $req->input('inPasswd');

        if($req->isMethod('post')) 
        {
            $userLogin = DB::table('tb_user')
            ->where('user_email', $inEmail)
            ->where('user_passwd', $inPasswd)
            ->count();

            if($userLogin === 1)
            {
                $req->session()->put('keyLoggedin',true);
                $req->session()->put('keyEmail',$inEmail);

                return redirect('/dashboard');
            } 
            else
            {
                return redirect('/errors_permission');
            }
        }
        else
        {
            return redirect('/errors_permission');
        } 
    }

    public function userLogout(Request $req): RedirectResponse
    {
        $req->session()->forget(['keyLoggedin','keyEmail']);

        return redirect('/dashboard');
    }

    public function getShowUser(Request $req): view
    {
        $keyEmail = $req->session()->get('keyEmail');
        $suData = DB::table('tb_user')
        ->where('user_email',$keyEmail)
        ->first();

        return view('profile', [
            "su" => $suData
        ]);
    }


    public function userAdd(Request $request)
    {
        if ($request->isMethod('post')) {
            $inputName =  $request->input('inputName');
            $inputLastName =  $request->input('inputLastName');
            $inputEmail =  $request->input('inputEmail');
            $inputPassword = $request->input('inputPassword');
            $inputStatus = $request->input('inputStatus');
            $inputPhoneNum = $request->input('inputPhoneNum');

            $item = [
                'user_name' => $inputName,
                'user_lastname' => $inputLastName,
                'user_email' => $inputEmail,
                'user_passwd' => $inputPassword,
                'user_status' => $inputStatus,
                'user_phone' => $inputPhoneNum
            ];

            if ($request->hasFile('inputImg')) {
                $inputImg = $request->file('inputImg');
                $imageName = time().'.'.$inputImg->getClientOriginalExtension();
                $imagePath = $inputImg->storeAs('/',$imageName);
                $item['user_img'] = '/images/image_user/' . $imageName;
            }

            DB::table('tb_user')->insert($item);
            return redirect('/countInfo');
        }
    }
    public function userEdit(Request $req, string $id)
    {
        $use = DB::table('tb_user')
            ->where('user_id',$id)
            ->first();

        return view('user-edit',[
            'use' =>$use
        ]);
    }
    public function userUpdate(Request $request)
    {
        if ($request->isMethod('post')) {
            $inputUserId = $request->input('inputUserId');
            $inputName =  $request->input('inputName');
            $inputLastName =  $request->input('inputLastName');
            $inputEmail =  $request->input('inputEmail');
            $inputPassword = $request->input('inputPassword');
            $inputStatus = $request->input('inputStatus');
            $inputPhoneNum = $request->input('inputPhoneNum');

            $item = [
                'user_name' => $inputName,
                'user_lastname' => $inputLastName,
                'user_email' => $inputEmail,
                'user_passwd' => $inputPassword,
                'user_status' => $inputStatus,
                'user_phone' => $inputPhoneNum,
            ];

            if ($request->hasFile('inputImg')) {
                $inputImg = $request->file('inputImg');
                $imageName = time().'.'.$inputImg->getClientOriginalExtension();
                $imagePath = $inputImg->storeAs('/',$imageName);
                $item['user_img'] = '/images/image_user/' . $imageName;
            }

            DB::table('tb_user')
            ->where('user_id', $inputUserId)
            ->update($item);
            return redirect('/countInfo');
        }
    }
    public function userDelete(Request $req, string $id)
    {
        DB::table('tb_user')
        ->where('user_id', $id)
        ->delete();

        return redirect('/countInfo');
    }
    public function authUser() 
    {
        $auth = DB::table('tb_user')
        ->where('user_status','Administrator')
        ->get();
        
        $authAd = $auth->pluck('user_email');

        return view('templates.menu',[
            'authAd' => $authAd
        ]);
    }
}
