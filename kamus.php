<?php
class Kamus
{
    private $kamusData;

    public function __construct()
    {
        $this->kamusData = array(
            "kamu" => "ikam",
            "ikan" => "iwak",
            "enak" => "nyaman",
            "letak" => "andak",
        );
    }

    public function terjemahkan($kataIndonesia)
    {
        if (array_key_exists($kataIndonesia, $this->kamusData)) {
            return $this->kamusData[$kataIndonesia];
        } else {
            return "Kata tidak ditemukan dalam kamus.";
        }
    }
}
