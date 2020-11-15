<?php
declare(strict_types=1);

use App\Traits\DatabaseConnection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration
{
    use DatabaseConnection;

    private string $tableName = 'user';

    public static function create(Blueprint $table): void
    {
        $table->id();
        $table->string('surname', 100);
        $table->string('name', 100);
        $table->string('patronymic', 100);
        $table->timestamps();
    }
}
