<?php

class Motor
{
    public
        $nama,
        $rental_duration,
        $price_list =
        [
            "Scooter" => [
                "harga" => 70_000
            ],

            "Pespa" => [
                "harga" => 100_000
            ],

            "Vario Merah" => [
                "harga" => 50_000
            ],

            "RX King" => [
                "harga" => 200_000
            ]
        ],

        $rental_price,
        $motor,
        $nama_member = ['Banyu', 'Farrel', 'Irghi', 'Julian'],
        $diskon = 0,
        $pajak = 10_000;


    public function __construct($nama, $rental_duration, $motor)
    {
        $this->nama = $nama;
        $this->rental_duration = $rental_duration;
        $this->motor = $motor;
        $this->rental_price = $this->price_list[$this->motor]["harga"];
    }

    public function isMember()
    {
        if (in_array($this->nama, $this->nama_member)) {
            $this->diskon = 5;
            return true;
        }
    }

    public function calculate()
    {
        return ($this->rental_price * $this->rental_duration + $this->pajak) - ($this->diskon / 100 * ($this->rental_price * $this->rental_duration + $this->pajak));
    }

    public function print()
    {
        if ($this->isMember() == true) {
            echo "<b>$this->nama</b> berstatus sebagai Member mendapatkan diskon sebesar <b>$this->diskon%</b>";
        } else {
            echo "<b>$this->nama</b> tidak berstatus sebagai Member";
        }

        echo "<br> Jenis motor yang dirental adalah <b>$this->motor</b> selama <b>$this->rental_duration hari</b>";
        echo "<br> Harga rental per-harinya : <b>" . number_format($this->rental_price, 0, '', ',') . "</b>";
        echo "<br> Total harga yang harus dibayar adalah : <b>" . number_format($this->calculate(), 0, '', ',') . "</b>";
    }
}