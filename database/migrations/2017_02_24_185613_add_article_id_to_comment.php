<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArticleIdToComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('comments' , function(Blueprint $table){
            $table->integer('article_id')->nullable()->after('body')->unsigned();
           $table->foreign('article_id')->references('id')->on('articles'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//         $table->dropColumn('article_id');
    }
}
