<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // INFORMAZIONI PACCHETTO: destination, resort_name, origin_airport,days_number,insurance, rating, price
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            
            $table->string('destination','50');
            $table->string('resort_name','50');
            $table->string('origin_airport','50');
            $table->tinyInteger('duration_days');
            $table->boolean('insured');
            $table->tinyInteger('rating');
            $table->decimal('price',5,2);

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
        Schema::dropIfExists('travels');
    }
}
