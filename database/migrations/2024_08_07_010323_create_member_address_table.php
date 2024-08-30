<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_address', function (Blueprint $table) {
            $table->id();
           // $table->timestamps("id"); id欄位自動編號
           // nullable:允許空值
           $table->integer("memberId")->nullable();
           // string:文字, 100長度為100
           $table->string("address", 100)->nullable();
           // defaule :預設值
           $table->char("active")->default("Y");
           // 時間欄位
            $table->timestamps();

            /*
                資料型態
                integer: 整數
                string = varchar 文字,若沒給長度,預設為255
                char = char
                decimal, float等:浮點數(有小數點),若要指定小數點2位，
                    可設定5,2:5(整數長度)，2(小數點長度)
                
                
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_address');
    }
}
