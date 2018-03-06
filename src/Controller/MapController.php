<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MapController extends Controller
{
    public function index(): Response
    {
        return $this->render('map/index.html.twig');
    }

    public function city(string $citySlug): Response
    {
        $geoJsonUrl = sprintf('https://raw.githubusercontent.com/maltehuebner/fahrverbote/master/map.geojson');

        return $this->render('map/city.html.twig', [
            'geoJsonUrl' => $geoJsonUrl,
        ]);
    }
}
