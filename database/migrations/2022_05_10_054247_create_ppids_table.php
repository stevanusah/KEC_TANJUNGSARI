<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppids', function (Blueprint $table) {
            $table->id();
            $table->text('tugas_ppid');
            $table->text('fungsi_ppid');
            $table->text('visi_ppid');
            $table->text('misi_ppid');
            $table->string('struktur_organisasi_ppid_image');
            $table->text('maklumat_ppid');
            $table->string('is_active');
            $table->bigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppids');
    }
}
