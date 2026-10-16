<?php

namespace App\Repository;

use App\Akademik\Dosen;
use App\Akademik\Pegawai;
use App\Akademik\TenagaKependidikan;
use App\Database\DbConnector;
use PDO;
use PDOException;

class PegawaiRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = DbConnector::connect();
    }

    public function simpanPegawai(Pegawai $pegawai): bool
    {
        try {
            $this->db->beginTransaction();

            $sql = "INSERT INTO pegawai (nip, nama, no_hp, alamat, tipe_pegawai)
                    VALUES (:nip, :nama, :no_hp, :alamat, :tipe_pegawai)";

            $stmt = $this->db->prepare($sql);

            $tipePegawai = ($pegawai instanceof Dosen) ? 'Dosen' : 'Tendik';

            $stmt->execute([
                ':nip' => $pegawai->nip,
                ':nama' => $pegawai->nama,
                ':no_hp' => $pegawai->getNoHp(),
                ':alamat' => $pegawai->alamat,
                ':tipe_pegawai' => $tipePegawai
            ]);

            if ($pegawai instanceof Dosen) {
                $sqlDosen = "INSERT INTO dosen (nip, nidn, jumlah_sks)
                             VALUES (:nip, :nidn, :jumlah_sks)";

                $stmtDosen = $this->db->prepare($sqlDosen);
                $stmtDosen->execute([
                    ':nip' => $pegawai->nip,
                    ':nidn' => $pegawai->getNidn(),
                    ':jumlah_sks' => $pegawai->jumlah_sks
                ]);
            } elseif ($pegawai instanceof TenagaKependidikan) {
                $sqlTendik = "INSERT INTO tendik (nip, gaji_pokok)
                              VALUES (:nip, :gaji_pokok)";

                $stmtTendik = $this->db->prepare($sqlTendik);
                $stmtTendik->execute([
                    ':nip' => $pegawai->nip,
                    ':gaji_pokok' => $pegawai->gaji_pokok
                ]);
            }

            $this->db->commit();
            return true;

        } catch (PDOException $e) {
            if ($this->db->inTransaction()) {
                $this->db->rollBack();
            }

            echo "Gagal menyimpan pegawai: " . $e->getMessage() . PHP_EOL;
            return false;
        }
    }

    public function ambilSemuaDosen(): array
    {
        $sql = "SELECT p.nip, p.nama, p.no_hp, p.alamat, d.nidn, d.jumlah_sks
                FROM pegawai p
                INNER JOIN dosen d ON p.nip = d.nip";

        $stmt = $this->db->query($sql);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $dosenList = [];

        foreach ($results as $row) {
            $dosenObj = new Dosen(
                (int) $row['nip'],
                $row['nama'],
                $row['no_hp'],
                $row['alamat'],
                $row['nidn']
            );

            $dosenObj->jumlah_sks = (int) $row['jumlah_sks'];
            $dosenList[] = $dosenObj;
        }

        return $dosenList;
    }
}
