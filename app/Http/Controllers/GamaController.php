<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gama;
use App\GamaUserRelation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GamaController extends Controller
{
    //
    protected function insert(Request $data)
    {
        if (Input::get('upload_picture')){
            // $data = FileRequest
            $id = Auth::id();
            $store_directory = 'assets/img/';
            $file_name = 'gama_tmp_'.$id.'.jpg'; // ファイル名は一時的なもの（この時点ではまだGamaが作成されていないためgama_idが取得できない）
            // $file_path = $store_directory.$file_name;
            // $data->photo->storeAs($store_directory, $file_name, 'public');
            $file_path = $data->photo->storeAs($store_directory, $file_name, 'public'); // 上の2行は1行にまとめてこう書けるらしい
            return view('create_gama', $file_path);
        }

        else{
            // $data = gama_name
            $gama_name = $data->input('gama_name');
            $user_id = Auth::id();

            try{
                $gama = Gama::create(['gama_name'=>$gama_name]);
                $new_gama_id = $gama->id;

                // Gamaの画像が存在していたら、
                $old_file_name = 'gama_tmp_'.$user_id.'.jpg';
                $icon_exists = Storage::disk('public')->exists($old_file_name);
                if ($icon_exists){

                    // storage内のファイル名をgama_idによって一意に定まるものに変更し、
                    $new_file_name = 'gama_'.$new_gama_id.'.jpg';
                    Storage::move($old_file_name, $new_file_name);

                    // Gamaのicon_pathを'assets/img/(new file name)'に設定する
                    $icon_path = 'assets/img/'.$new_file_name;
                    $gama->icon_path = $icon_path;
                    $gama->save();
                }

                $realtion = GamaUserRelation::create(['user_id'=>$user_id, 'gama_id'=>$new_gama_id, 'auth_flag'=>1, 'owner_flag'=>1]);
                return redirect('/create_gama_complete');
            } catch (\Illuminate\Database\QueryException $exception) {
                $errorInfo = $exception->errorInfo;
                return view('create_gama', $data);
            }
        }
    }

    protected function delete()
    {
        $id = Auth::id();
        // 画像の一時ファイルが存在したら削除
        $icon_exists = Storage::disk('public')->exists('gama_tmp_'.$id.'.jpg');
        if ($icon_exists){
            Storage::disk('public')->delete('assets/img/gama_tmp_'.$id.'.jpg');
        }
        
        // 最後に/homeに帰る
        return view('home') ;
    }

    // public function store_picture(Request $request)
    // {
    //     $id = Auth::id();
    //     $pass = 'public/assets/img/'.$id.'.jpg';
    //     $request->photo->storeAs($pass);
    //     return view('create_gama', $pass);
    // }

    public function calc_sum($gama_id)
    {
        $gama = Gama::find($gama_id);
        $sum = $gama->sum;
        return $sum;
    }

    public function set_active_flag($gama_id)
    {
        $gama = Gama::find($gama_id);
        $gama->active_flag = 1;
        $gama->save();
    }

    public function set_inactive_flag($gama_id)
    {
        $gama = Gama::find($gama_id);
        $gama->active_flag = 0;
        $gama->save();
    }
}
