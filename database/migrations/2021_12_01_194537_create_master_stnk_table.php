<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterStnkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_stnk', function (Blueprint $table) {
            $table->id();
            $table->integer('no_stnk')->unique();
            $table->string('no_polisi', 10)->unique();
            $table->string('merk', 15);
            $table->unsignedBigInteger('jenis_kendaraan_id');
            $table->string('model', 15);
            $table->string('no_rangka', 15)->unique();
            $table->integer('silinder');
            $table->string('no_mesin', 10)->unique();
            $table->date('masa_berlaku');
            $table->text('tnkb');
            $table->integer('swdkllj');
            $table->integer('jasa_perpanjangan')->nullable();
            $table->integer('pkb');
            $table->string('bahan_bakar', 10);
            $table->integer('tahun_kendaraan');
            $table->string('nama_stnk', 35);
            $table->string('warna', 10);
            $table->string('no_bpkb', 10)->nullable();
            $table->integer('nilai_pajak_stnk')->nullable();
            $table->integer('pajak_jasa')->nullable();
            $table->date('pajak_stnk');
            $table->unsignedBigInteger('status_id')->default(1);
            $table->string('created_by')->default("Admin Asman");
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_stnk');
    }
}
