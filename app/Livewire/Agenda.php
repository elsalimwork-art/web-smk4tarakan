<?php
namespace App\Livewire;

use Livewire\Component;

class Agenda extends Component
{
    public $search = '';
    public $kategori = 'Semua';

    public function render()
    {
        $dataAgenda = [
            [
                'tanggal' => '15',
                'bulan' => 'NOV',
                'tahun' => '2026',
                'kategori' => 'Akademik',
                'judul' => 'Pelaksanaan Ujian Sekolah',
                'deskripsi' => 'Kegiatan evaluasi pembelajaran untuk mengukur pencapaian kompetensi peserta didik.',
                'waktu' => '08.00 - 12.00 WITA',
                'lokasi' => 'SMK Negeri 4 Tarakan',
                'gambar' => 'images/agenda/ujian.jpg',
                'status' => 'Akan Datang',
                'slug' => 'pelaksanaan-ujian-sekolah',
            ],
            [
                'tanggal' => '20',
                'bulan' => 'NOV',
                'tahun' => '2026',
                'kategori' => 'Kesiswaan',
                'judul' => 'Kegiatan Pengembangan Karakter Siswa',
                'deskripsi' => 'Kegiatan untuk membangun kedisiplinan, tanggung jawab, dan karakter positif peserta didik.',
                'waktu' => '08.00 - Selesai',
                'lokasi' => 'Lingkungan Sekolah',
                'gambar' => 'images/agenda/karakter.jpg',
                'status' => 'Akan Datang',
                'slug' => 'pengembangan-karakter-siswa',
            ],
            [
                'tanggal' => '25',
                'bulan' => 'NOV',
                'tahun' => '2026',
                'kategori' => 'Sekolah',
                'judul' => 'Rapat Evaluasi Kegiatan Sekolah',
                'deskripsi' => 'Pertemuan untuk membahas evaluasi dan perkembangan program kegiatan sekolah.',
                'waktu' => '09.00 - Selesai',
                'lokasi' => 'Ruang Rapat Sekolah',
                'gambar' => 'images/agenda/rapat.jpg',
                'status' => 'Akan Datang',
                'slug' => 'rapat-evaluasi-sekolah',
            ],
        ];

        $agenda = collect($dataAgenda)->filter(function ($item) {
            $cocokKategori = $this->kategori === 'Semua'
                || $item['kategori'] === $this->kategori;

            $kataKunci = strtolower($this->search);

            $cocokPencarian = str_contains(
                strtolower($item['judul'] . ' ' . $item['deskripsi']),
                $kataKunci
            );

            return $cocokKategori && $cocokPencarian;
        })->values();

        return view('livewire.agenda', [
            'agenda' => $agenda,
        ]);
    }
}
