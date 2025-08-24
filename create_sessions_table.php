<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->boot();

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

try {
    Schema::create('sessions', function (Blueprint $table) {
        $table->string('id')->primary();
        $table->foreignId('user_id')->nullable()->index();
        $table->string('ip_address', 45)->nullable();
        $table->text('user_agent')->nullable();
        $table->longText('payload');
        $table->integer('last_activity')->index();
    });

    echo "Sessions table created successfully!\n";
} catch (Exception $e) {
    echo "Error creating sessions table: " . $e->getMessage() . "\n";
}
