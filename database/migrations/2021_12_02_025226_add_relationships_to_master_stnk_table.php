<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToMasterStnkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('master_stnk', function (Blueprint $table) {
            $table->foreign('jenis_kendaraan_id')
                    ->references('id')
                    ->on('jenis_kendaraan')
                    ->onUpdate('restrict')
                    ->onDelete('restrict');
            $table->foreign('status_id')
                    ->references('id')
                    ->on('status')
                    ->onUpdate('restrict')
                    ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('master_stnk', function (Blueprint $table) {
            $table->dropForeign('master_stnk_jenis_kendaraan_id_foreign');
            $table->dropForeign('master_stnk_status_id_foreign');
        });
    }
}
