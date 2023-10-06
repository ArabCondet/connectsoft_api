<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\buku;
use App\Models\peminjaman;
use App\Models\pengembalian;
use App\Models\rak;
use App\Models\Anggota;
use App\Models\petugas;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
            "kode_anggota" => "123456789",
            "nama_anggota" => "Achmad Husein",
            "jk_anggota" => "L",
            "jurusan_anggota" => "RPL",
            "no_telp_anggota" => "087875200241",
            "alamat" => "Jl Entong gendut",

        ]);

        Anggota::create([
            "kode_anggota" => "123452789",
            "nama_anggota" => "Reifatih",
            "jk_anggota" => "P",
            "jurusan_anggota" => "RPL",
            "no_telp_anggota" => "087823206741",
            "alamat" => "Jl otitsa punya",
        ]);

        petugas::create([
            "nama_petugas" => "Sakhi ashari",
            "jabatan_petugas" => "Penjaga social media 13 jam",
            "no_telp_petugas" => "081123206741",
            "alamat_petugas" => "Jl bula kerantai",
        ]);

        petugas::create([
            "nama_petugas" => "Dewa ipul",
            "jabatan_petugas" => "penjaga keamanan perpus",
            "no_telp_petugas" => "081124406741",
            "alamat_petugas" => "Jl kali malang",
        ]);

        buku::create([
            "kode_buku" => "12345",
            "judul_buku" => "cara sukses ala Farid",
            "penulis_buku" => "Farid",
            "penerbit_buku" => "Gunung agung",
            "tahun_penerbit" => "2022",
            "stok" => "32",
        ]);

        buku::create([
            "kode_buku" => "54321",
            "judul_buku" => "Cara sukses menggait hati wanita",
            "penulis_buku" => "Sakhi",
            "penerbit_buku" => "Gunung agung",
            "tahun_penerbit" => "1945",
            "stok" => "15",
        ]);

        rak::create([
            "nama_rak" => "Bussiness",
            "lokasi_rak" => "LT1-C1",
            "buku_id" => "1",
        ]);

        rak::create([
            "nama_rak" => "Love",
            "lokasi_rak" => "LT1-C2",
            "buku_id" => "2",
        ]);

        peminjaman::create([
            "tanggal_peminjaman" => "2023-10-01",
            "tanggal_kembali" => "2023-10-04",
            "id_buku" => "1",
            "anggota_id" => "1",
            "petugas_id" => "1",
        ]);

        peminjaman::create([
            "tanggal_peminjaman" => "2023-10-02",
            "tanggal_kembali" => "2023-10-03",
            "id_buku" => "2",
            "anggota_id" => "2",
            "petugas_id" => "2",
        ]);

        pengembalian::create([
            "tanggal_pengembalian" => "2023-10-06",
            "denda" => "35000",
            "buku_id" => "1",
            "anggota_id" => "1",
            "petugas_id" => "1",
        ]);

        peminjaman::create([
            "tanggal_pengembalian" => "2023-10-03",
            "denda" => "0",
            "buku_id" => "2",
            "anggota_id" => "2",
            "petugas_id" => "2",
        ]);
    }
}
