<?php
class Translate
{
    private $kamus;

    public function __construct($kamus)
    {
        $this->kamus = $kamus;
    }

    public function cariBanjar($kataIndonesia)
    {
        return $this->kamus->terjemahkan($kataIndonesia);
    }
}
