<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\JenisPakaian;
use App\Models\Model;
use App\Models\Bahan;
use App\Models\WarnaBahan;
use App\Models\Manset;
use App\Models\Sablon;
use App\Models\WarnaSablon;
use App\Models\LokasiSablon;
use App\Models\Bordir;
use App\Models\LokasiBordir;
use App\Models\JenisUkuran;
use App\Models\JumlahKaos;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Kategori;

class ControllerCatalog extends Controller
{
    //Menampilkan halaman isi katalog

    public function index()
    {
        $jenis_pakaian = DB::table('jenis_pakaian')->get();
        $model = DB::table('model')->get();
        $bahan = DB::table('bahan')->get();
        $warna_bahan = DB::table('warna_bahan')->get();
        $manset = DB::table('manset')->get();
        $sablon = DB::table('sablon')->get();
        $warna_sablon = DB::table('warna_sablon')->get();
        $lokasi_sablon = DB::table('lokasi_sablon')->get();
        $bordir = DB::table('bordir')->get();
        $lokasi_bordir = DB::table('lokasi_bordir')->get();
        $jenis_ukuran = DB::table('jenis_ukuran')->get();
        $jumlah_kaos = DB::table('jumlah_kaos')->get();
        return view('katalog')  ->withDetails($jenis_pakaian)
                                ->withModels($model)
                                ->withBahans($bahan)
                                ->withWarnaBahans($warna_bahan)
                                ->withMansets($manset)
                                ->withSablons($sablon)
                                ->withWarnaSablons($warna_sablon)
                                ->withLokasiSablons($lokasi_sablon)
                                ->withBordirs($bordir)
                                ->withLokasiBordirs($lokasi_bordir)
                                ->withJenisUkurans($jenis_ukuran)
                                ->withJumlahKaoss($jumlah_kaos);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      public function jenis_pakaian_store(Request $request)
          {
            request()->validate([
              'nama_jenis_pakaian' => 'required',
            ]);

            JenisPakaian::create($request->all());
            return redirect('/katalog');
          }

      public function model_store(Request $request)
          {
            request()->validate([
              'nama_model' => 'required',
              'harga' => 'required',
            ]);

            Model::create($request->all());
            return redirect('/katalog');
          }

      public function bahan_store(Request $request)
          {
            request()->validate([
              'nama_bahan' => 'required',
              'harga' => 'required',
            ]);

            Bahan::create($request->all());
            return redirect('/katalog');
          }

      public function warna_bahan_store(Request $request)
          {
            request()->validate([
              'nama_warna_bahan' => 'required',
              'harga' => 'required',
            ]);

            WarnaBahan::create($request->all());
            return redirect('/katalog');
          }

      public function manset_store(Request $request)
          {
            request()->validate([
              'nama_manset' => 'required',
              'harga' => 'required',
            ]);

            Manset::create($request->all());
            return redirect('/katalog');
          }

      public function sablon_store(Request $request)
          {
            request()->validate([
              'nama_sablon' => 'required',
              'harga' => 'required',
            ]);

            Sablon::create($request->all());
            return redirect('/katalog');
          }

      public function warna_sablon_store(Request $request)
          {
            request()->validate([
              'nama_warna_sablon' => 'required',
              'harga' => 'required',
            ]);

            WarnaSablon::create($request->all());
            return redirect('/katalog');
          }

      public function lokasi_sablon_store(Request $request)
          {
            request()->validate([
              'nama_lokasi_sablon' => 'required',
              'harga' => 'required',
            ]);

            LokasiSablon::create($request->all());
            return redirect('/katalog');
          }

      public function bordir_store(Request $request)
          {
            request()->validate([
              'nama_bordir' => 'required',
              'harga' => 'required',
            ]);

            Bordir::create($request->all());
            return redirect('/katalog');
          }

      public function lokasi_bordir_store(Request $request)
          {
            request()->validate([
              'nama_lokasi_bordir' => 'required',
              'harga' => 'required',
            ]);

            LokasiBordir::create($request->all());
            return redirect('/katalog');
          }

      public function jenis_ukuran_store(Request $request)
          {
            request()->validate([
              'nama_jenis_ukuran' => 'required',
              'harga' => 'required',
            ]);

            JenisUkuran::create($request->all());
            return redirect('/katalog');
          }

      public function jumlah_kaos_store(Request $request)
          {
            request()->validate([
              'nama_jumlah_produk' => 'required',
              'harga' => 'required',
            ]);

            JumlahKaos::create($request->all());
            return redirect('/katalog');
          }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function jenis_pakaian_destroy($id) {
               DB::delete('delete from jenis_pakaian where id = ?',[$id]);
               echo "Record deleted successfully.<br/>";
               // echo '<a href = "/Monitoring-KapalSampah/public/home">Click Here</a> to go back.';
               return redirect()->back();
            }

            public function model_destroy($id) {
               DB::delete('delete from model where id = ?',[$id]);
               echo "Record deleted successfully.<br/>";
               // echo '<a href = "/Monitoring-KapalSampah/public/home">Click Here</a> to go back.';
               return redirect()->back();
            }

            public function bahan_destroy($id) {
               DB::delete('delete from bahan where id = ?',[$id]);
               echo "Record deleted successfully.<br/>";
               // echo '<a href = "/Monitoring-KapalSampah/public/home">Click Here</a> to go back.';
               return redirect()->back();
            }

            public function warna_bahan_destroy($id) {
               DB::delete('delete from warna_bahan where id = ?',[$id]);
               echo "Record deleted successfully.<br/>";
               // echo '<a href = "/Monitoring-KapalSampah/public/home">Click Here</a> to go back.';
               return redirect()->back();
            }

            public function manset_destroy($id) {
               DB::delete('delete from manset where id = ?',[$id]);
               echo "Record deleted successfully.<br/>";
               // echo '<a href = "/Monitoring-KapalSampah/public/home">Click Here</a> to go back.';
               return redirect()->back();
            }

            public function sablon_destroy($id) {
               DB::delete('delete from sablon where id = ?',[$id]);
               echo "Record deleted successfully.<br/>";
               // echo '<a href = "/Monitoring-KapalSampah/public/home">Click Here</a> to go back.';
               return redirect()->back();
            }

            public function warna_sablon_destroy($id) {
               DB::delete('delete from warna_sablon where id = ?',[$id]);
               echo "Record deleted successfully.<br/>";
               // echo '<a href = "/Monitoring-KapalSampah/public/home">Click Here</a> to go back.';
               return redirect()->back();
            }

            public function lokasi_sablon_destroy($id) {
               DB::delete('delete from lokasi_sablon where id = ?',[$id]);
               echo "Record deleted successfully.<br/>";
               // echo '<a href = "/Monitoring-KapalSampah/public/home">Click Here</a> to go back.';
               return redirect()->back();
            }

            public function bordir_destroy($id) {
               DB::delete('delete from bordir where id = ?',[$id]);
               echo "Record deleted successfully.<br/>";
               // echo '<a href = "/Monitoring-KapalSampah/public/home">Click Here</a> to go back.';
               return redirect()->back();
            }

            public function lokasi_bordir_destroy($id) {
               DB::delete('delete from lokasi_bordir where id = ?',[$id]);
               echo "Record deleted successfully.<br/>";
               // echo '<a href = "/Monitoring-KapalSampah/public/home">Click Here</a> to go back.';
               return redirect()->back();
            }

            public function jenis_ukuran_destroy($id) {
               DB::delete('delete from jenis_ukuran where id = ?',[$id]);
               echo "Record deleted successfully.<br/>";
               // echo '<a href = "/Monitoring-KapalSampah/public/home">Click Here</a> to go back.';
               return redirect()->back();
            }

            public function jumlah_kaos_destroy($id) {
               DB::delete('delete from jumlah_kaos where id = ?',[$id]);
               echo "Record deleted successfully.<br/>";
               // echo '<a href = "/Monitoring-KapalSampah/public/home">Click Here</a> to go back.';
               return redirect()->back();
            }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function jenis_pakaian_edit($id)
        {
          $jenis_pakaian = JenisPakaian::whereId($id)->first();
          return view('editJenisPakaian') ->withDetails($jenis_pakaian);
        }

        public function jenis_pakaian_update(Request $request, $id)
        {
             $jenis_pakaians = JenisPakaian::findOrFail($id);
             $this->validate($request, [
               'nama_jenis_pakaian' => 'required',
             ]);
             $input = $request->all();
             $jenis_pakaians->fill($input)->save();
             $jenis_pakaian = DB::table('jenis_pakaian')->get();
             return view('katalog')  ->withDetails($jenis_pakaian);
        }

}
