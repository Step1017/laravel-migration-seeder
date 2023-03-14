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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);                 // Azienda -                    TIPO: stringa
            $table->string('departure_station', 100);      // Stazione di partenza -       TIPO: stringa
            $table->string('arrival_station', 100);                // Stazione di arrivo -         TIPO: stringa
            $table->dateTime('departure_time', 3);         // Orario di partenza -         TIPO: datetime, timestamp
            $table->dateTime('arrival', 1);                // Orario di arrivo -           TIPO: datetime, timestamp
            $table->string('code', 12);                    // Codice Treno -               TIPO: stringa
            $table->unsignedTinyInteger('carragies');      // Numero Carrozze -            TIPO: unsigned tinyint
            $table->boolean('on_time')->default(true);     // In orario -                  TIPO: booleano
            $table->boolean('canceled')->default(false);   // Cancellato -                 TIPO: booleano
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
        Schema::dropIfExists('trains');
    }
};