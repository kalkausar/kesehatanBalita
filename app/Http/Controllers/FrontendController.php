<?php

namespace App\Http\Controllers;

use DB;
use App\ManageNews;
use App\ManageTahun;
use App\ManageIterasi;
use App\ManageKabupaten;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
      $news = ManageNews::where('status','=','1')->limit(3)->get();
      // dd($news);
      return view('home')->with(compact('news'));
    }

    public function informasi(){
      $news = ManageNews::where('status','=','1')->limit(3)->get();

      return view('informasi')->with(compact('news'));
    }

    public function dataKota(){
      $kabupaten = ManageKabupaten::all();
      $tahun     = ManageTahun::all();

      return view('pilihKota')->with(compact('kabupaten','tahun'));
    }

    public function cariKabupaten(Request $request){
      $kabupaten = $request->kabupaten;
      $tahun     = $request->tahun;

      $data_mentah = DB::table('data_mentah')
                    ->where('kabupaten_id','=',$kabupaten)->where('tahun_id','=',$tahun)
                    ->join('kabupaten','data_mentah.kabupaten_id','=','kabupaten.id')
                    ->join('tahun','data_mentah.tahun_id','=','tahun.id')
                    ->select('data_mentah.*','tahun.tahun','kabupaten.kabupaten')
                    ->get();
      $data_olah   = DB::table('data_olah')
                    ->where('kabupaten_id','=',$kabupaten)->where('tahun_id','=',$tahun)
                    ->join('kabupaten','data_olah.kabupaten_id','=','kabupaten.id')
                    ->join('tahun','data_olah.tahun_id','=','tahun.id')
                    ->join('iterasi','data_olah.iterasi_id','=','iterasi.id')
                    ->select('data_olah.*','tahun.tahun','kabupaten.kabupaten','iterasi.iterasi')
                    ->get();

      if(count($data_mentah)>0 || count($data_olah)>0){
        return view('hasilPilih')->with(compact('data_mentah','data_olah'));
      }else{
        return view('hasilPilih')->with(compact('data_mentah','data_olah'));
      }

    }

    public function dataChart(){
      $cluster = DB::table('cluster')
              ->join('kabupaten','cluster.kabupaten_id','=','kabupaten.id')
              ->get();
      return response()->json($cluster);
    }

    public function chart(){

      return view('chart');
    }

    public function informasiDetail($id){
      $news    = ManageNews::find($id);
      $allnews = ManageNews::where('status',1)
                          ->orderBy('created_at','desc')
                          ->get();
      return view('informasiDetail')->with(compact('news','allnews'));
    }

    public function tentangKami(){
      return view('about');
    }
}
