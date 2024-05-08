<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('users', function (Blueprint $table) {
    //         $table->id();
    //         $table->vachar('name');
    //         $table->vachar('email')->unique();
    //         $table->timestamp('email_verified_at')->nullable();
    //         $table->string('password');
    //         $table->vachar('role')->unique();
    //         $table->rememberToken();
    //         $table->timestamps();
    //     });
        
    // }
    // public function updatePassword(Request $request, $id)
    // {
    //     $user = User::find($id);
    //     $user->password = Hash::make($request->input('password')); // Menggunakan Hash::make() untuk meng-hash kata sandi baru
    //     $user->save();
    // }
    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::dropIfExists('users');
    public function store()
{
    // Contoh untuk menambahkan pengguna baru ke database dengan kata sandi yang di-hash menggunakan Hash::make()
    $user = new User();
    $user->name = 'John Doe';
    $user->email = 'john@gmail.com';
    $user->password = Hash::make('fajar'); // Menggunakan Hash::make() untuk meng-hash kata sandi
    $user->save();
}
    // }
};
