<?php
class biodata{
    private $nama;
    private $umur;
    private $jk;

    public function setNama($data){
        $this->nama = $data;
    }
    public function setUmur($data){
        $this->umur = $data;
    }
    public function setJk($data){
        $this->jk = $data;
    }
    public function getNama(){
      return $this->nama;
    }
    public function getUmur(){
      return $this->umur;
    }
    public function getJk(){
      return $this->jk;
    }
}

$manusia1  = new biodata;
$manusia1->setNama("rasya yoga");
$manusia1->setUmur(17);
$manusia1->setJK("pria");

echo "nama dia adalah " . $manusia1->getNama();
echo "<br>";
echo "umur nya " . $manusia1->getUmur();
echo "<br>";
echo "jenis " . $manusia1->getJK();
