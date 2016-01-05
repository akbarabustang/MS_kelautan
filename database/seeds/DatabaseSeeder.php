<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('BlogTableSeeder');
        $this->call('KategoriTableSeeder');
        $this->call('BlogKategoriTableSeeder');
        $this->call('PageTableSeeder');
        $this->call('PesanTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('SettingTableSeeder');
        $this->call('MenuTableSeeder');
        $this->call('BantuanMasterSeeder');
        $this->call('BantuanSeeder');
        $this->call('KelompokSeeder');
        $this->call('SubUsahaSeeder');
    }
}



class BlogTableSeeder extends Seeder
{
  public function run()
  {
    App\Blog::truncate();

    factory(App\Blog::class, 20)->create();
  }
}

class BlogKategoriTableSeeder extends Seeder
{
  public function run()
  {
    App\BlogKategori::truncate();

    factory(App\BlogKategori::class, 25)->create();
  }
}

class PageTableSeeder extends Seeder
{
  public function run()
  {
    App\Page::truncate();

    factory(App\Page::class, 10)->create();
  }
}

class PesanTableSeeder extends Seeder
{
  public function run()
  {
    App\Pesan::truncate();

    factory(App\Pesan::class, 20)->create();
  }
}

class UserTableSeeder extends Seeder
{
  public function run()
  {

    App\User::truncate();

    $data = array(
      array('name' => 'Admin', 'username' => 'admin', 'email' => 'developer@mediasakti.com', 'password' => bcrypt('admin'), 'profesi' => 'Admin')
    );

    DB::table('users')->insert($data);

    factory(App\User::class, 20)->create();
  }
}

class KategoriTableSeeder extends Seeder
{
  public function run()
  {
    App\Kategori::truncate();

    factory(App\Kategori::class, 5)->create();
  }
}

class SettingTableSeeder extends Seeder
{
  public function run()
  {
    App\Setting::truncate();

    factory(App\Setting::class, 2)->create();
  }
}

class MenuTableSeeder extends Seeder
{
  public function run()
  {
    App\Menu::truncate();

    factory(App\Menu::class, 1)->create();
  }
}

class BantuanMasterSeeder extends Seeder
{

  public function run() {

  App\BantuanMaster::truncate();

    $data = array(
        array('nama' => 'Bibit', 'jenis' => 'Pembudidaya'),
        array('nama' => 'Pakan', 'jenis' => 'Pembudidaya'),
        array('nama' => 'Tali', 'jenis' => 'Pembudidaya'),
        array('nama' => 'Para-para', 'jenis' => 'Pembudidaya'),
        array('nama' => 'Perahu', 'jenis' => 'Pembudidaya'),
        array('nama' => 'Perahu/Kapal', 'jenis' => 'Nelayan'),
        array('nama' => 'Alat Tangkap', 'jenis' => 'Nelayan'),
        array('nama' => 'Mesin', 'jenis' => 'Nelayan')
      );

      DB::table('app_bantuan_master')->insert($data);

  }
}

class SubUsahaSeeder extends Seeder
{

  public function run() {

  App\SubUsaha::truncate();

    $data = array(
        array('nama' => 'KJA', 'jenis' => 'Budidaya Air Laut'),
        array('nama' => 'Kolam Tanah', 'jenis' => 'Budidaya Air Tawar'),
        array('nama' => 'Kolam Terpal', 'jenis' => 'Budidaya Air Tawar'),
        array('nama' => 'Tambak', 'jenis' => 'Budidaya Air Payau'),
      );

      DB::table('app_sub_usaha')->insert($data);

  }
}

class BantuanSeeder extends Seeder
{

  public function run() {

  App\Bantuan::truncate();

    $data = array(
        array('id_user' => 2, 'id_bantuan' => 1, 'tahun' => 2015),
        array('id_user' => 2, 'id_bantuan' => 2, 'tahun' => 2015),
        array('id_user' => 2, 'id_bantuan' => 3, 'tahun' => 2015),
        array('id_user' => 3, 'id_bantuan' => 2, 'tahun' => 2015),
        array('id_user' => 4, 'id_bantuan' => 6, 'tahun' => 2015),
        array('id_user' => 5, 'id_bantuan' => 7, 'tahun' => 2015)
      );

      DB::table('app_bantuan')->insert($data);

  }
}

class KelompokSeeder extends Seeder
{
  public function run()
  {
    App\Kelompok::truncate();

    factory(App\Kelompok::class, 1)->create();
  }
}

class Jabatan extends Seeder
{
  public function run()
  {
    App\Jabatan::truncate();

    $data = array(
      array('nama' => 'Ketua'),
      array('nama' => 'Anggota')
    );

    DB::table('app_jabatan')->insert($data);
  }
}