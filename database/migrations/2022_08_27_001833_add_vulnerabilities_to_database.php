<?php

use App\Models\Vulnerability;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach (Vulnerability::return_default_vulnerabilities() as $vulnerability) {
            Vulnerability::query()->create(['title' => $vulnerability['title'], 'description' => $vulnerability['description']]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        foreach (Vulnerability::return_default_vulnerabilities() as $vulnerability) {
            Vulnerability::query()->where(['title' => $vulnerability['title']])->delete();
        }
    }
};
