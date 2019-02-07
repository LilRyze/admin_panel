<?php

namespace AdminPanel\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use AdminPanel\Scraping;

class GuzzleController extends Controller
{
    public function testing() {
        $httpClient = new Client([
            'base_uri' => 'https://www.otpusk.com/'
        ]);
        $response = $httpClient->request('GET');
        $html = ''.$response->getBody();
        $crawler = new Crawler($html);
        $crawler->filter('div.tour')->each(function(Crawler $node) {
            $name = $node->filter('div:nth-child(2) > div:nth-child(1) > div:nth-child(1)')->text();
            try {
                $country_city = $node->filter('div:nth-child(2) >div:nth-child(1) > div:nth-child(1) > span:nth-child(3)')->text();
            } catch (\Exception $e) {
                $country_city = '';
            }
            $price =  $node->filter('.hottour-price')->text();
            $includes = $node->filter('div:nth-child(2) > div:nth-child(2) > div:nth-child(1)')->text();
            $days = $node->filter('div:nth-child(2) > div:nth-child(2) > div:nth-child(2) > span:nth-child(1)')->text();
            $image = $node->filter('.hottour-img')->attr('src');
            try {
                Scraping::create([
                    'name' => trim($name),
                    'country_city' => $country_city,
                    'price' => $price,
                    'includes' => substr($includes, 2),
                    'days' => trim($days),
                    'image' => $image
                ]);
                return 'You did it';
            } catch (\Exception $e) {
                echo $e;
            }
        });
    }
}
