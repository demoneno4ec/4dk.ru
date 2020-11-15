<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->createDataUser();
        $this->createDataPhone();
    }

    private function createDataUser(): void
    {
        User::factory(4)->create();
    }

    private function createDataPhone(): void
    {
        Phone::factory(10)->create();
    }
}
