<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->foreign('club_id', 'club_id_fk3')
                ->references('id')->on('clubs')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreign('rival_id', 'rival_id_fk1')
                ->references('id')->on('clubs')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->dropForeign('club_id_fk3');
            $table->dropForeign('rival_id_fk1');
        });
    }
}
