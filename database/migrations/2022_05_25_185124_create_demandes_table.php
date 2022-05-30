<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->integer('idUser');
            $table->integer('receve');
            $table->float('amount');
            $table->integer('devise');
            $table->text('description');
            $table->string('delai');
            $table->boolean('statut');//0 Non payé // 1 Payé
            $table->string('datePay')->nullable();
            $table->string('destinate','15')->nullable();
            $table->boolean('reject')->default(false);
            $table->date('reject_date')->nullable();
            $table->string('reject_raison')->nullable();
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
        Schema::dropIfExists('demandes');
    }
}
