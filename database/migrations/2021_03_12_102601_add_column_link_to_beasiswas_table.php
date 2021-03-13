<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnLinkToBeasiswasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('beasiswas', function (Blueprint $table) {
      $table->string('link')->after('batas_pendaftaran')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('beasiswas', function (Blueprint $table) {
      $table->dropColumn('link');
    });
  }
}
