<?php

class About extends Controllers
{
    public function index($nama = "firdaus", $pekerjaan = "IT")
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About';
        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/footer");
    }
    public function Page()
    {
        $data['judul'] = 'Page';
        $this->view("templates/header", $data);
        $this->view("about/page");
        $this->view("templates/footer");
    }
}
