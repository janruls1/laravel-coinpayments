<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $prefix = cp_table_prefix();

        Schema::table($prefix . 'transactions', static function (Blueprint $table) {
            $table->string('success_url')
                ->after('checkout_url')
                ->nullable();

            $table->string('cancel_url')
                ->after('checkout_url')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $prefix = cp_table_prefix();

        Schema::table($prefix . 'transactions', static function (Blueprint $table) {
            $table->dropColumn('success_url');
            $table->dropColumn('cancel_url');
        });
    }
}
