<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(loai_nguoi_dungs::class);
        $this->call(nguoi_dungs::class);
        $this->call(slides::class);

    }


}

class loai_nguoi_dungs extends Seeder
{
    public function run()
    {
        DB::table('loai_nguoi_dungs')->insert([
            ['TenLoai' => 'Admin'],
            ['TenLoai' => 'Customer'],
        ]);
    }
}

class nguoi_dungs extends Seeder
{
    public function run()
    {
        DB::table('nguoi_dungs')->insert([
            ['Email'=>'tienxmin0123','TenNguoidung'=>'Tiến Vũ','SDT'=>'0961743857','DiaChi'=>'Hà Nội','Anh'=>'', 'GioiTinh'=>1,'username'=>'tienxmin0123','password'=>bcrypt('12345'),'loai_nguoi_dungs_id'=>1],
            ['Email'=>'nnhtra','TenNguoidung'=>'Hương Trà','SDT'=>'085125215','DiaChi'=>'Ba Đình - Hà Nội','Anh'=>'', 'GioiTinh'=>2,'username'=>'nnhtra','password'=>bcrypt('12345'),'loai_nguoi_dungs_id'=>2],
            ['Email'=>'maituananh','TenNguoidung'=>'Mai Tuấn Anh','SDT'=>'12345678','DiaChi'=>'Hải Phòng','Anh'=>'', 'GioiTinh'=>1,'username'=>'maituananh','password'=>bcrypt('12345'),'loai_nguoi_dungs_id'=>2],
            ['Email'=>'ngoduchiep','TenNguoidung'=>'Ngô Đức Hiệp','SDT'=>'12345678','DiaChi'=>'Hà Nội','Anh'=>'', 'GioiTinh'=>1,'username'=>'ngoduchiep','password'=>bcrypt('12345'),'loai_nguoi_dungs_id'=>1],
            ['Email'=>'duyenpham','TenNguoidung'=>'Phạm Thị Duyên','SDT'=>'12345678','DiaChi'=>'Hà Nội','Anh'=>'', 'GioiTinh'=>2,'username'=>'duyenpham','password'=>bcrypt('12345'),'loai_nguoi_dungs_id'=>1],
            ['Email'=>'caonguyen','TenNguoidung'=>'Cao Chí Nguyên','SDT'=>'12345678','DiaChi'=>'Hà Nội','Anh'=>'', 'GioiTinh'=>1,'username'=>'caonguyen','password'=>bcrypt('12345'),'loai_nguoi_dungs_id'=>1],
            ['Email'=>'nhatminh785@gmail.com','TenNguoidung'=>'Minh Nhut','SDT'=>'12345678','DiaChi'=>'Hà Nội','Anh'=>'', 'GioiTinh'=>1,'username'=>'minhnhut123','password'=>bcrypt('12345'),'loai_nguoi_dungs_id'=>1],

        ]);
    }
}

class slides extends Seeder
{
    public function run()
    {
        DB::table('table_image_slides')->insert([
            ['image_name' => 'banner.webp'],
        ]);
    }
}

