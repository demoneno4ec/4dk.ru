<?php
declare(strict_types=1);

use App\Traits\DatabaseConnection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhoneTable extends Migration
{
    use DatabaseConnection;

    private string $tableName = 'phone';

    public static function create(Blueprint $table): void
    {
        $table->id();
        $table->string('number', 50);
        $table->foreignId('user_id');
        $table->foreign('user_id')
            ->references('id')
            ->on('user')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        $table->timestamps();
    }
}
