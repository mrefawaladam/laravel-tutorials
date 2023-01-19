<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string("nama", 120);
            $table->string("email", 50)->nullable();
            $table->string("nomor_hp", 50)->nullable();
            $table->integer("usia");
            $table->enum("jenis_klamin", ["perempuan", "laki-laki"]);
            $table->text("alamat");
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->useCurrent(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
