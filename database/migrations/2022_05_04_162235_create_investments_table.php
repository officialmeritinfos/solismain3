<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user');
            $table->string('amount');
            $table->string('roi');
            $table->string('reference');
            $table->string('source');
            $table->string('profitPerReturn');
            $table->string('currentProfit');
            $table->string('nextReturn');
            $table->string('currentReturn');
            $table->string('returnType');
            $table->string('numberOfReturns');
            $table->string('duration',50)->nullable();
            $table->integer('package');
            $table->integer('status')->default(2);
            $table->softDeletes();
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
        Schema::dropIfExists('investments');
    }
}
