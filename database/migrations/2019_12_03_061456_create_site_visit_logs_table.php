<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteVisitLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SiteVisitLogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('ip');
            $table->integer('visitedSiteId');
            $table->integer('visitorSiteId');
            $table->integer('totalVisit');
            $table->integer('browserId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SiteVisitLogs');
    }
}
