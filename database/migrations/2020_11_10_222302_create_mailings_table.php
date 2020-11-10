<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailings', function (Blueprint $table) {
            $table->id();

            $table->string('subject');
            $table->longText('body_html')->nullable();
            $table->longText('body_text')->nullable();

            $table->timestamps();
            $table->dateTime('sent_at')->nullable();
            $table->softDeletes();
        });

        Schema::create('mailings_subscribers', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('mailing_id');
            $table->bigInteger('subscriber_id');

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
        Schema::dropIfExists('mailings');
        Schema::dropIfExists('mailings_subscribers');
    }
}
