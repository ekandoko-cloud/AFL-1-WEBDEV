<?php
class model_mahasiswa{
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->setNama($nama);
        $this->setNim($nim);
        $this->setJurusan($jurusan);
    }

    public function getNama(){
        return $this->nama;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNim(){
        return $this->nim;
    }

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function getJurusan(){
        return $this->jurusan;
    }

    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}

class model_matakuliah{
    private $nama_mk;
    private $kode;
    private $sks;

    public function __construct($nama_mk, $kode, $sks){
        $this->setNamaMk($nama_mk);
        $this->setKode($kode);
        $this->setSks($sks);
    }

    public function getNamaMk(){
        return $this->nama_mk;
    }

    public function setNamaMk($nama_mk){
        $this->nama_mk = $nama_mk;
    }

    public function getKode(){
        return $this->kode;
    }

    public function setKode($kode){
        $this->kode = $kode;
    }

    public function getSks(){
        return $this->sks;
    }

    public function setSks($sks){
        $this->sks = $sks;
    }
}
?>