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

        Schema::table('vaccines', function($table) {
            $table->date('application_date')->unsigned()->nullable()->change();
        }
);
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vaccines', function($table) {
            $table->date('application_date')->unsigned()->nullable(false)->change();
        });
    }
};
