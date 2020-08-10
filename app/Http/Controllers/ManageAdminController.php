<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\ManageNews;
use App\ManageData;
use App\ManageTahun;
use App\ManageCluster;
use App\ManageIterasi;
use App\ManageKabupaten;
use App\ManageDataMentah;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ManageAdminController extends Controller
{
    public function getRoleAdmin() {
      $rolesyangberhak = DB::table('roles')->where('id','=','2')->first()->namaRule;
      return $rolesyangberhak;
    }

    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('rule:'.$this->getRoleAdmin().',nothingelse');
    }

    public function index(){
      $news        = DB::table('informasi')->where('status','=','1')->get();
      $data_olah   = DB::table('data_olah')->get();
      $data_mentah = DB::table('data_mentah')->get();

      return view('admin.dashboard')->with(compact('news','data_olah','data_mentah'));
    }

    public function news(){
      $news = ManageNews::all();

      return view('admin.news')->with(compact('news'));
    }

    public function addNews(){
      return view('admin.addnews');
    }

    public function postNews(Request $request){
      $manages = new ManageNews;

      $manages->title     = $request->title;
      $manages->path      = $request->filepath;
      $manages->content   = $request->news;
      if($request->status == null){
        $manages->status  = 0;
      }else{
        $manages->status  = $request->status;
      }
      $manages->slug      = Str::slug($request->title);
      $manages->author    = Auth::user()->name;
      $manages->save();

      alert()->success('Added News Successfully', 'Successfull!');
      return redirect('/news');
    }

    public function editNews($id){
      $news = ManageNews::find($id);

      return view('admin.editNews')->with(compact('news'));
    }

    public function updateNews(Request $request, $id){
      $manages = ManageNews::find($id);

      $manages->title   = $request->title;
      $manages->path    = $request->filepath;
      $manages->content = $request->news;
      if($request->status == null){
        $manages->status  = 0;
      }else{
        $manages->status  = $request->status;
      }
      $manages->slug    = Str::slug($request->title);

      $manages->save();

      alert()->success('Edit News Successfully', 'Successfull!');
      return redirect('/news');
    }

    public function deleteNews($id){
      $manages = ManageNews::find($id);

      $manages->delete();
      alert()->success('Delete News Successfully', 'Successfull!');
      return redirect('/news');
    }

    public function data(){
      $data = DB::table('data_olah')
                ->join('kabupaten','data_olah.kabupaten_id','=','kabupaten.id')
                ->join('tahun','data_olah.tahun_id','=','tahun.id')
                ->join('iterasi','data_olah.iterasi_id','=','iterasi.id')
                ->select('data_olah.*','kabupaten.kabupaten', 'tahun.tahun','iterasi.iterasi')
                ->get();

      return view('admin.data')->with(compact('data'));
    }

    public function addData(){
      $kabupaten = ManageKabupaten::all();
      $iterasi   = ManageIterasi::all();
      $tahun     = ManageTahun::all();

      return view('admin.addData')->with(compact('kabupaten','iterasi','tahun'));
    }

    public function postData(Request $request){
      $manages                = new ManageData;
      $manages->kabupaten_id  = $request->kabupaten_id;
      $manages->iterasi_id    = $request->iterasi_id;
      $manages->c1            = $request->c1;
      $manages->c2            = $request->c2;
      $manages->c3            = $request->c3;
      $manages->tahun_id      = $request->tahun_id;

      $manages->save();
      alert()->success('Penambahan Data Berhasil', 'Berhasil!');
      return redirect('/data');
    }

    public function editData(Request $request, $id){
      $data      = ManageData::find($id);
      $kabupaten = ManageKabupaten::all();
      $iterasi   = ManageIterasi::all();
      $tahun     = ManageTahun::all();

      return view('admin.editData')->with(compact('data','kabupaten','iterasi','tahun'));
    }

    public function updateData(Request $request,$id){
      $manages                = ManageData::find($id);
      $manages->kabupaten_id  = $request->kabupaten_id;
      $manages->iterasi_id    = $request->iterasi_id;
      $manages->c1            = $request->c1;
      $manages->c2            = $request->c2;
      $manages->c3            = $request->c3;
      $manages->tahun_id      = $request->tahun_id;

      $manages->save();
      alert()->success('Perubahan Data Berhasil', 'Berhasil!');
      return redirect('/data');
    }

    public function deleteData($id){
      $manages = ManageData::find($id);

      $manages->delete();
      alert()->success('Menghapus Data Berhasil', 'Berhasil!');
      return redirect('/data');
    }

    public function cluster(){
      $kabupaten = ManageKabupaten::all();
      $tahun     = ManageTahun::all();
      $data      = DB::table('cluster')
                      ->join('kabupaten','cluster.kabupaten_id','=','kabupaten.id')
                      ->join('tahun','cluster.tahun_id','=','tahun.id')
                      ->select('cluster.*','kabupaten.kabupaten', 'tahun.tahun')
                      ->get();

      return view('admin.cluster')->with(compact('kabupaten','tahun','data'));
    }

    public function postCluster(Request $request){
      $manages = new ManageCluster;

      $manages->kabupaten_id = $request->kabupaten_id;
      $manages->tahun_id     = $request->tahun_id;
      $manages->cluster      = $request->cluster;
      // dd($manages);
      $manages->save();
      alert()->success('Penambahan Cluster Berhasil.', 'Berhasil!');
      return Redirect::back();
    }

    public function dataMentah(){
      $data = DB::table('data_mentah')
                ->join('kabupaten','data_mentah.kabupaten_id','=','kabupaten.id')
                ->join('tahun','data_mentah.tahun_id','=','tahun.id')
                ->select('data_mentah.*','kabupaten.kabupaten', 'tahun.tahun')
                ->get();

      return view('admin.dataMentah')->with(compact('data'));
    }

    public function addDataMentah(){
      $kabupaten = ManageKabupaten::all();
      $tahun     = ManageTahun::all();

      return view('admin.addDataMentah')->with(compact('kabupaten','tahun'));
    }

    public function postKabupaten(Request $request){
      $manages            = new ManageKabupaten;
      $manages->kabupaten = $request->kabupaten;
      $manages->save();

      alert()->success('Penambahan Kabupaten Berhasil.', 'Berhasil!');
      return Redirect::back();
    }

    public function postIterasi(Request $request){
      $manages            = new ManageIterasi;
      $manages->iterasi = $request->iterasi;
      $manages->save();

      alert()->success('Penambahan iterasi Berhasil.', 'Berhasil!');
      return Redirect::back();
    }

    public function postTahun(Request $request){
      $manages            = new ManageTahun;
      $manages->tahun     = $request->tahun;
      $manages->save();

      alert()->success('Penambahan Tahun Berhasil.', 'Berhasil!');
      return Redirect::back();
    }

    public function editDataMentah(Request $request, $id){
      $data      = ManageDataMentah::find($id);
      $kabupaten = ManageKabupaten::all();
      $tahun     = ManageTahun::all();

      return view('admin.editDataMentah')->with(compact('data','kabupaten','tahun'));
    }

    public function updateDataMentah(Request $request, $id){
      $manages                = ManageDataMentah::find($id);
      $manages->jum_balita    = $request->jum_balita;
      $manages->jum_perkiraan = $request->jum_perkiraan;
      $manages->jum_ditemukan = $request->jum_ditemukan;
      $manages->kabupaten_id  = $request->kabupaten_id;
      $manages->tahun_id      = $request->tahun_id;

      $manages->save();
      alert()->success('Perubahan Data Mentah Berhasil.', 'Berhasil!');
      return redirect('/dataMentah');

      return view('admin.editDataMentah')->with(compact('data','kabupaten'));
    }

    public function postDataMentah(Request $request){
      $manages                = new ManageDataMentah;
      $manages->jum_balita    = $request->jum_balita;
      $manages->jum_perkiraan = $request->jum_perkiraan;
      $manages->jum_ditemukan = $request->jum_ditemukan;
      $manages->kabupaten_id  = $request->kabupaten_id;
      $manages->tahun_id      = $request->tahun_id;

      $manages->save();
      alert()->success('Penambahan Data Mentah Berhasil.', 'Berhasil!');
      return redirect('/dataMentah');
    }

    public function deleteDataMentah($id){
      $manages = ManageDataMentah::find($id);

      $manages->delete();
      alert()->success('Menghapus Data Mentah Berhasil', 'Berhasil!');
      return redirect('/dataMentah');
    }

    public function user(){
      return view('admin.user');
    }

    public function updateUser(Request $request, $id){
      $manage = Auth::user();
      $manage->name = $request->name;
      $manage->email = $request->email;
      if($request->password == ''){
        $getoldpass = Auth::User()->password;
        $manage->password = $getoldpass;
      }else{
        $manage->password = bcrypt($request->password);
      }
      $manage->save();

      alert()->success('Update User Successfully!','Successfull!');
      return redirect('/dashAdmin');
    }
}
