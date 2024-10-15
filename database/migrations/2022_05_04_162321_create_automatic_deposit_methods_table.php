<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomaticDepositMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automatic_deposit_methods', function (Blueprint $table) {
            $table->id();
            $table->string('name',150);
            $table->string('logo');
            $table->string('merchantId');
            $table->string('pubKey');
            $table->string('secKey');
            $table->char('charge',100);
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
        Schema::dropIfExists('automatic_deposit_methods');
    }
}
