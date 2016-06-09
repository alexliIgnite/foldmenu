<?php

namespace app\toolBundle\Controller;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class contentController extends Controller
{
    public function crawlSiteAction($url = null, $depth =1)
    {
        $url='http://www.wenxuecity.com/news/2015/07/30/4451493.html';
        $dom = new \DOMDocument();
        @$dom->loadHTMLFile($url);
        $crawler = new Crawler($dom);
      	$nodeValues = $crawler->filter('div')->each(function (Crawler $node, $i) {
      		if($node->attr('id')=='articleContent')
    		return $node->html();
		});
      	//print_r($nodeValues);
    	return $this->render('apptoolBundle:Default:index.html.twig' , array('nodeValues'=>$nodeValues));
    }
}
