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
        Schema::table('technology_project', function (Blueprint $table) {
            $table->primary(['project_id', 'technology_id']);
            $table->index(['project_id', 'technology_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('technology_project', function (Blueprint $table) {
            
            $table->dropPrimary(['project_id', 'technology_id']);
        });
    }
};
