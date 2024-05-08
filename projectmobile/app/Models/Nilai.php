<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nilai extends Model
{
    use HasFactory;
    protected $primaryKey = 'nilai_id';
    protected $fillable = [
        'nis', // Tambahkan 'nis' ke dalam properti $fillable
        'pelajaran_id',
        'nilai_tugas',
        'nilai_uts',
        'nilai_uas',
        'nilai_kepribadian',
        'sakit',
        'alfa',
        'izin',
    ];

    public function siswas(): BelongsTo
    {
        return $this -> belongsTo(Siswa::class, 'nis', 'nis');
    }

    public function pelajarans(): BelongsTo
    {
        return $this -> belongsTo(Pelajaran::class, 'pelajaran_id', 'pelajaran_id');
    }
}
