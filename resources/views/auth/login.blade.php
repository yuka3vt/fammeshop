@extends('layouts.index')
@section('content')
    <!-- Main Content -->
    <main class="flex-1 container mx-auto px-4 py-8">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center mb-6">Produk Kami</h1>
        
        <!-- Card Produk -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Produk 1 -->
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="https://source.unsplash.com/300x200/?fitness" alt="Produk 1"/></figure>
                <div class="card-body">
                    <h2 class="card-title">Produk 1</h2>
                    <p>Deskripsi singkat produk.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Beli Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Produk 2 -->
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="https://source.unsplash.com/300x200/?gym" alt="Produk 2"/></figure>
                <div class="card-body">
                    <h2 class="card-title">Produk 2</h2>
                    <p>Deskripsi singkat produk.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Beli Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Produk 3 -->
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="https://source.unsplash.com/300x200/?shoes" alt="Produk 3"/></figure>
                <div class="card-body">
                    <h2 class="card-title">Produk 3</h2>
                    <p>Deskripsi singkat produk.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Beli Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Produk 4 -->
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="https://source.unsplash.com/300x200/?supplement" alt="Produk 4"/></figure>
                <div class="card-body">
                    <h2 class="card-title">Produk 4</h2>
                    <p>Deskripsi singkat produk.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Beli Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection