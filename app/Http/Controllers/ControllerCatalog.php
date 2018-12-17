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
use App\Models\LokasiBordir;
use App\Models\JenisUkuran;
use App\Models\JumlahKaos;
use App\Models\Lengan;
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
        $lokasi_bordir = DB::table('lokasi_bordir')->get();
        $jenis_ukuran = DB::table('jenis_ukuran')->get();
        $jumlah_kaos = DB::table('jumlah_kaos')->get();
        $lengan = DB::table('lengan')->get();
        return view('katalog')  ->withDetails($jenis_pakaian)
                                ->withModels($model)
                                ->withBahans($bahan)
                                ->withWarnaBahans($warna_bahan)
                                ->withMansets($manset)
                                ->withSablons($sablon)
                                ->withWarnaSablons($warna_sablon)
                                ->withLokasiSablons($lokasi_sablon)
                                ->withLokasiBordirs($lokasi_bordir)
                                ->withJenisUkurans($jenis_ukuran)
                                ->withJumlahKaoss($jumlah_kaos)
                                ->withLengans($lengan);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      public function jenis_pakaian_store(Request $request)
          {
            request()->validate([
              'nama_jenis_pakaian' => 'required',
              'harga' => 'required',
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

          public function lengan_store(Request $request)
              {
                request()->validate([
                  'nama_lengan' => 'required',
                  'harga' => 'required',
                ]);

                Lengan::create($request->all());
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

            public function lengan_destroy($id) {
               DB::delete('delete from lengan where id = ?',[$id]);
               echo "Record deleted successfully.<br/>";
               // echo '<a href = "/Monitoring-KapalSampah/public/home">Click Here</a> to go back.';
               return redirect()->back();
            }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function jenis_pakaian_edit($id)
              {
                $jenis_pakaian = JenisPakaian::whereId($id)->first();
                return view('Edit_Katalog.editJenisPakaian', compact('jenis_pakaian'));
              }

            public function jenis_pakaian_update(Request $request, $id)
              {
                 $jenis_pakaians = JenisPakaian::findOrFail($id);
                 $this->validate($request, [
                   'nama_jenis_pakaian' => 'required',
                   'harga' => 'required',
                 ]);
                 $input = $request->all();
                 $jenis_pakaians->fill($input)->save();
                 $jenis_pakaian = JenisPakaian::whereId($id)->first();

                 return redirect('/katalog');
              }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function model_edit($id)
              {
                    $model = Model::whereId($id)->first();
                    return view('Edit_Katalog.editModel', compact('model'));
              }

            public function model_update(Request $request, $id)
              {
                     $models = Model::findOrFail($id);
                     $this->validate($request, [
                       'nama_model' => 'required',
                     ]);
                     $input = $request->all();
                     $models->fill($input)->save();
                     $model = Model::whereId($id)->first();

                     return redirect('/katalog');
              }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function bahan_edit($id)
              {
                $bahan = Bahan::whereId($id)->first();
                return view('Edit_Katalog.editBahan', compact('bahan'));
              }

            public function bahan_update(Request $request, $id)
               {
                 $bahans = Bahan::findOrFail($id);
                 $this->validate($request, [
                   'nama_bahan' => 'required',
                   'harga' => 'required',
                 ]);
                 $input = $request->all();
                 $bahans->fill($input)->save();
                 $bahan = Bahan::whereId($id)->first();

                 return redirect('/katalog');
            }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function warna_bahan_edit($id)
              {
                 $warna_bahan = WarnaBahan::whereId($id)->first();
                 return view('Edit_Katalog.editWarnaBahan', compact('warna_bahan'));
              }

            public function warna_bahan_update(Request $request, $id)
              {
                 $warna_bahans = WarnaBahan::findOrFail($id);
                 $this->validate($request, [
                   'nama_warna_bahan' => 'required',
                   'harga' => 'required',
                 ]);
                 $input = $request->all();
                 $warna_bahans->fill($input)->save();
                 $warna_bahan = WarnaBahan::whereId($id)->first();

                 return redirect('/katalog');
              }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function manset_edit($id)
              {
                $manset = Manset::whereId($id)->first();
                return view('Edit_Katalog.editManset', compact('manset'));
              }

            public function manset_update(Request $request, $id)
               {
                 $mansets = Manset::findOrFail($id);
                 $this->validate($request, [
                   'nama_manset' => 'required',
                   'harga' => 'required',
                 ]);
                 $input = $request->all();
                 $mansets->fill($input)->save();
                 $manset = Manset::whereId($id)->first();

                 return redirect('/katalog');
            }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function sablon_edit($id)
              {
                    $sablon = Sablon::whereId($id)->first();
                    return view('Edit_Katalog.editSablon', compact('sablon'));
              }

            public function sablon_update(Request $request, $id)
              {
                    $sablons = Sablon::findOrFail($id);
                    $this->validate($request, [
                      'nama_sablon' => 'required',
                      'harga' => 'required',
                    ]);
                    $input = $request->all();
                    $sablons->fill($input)->save();
                    $sablon = Sablon::whereId($id)->first();

                    return redirect('/katalog');
              }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function warna_sablon_edit($id)
              {
                    $warna_sablon = WarnaSablon::whereId($id)->first();
                    return view('Edit_Katalog.editWarnaSablon', compact('warna_sablon'));
              }

            public function warna_sablon_update(Request $request, $id)
              {
                    $warna_sablons = WarnaSablon::findOrFail($id);
                    $this->validate($request, [
                      'nama_warna_sablon' => 'required',
                      'harga' => 'required',
                    ]);
                    $input = $request->all();
                    $warna_sablons->fill($input)->save();
                    $warna_sablon = WarnaSablon::whereId($id)->first();

                    return redirect('/katalog');
              }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function lokasi_sablon_edit($id)
              {
                    $lokasi_sablon = LokasiSablon::whereId($id)->first();
                    return view('Edit_Katalog.editLokasiSablon', compact('lokasi_sablon'));
              }

            public function lokasi_sablon_update(Request $request, $id)
              {
                    $lokasi_sablons = LokasiSablon::findOrFail($id);
                    $this->validate($request, [
                      'nama_lokasi_sablon' => 'required',
                      'harga' => 'required',
                    ]);
                    $input = $request->all();
                    $lokasi_sablons->fill($input)->save();
                    $lokasi_sablon = LokasiSablon::whereId($id)->first();

                    return redirect('/katalog');
              }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function lokasi_bordir_edit($id)
              {
                    $lokasi_bordir = LokasiBordir::whereId($id)->first();
                    return view('Edit_Katalog.editLokasiBordir', compact('lokasi_bordir'));
              }

            public function lokasi_bordir_update(Request $request, $id)
              {
                    $lokasi_bordirs = LokasiBordir::findOrFail($id);
                    $this->validate($request, [
                      'nama_lokasi_bordir' => 'required',
                      'harga' => 'required',
                    ]);
                    $input = $request->all();
                    $lokasi_bordirs->fill($input)->save();
                    $lokasi_bordir = LokasiBordir::whereId($id)->first();

                    return redirect('/katalog');
              }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function jenis_ukuran_edit($id)
              {
                    $jenis_ukuran = JenisUkuran::whereId($id)->first();
                    return view('Edit_Katalog.editJenisUkuran', compact('jenis_ukuran'));
              }

            public function jenis_ukuran_update(Request $request, $id)
              {
                    $jenis_ukurans = JenisUkuran::findOrFail($id);
                    $this->validate($request, [
                      'nama_jenis_ukuran' => 'required',
                      'harga' => 'required',
                    ]);
                    $input = $request->all();
                    $jenis_ukurans->fill($input)->save();
                    $jenis_ukuran = JenisUkuran::whereId($id)->first();

                    return redirect('/katalog');
              }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function jumlah_kaos_edit($id)
              {
                    $jumlah_kaos = JumlahKaos::whereId($id)->first();
                    return view('Edit_Katalog.editJumlahKaos', compact('jumlah_kaos'));
              }

            public function jumlah_kaos_update(Request $request, $id)
              {
                    $jumlah_kaoss = JumlahKaos::findOrFail($id);
                    $this->validate($request, [
                      'nama_jumlah_produk' => 'required',
                      'harga' => 'required',
                    ]);
                    $input = $request->all();
                    $jumlah_kaoss->fill($input)->save();
                    $jumlah_kaos = JumlahKaos::whereId($id)->first();

                    return redirect('/katalog');
              }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function lengan_edit($id)
              {
                    $lengan = Lengan::whereId($id)->first();
                    return view('Edit_Katalog.editLengan', compact('lengan'));
              }

            public function lengan_update(Request $request, $id)
              {
                    $lengans = Lengan::findOrFail($id);
                    $this->validate($request, [
                      'nama_lengan' => 'required',
                      'harga' => 'required',
                    ]);
                    $input = $request->all();
                    $lengans->fill($input)->save();
                    $lengan = Lengan::whereId($id)->first();

                    return redirect('/katalog');
              }
}
