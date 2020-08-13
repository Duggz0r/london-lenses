<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index() {
        $navigationLinks = $this->navigationLinks();

        $basket = $this->getBasket();

        $basketCount = 0;

        if($basket) {
            foreach($basket as $key => $qty) {
                $basketCount = $basketCount + $qty['qty'];
            }
        }

        return view('welcome', compact('navigationLinks', 'basketCount'));
    }

    public function getBasket() {
        $basket = [
            'Dailies Total 1' => [
                'qty' => 2,
            ],
            'Dailies Aqua Comfort Plus' => [
                'qty' => 1,
            ],
        ];

        return $basket;
    }

    public function navigationLinks() {
        // This function would fetch and return the navigation links from the database,
        // meaning no code change required when adding/amending
        
        // Dummy data used for now 

        $navigationLinks = [
            'contact-lenses' => [
                'name' => 'Contact Lenses',
                'route' => 'contact-lenses',
            ],
            'solutions-lens-care' => [
                'name' => 'Solutions & Lens Care',
                'route' => 'solutions-lens-care',
            ],
            'eye-health' => [
                'name' => 'Eye Health',
                'route' => 'eye-health',
            ],
            'about-us' => [
                'name' => 'About Us',
                'route' => 'about-us',
            ],
            'contact-lens-quiz' => [
                'name' => 'Take The Contact Lense Quiz',
                'route' => 'contact-lens-quiz',
            ],
        ];

        return $navigationLinks;
    }
}