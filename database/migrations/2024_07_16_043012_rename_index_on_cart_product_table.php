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
        Schema::table('CartProduct', function (Blueprint $table) {
            $table->dropIndex('idx_6ddc373af96b5928');
            $table->index('column_name', 'IDX_6DDC373AC3C59310');
        });
    }

    public function down()
    {
        Schema::table('CartProduct', function (Blueprint $table) {
            $table->dropIndex('IDX_6DDC373AC3C59310');
            $table->index('column_name', 'idx_6ddc373af96b5928');
        });
    }
};
