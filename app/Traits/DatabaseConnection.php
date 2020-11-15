<?php
declare(strict_types=1);


namespace App\Traits;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

trait DatabaseConnection
{
    private Builder $databaseSchema;

    public function __construct()
    {
        $this->databaseSchema = Schema::connection($this->getConnection());
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        DB::beginTransaction();

        $this->databaseSchema
            ->create($this->tableName, static function (Blueprint $table) {
                static::create($table);
            });

        DB::commit();
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        DB::beginTransaction();

        $this->databaseSchema
            ->dropIfExists($this->tableName);

        DB::commit();
    }

    /**
     * Create strategy
     * @param  Blueprint  $table
     * @return void
     */
    abstract protected static function create(Blueprint $table): void;
}
