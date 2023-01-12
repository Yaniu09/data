<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Sector::create([
      'name' => 'Taviyani',
      'code' => 'tpl'
    ]);
    Sector::create([
      'name' => 'Avas Ride',
      'code' => 'ar'
    ]);
  }
}
