<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo view("about_page");
    }

    public function products()
    {
        echo view("product_page");
    }

    public function drivers()
    {
        echo view("drivers_page");
    }

    public function technologies()
    {
        echo view("technologies_page");
    }

    public function contact()
    {
        echo view("contact_page");
    }
}
