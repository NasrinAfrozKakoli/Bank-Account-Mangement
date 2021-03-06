<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('financial_organization_id')->comment('Bank table primary id');
            $table->bigInteger('store_id')->nullable();
            $table->string('account_name',255);
            $table->string('account_no',100)->nullable();
            $table->string('branch',50)->nullable();
            $table->tinyInteger('account_type')->nullable()->comment('1= saving account, 2= current account, 3 join account');
            $table->string('swift_code',100)->nullable();
            $table->string('route_no',100)->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_accounts');
    }
}
