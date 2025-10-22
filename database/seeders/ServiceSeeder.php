<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Main Services
        $services = [
            [
                'name' => 'Pengujian',
                'slug' => 'pengujian',
                'description' => 'Layanan pengujian berbagai produk industri',
                'icon' => 'fas fa-flask',
                'sort_order' => 1,
                'is_featured' => true,
            ],
            [
                'name' => 'Kalibrasi',
                'slug' => 'kalibrasi',
                'description' => 'Layanan kalibrasi alat ukur dan instrumen',
                'icon' => 'fas fa-tools',
                'sort_order' => 2,
                'is_featured' => true,
            ],
            [
                'name' => 'Sertifikasi',
                'slug' => 'sertifikasi',
                'description' => 'Layanan sertifikasi produk dan sistem manajemen',
                'icon' => 'fas fa-certificate',
                'sort_order' => 3,
                'is_featured' => true,
            ],
            [
                'name' => 'Bimbingan Teknis / Konsultansi',
                'slug' => 'bimbingan-teknis-konsultansi',
                'description' => 'Layanan bimbingan teknis dan konsultansi industri',
                'icon' => 'fas fa-user-tie',
                'sort_order' => 4,
                'is_featured' => true,
            ],
            [
                'name' => 'Inspeksi',
                'slug' => 'inspeksi',
                'description' => 'Layanan inspeksi produk dan fasilitas',
                'icon' => 'fas fa-search',
                'sort_order' => 5,
                'is_featured' => true,
            ],
            [
                'name' => 'Verifikasi dan Validasi',
                'slug' => 'verifikasi-dan-validasi',
                'description' => 'Layanan verifikasi dan validasi dokumen',
                'icon' => 'fas fa-check-circle',
                'sort_order' => 6,
                'is_featured' => true,
            ],
            [
                'name' => 'Uji Profisiensi',
                'slug' => 'uji-profisiensi',
                'description' => 'Layanan uji profisiensi laboratorium',
                'icon' => 'fas fa-graduation-cap',
                'sort_order' => 7,
                'is_featured' => true,
            ],
            [
                'name' => 'Pelatihan Teknis',
                'slug' => 'pelatihan-teknis',
                'description' => 'Layanan pelatihan teknis dan profesional',
                'icon' => 'fas fa-chalkboard-teacher',
                'sort_order' => 8,
                'is_featured' => true,
            ],
            [
                'name' => 'Produsen Bahan Acuan',
                'slug' => 'produsen-bahan-acuan',
                'description' => 'Layanan produsen bahan acuan standar',
                'icon' => 'fas fa-vial',
                'sort_order' => 9,
                'is_featured' => true,
            ],
            [
                'name' => 'Edukasi',
                'slug' => 'edukasi',
                'description' => 'Layanan edukasi dan pengembangan SDM',
                'icon' => 'fas fa-book',
                'sort_order' => 10,
                'is_featured' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // Sub Services for Sertifikasi
        $sertifikasi = Service::where('slug', 'sertifikasi')->first();
        if ($sertifikasi) {
            $subServices = [
                [
                    'name' => 'Sertifikasi Produk (SPPT SNI)',
                    'slug' => 'sertifikasi-produk-sppt-sni',
                    'description' => 'Sertifikasi produk dengan SPPT SNI',
                    'icon' => 'fas fa-award',
                    'parent_id' => $sertifikasi->id,
                    'sort_order' => 1,
                ],
                [
                    'name' => 'SMM',
                    'slug' => 'smm',
                    'description' => 'Sertifikasi Sistem Manajemen Mutu',
                    'icon' => 'fas fa-cogs',
                    'parent_id' => $sertifikasi->id,
                    'sort_order' => 2,
                ],
                [
                    'name' => 'SMK3',
                    'slug' => 'smk3',
                    'description' => 'Sertifikasi Sistem Manajemen Keselamatan dan Kesehatan Kerja',
                    'icon' => 'fas fa-hard-hat',
                    'parent_id' => $sertifikasi->id,
                    'sort_order' => 3,
                ],
                [
                    'name' => 'SML',
                    'slug' => 'sml',
                    'description' => 'Sertifikasi Sistem Manajemen Lingkungan',
                    'icon' => 'fas fa-leaf',
                    'parent_id' => $sertifikasi->id,
                    'sort_order' => 4,
                ],
                [
                    'name' => 'SIH',
                    'slug' => 'sih',
                    'description' => 'Sertifikasi Industri Halal',
                    'icon' => 'fas fa-mosque',
                    'parent_id' => $sertifikasi->id,
                    'sort_order' => 5,
                ],
                [
                    'name' => 'Sertifikasi Personil',
                    'slug' => 'sertifikasi-personil',
                    'description' => 'Sertifikasi kompetensi personil',
                    'icon' => 'fas fa-user-check',
                    'parent_id' => $sertifikasi->id,
                    'sort_order' => 6,
                ],
            ];

            foreach ($subServices as $subService) {
                Service::create($subService);
            }
        }

        // Sub Services for Bimbingan Teknis
        $bimbingan = Service::where('slug', 'bimbingan-teknis-konsultansi')->first();
        if ($bimbingan) {
            $subServices = [
                [
                    'name' => 'Audit Teknologi',
                    'slug' => 'audit-teknologi',
                    'description' => 'Layanan audit teknologi industri',
                    'icon' => 'fas fa-clipboard-check',
                    'parent_id' => $bimbingan->id,
                    'sort_order' => 1,
                ],
                [
                    'name' => 'INDI 4.0',
                    'slug' => 'indi-4-0',
                    'description' => 'Bimbingan implementasi Industri 4.0',
                    'icon' => 'fas fa-robot',
                    'parent_id' => $bimbingan->id,
                    'sort_order' => 2,
                ],
                [
                    'name' => 'TKDN',
                    'slug' => 'tkdn',
                    'description' => 'Bimbingan Tingkat Komponen Dalam Negeri',
                    'icon' => 'fas fa-flag',
                    'parent_id' => $bimbingan->id,
                    'sort_order' => 3,
                ],
                [
                    'name' => 'Sistem Manajemen (SNI/ISO)',
                    'slug' => 'sistem-manajemen-sni-iso',
                    'description' => 'Bimbingan sistem manajemen SNI/ISO',
                    'icon' => 'fas fa-sitemap',
                    'parent_id' => $bimbingan->id,
                    'sort_order' => 4,
                ],
                [
                    'name' => 'Penyusunan Dokumen',
                    'slug' => 'penyusunan-dokumen',
                    'description' => 'Bimbingan penyusunan dokumen teknis',
                    'icon' => 'fas fa-file-alt',
                    'parent_id' => $bimbingan->id,
                    'sort_order' => 5,
                ],
            ];

            foreach ($subServices as $subService) {
                Service::create($subService);
            }
        }

        // Sub Services for Verifikasi dan Validasi
        $verifikasi = Service::where('slug', 'verifikasi-dan-validasi')->first();
        if ($verifikasi) {
            $subServices = [
                [
                    'name' => 'GRK',
                    'slug' => 'grk',
                    'description' => 'Verifikasi dan validasi GRK',
                    'icon' => 'fas fa-globe',
                    'parent_id' => $verifikasi->id,
                    'sort_order' => 1,
                ],
                [
                    'name' => 'TKDN',
                    'slug' => 'tkdn-verifikasi',
                    'description' => 'Verifikasi dan validasi TKDN',
                    'icon' => 'fas fa-check-double',
                    'parent_id' => $verifikasi->id,
                    'sort_order' => 2,
                ],
            ];

            foreach ($subServices as $subService) {
                Service::create($subService);
            }
        }

        // Sub Services for Uji Profisiensi
        $ujiProfisiensi = Service::where('slug', 'uji-profisiensi')->first();
        if ($ujiProfisiensi) {
            $subServices = [
                [
                    'name' => 'Kalibrasi',
                    'slug' => 'uji-profisiensi-kalibrasi',
                    'description' => 'Uji profisiensi bidang kalibrasi',
                    'icon' => 'fas fa-balance-scale',
                    'parent_id' => $ujiProfisiensi->id,
                    'sort_order' => 1,
                ],
                [
                    'name' => 'Pengujian',
                    'slug' => 'uji-profisiensi-pengujian',
                    'description' => 'Uji profisiensi bidang pengujian',
                    'icon' => 'fas fa-microscope',
                    'parent_id' => $ujiProfisiensi->id,
                    'sort_order' => 2,
                ],
            ];

            foreach ($subServices as $subService) {
                Service::create($subService);
            }
        }

        // Sub Services for Edukasi
        $edukasi = Service::where('slug', 'edukasi')->first();
        if ($edukasi) {
            $subServices = [
                [
                    'name' => 'Magang / PKL',
                    'slug' => 'magang-pkl',
                    'description' => 'Program magang dan PKL',
                    'icon' => 'fas fa-briefcase',
                    'parent_id' => $edukasi->id,
                    'sort_order' => 1,
                ],
                [
                    'name' => 'Kunjungan',
                    'slug' => 'kunjungan',
                    'description' => 'Program kunjungan industri',
                    'icon' => 'fas fa-building',
                    'parent_id' => $edukasi->id,
                    'sort_order' => 2,
                ],
            ];

            foreach ($subServices as $subService) {
                Service::create($subService);
            }
        }
    }
}
