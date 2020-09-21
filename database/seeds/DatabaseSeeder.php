<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ThemDamhSachSeeder::class);
        $this->call(ThemSachBTSeeder::class);
        $this->call(ThemSachDacBietSeeder::class);
        $this->call(ThemMaTheLoaiSeeder::class);
        $this->call(ThemNhaXuatBanSeeder::class);
        $this->call(ThemQuanTriVienSeeder::class);
        $this->call(ThemSachThamKhaoSeeder::class);
        $this->call(ThemTacGiaSeeder::class);
    }
}
