<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MagangSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('magangs')->insert([

      'name' => 'Internship Batch 5 Kampus Indonesia',
      'instansi' => 'Kampus Indonesia',
      'bidang' => 'Back End Developer',
      'batas_pendaftaran' => '2021/04/13',
      'link' => 'https://forms.gle/zKXwV8LpK9YqULzVA'
    ]);

    DB::table('magangs')->insert([

      'name' => 'Internship Batch 5 Kampus Indonesia',
      'instansi' => 'Kampus Indonesia',
      'bidang' => 'Data Mining',
      'batas_pendaftaran' => '2021/04/13',
      'link' => 'https://forms.gle/zKXwV8LpK9YqULzVA'
    ]);
  }
}
