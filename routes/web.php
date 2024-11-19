<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Route untuk menampilkan daftar buku
Route::get('/books', [BookController::class, 'index']);

// Route untuk menampilkan form tambah buku
Route::get('/add-book', [BookController::class, 'create'])->name('books.create');

// Route untuk menyimpan buku baru
Route::post('/add-book', [BookController::class, 'store'])->name('books.store');

// Route untuk menampilkan form edit buku
Route::get('/edit-book/{id}', [BookController::class, 'edit'])->name('books.edit');

// Route untuk mengupdate data buku
Route::post('/edit-book/{id}', [BookController::class, 'update'])->name('books.update');

// Route untuk menghapus buku
Route::get('/delete-book/{id}', [BookController::class, 'destroy'])->name('books.destroy');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index']);
// });
