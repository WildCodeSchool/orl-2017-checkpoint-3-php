<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('SubjectBundle:Default:index.html.twig');
    }

    /**
     * @Route("/algo", name="algo")
     */
    public function algoAction()
    {
        return $this->render('SubjectBundle:Default:algo.html.twig');
    }

    /**
     * @Route("/sf3", name="sf3")
     */
    public function sf3Action()
    {
        return $this->render('SubjectBundle:Default:sf3.html.twig');
    }

    /**
     * @Route("/fixtures", name="fixtures")
     */
    public function fixtureAction() {
        $key = '304b6a443dfb';
        for ($i=1; $i<20;$i++) {
            $url = 'http://api.betaseries.com/shows/display?id=' . $i . '&key=' . $key;
//            echo $url;
            $curl_handle=curl_init();
            curl_setopt($curl_handle, CURLOPT_URL,$url);
            curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
            $json = curl_exec($curl_handle);
            curl_close($curl_handle);
//            var_dump($json);
                $data = json_decode($json);
                if (isset ($data->show )) {
                    $title = addslashes($data->show->title);
                    $tvshow[$title] = [
                        'date'      => $data->show->creation,
                        'image_url' => $data->show->images->show,
                        'genres'    => implode(',', $data->show->genres),
                    ];
                    $episode_url = 'https://api.betaseries.com/shows/episodes?id='.$data->show->id.'&key=' . $key;
                    $curl_handle=curl_init();
                    curl_setopt($curl_handle, CURLOPT_URL,$episode_url);
                    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
                    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
                    $json_epi = curl_exec($curl_handle);
                    curl_close($curl_handle);
                    $data_epi = json_decode($json_epi);
                    $episodes = $data_epi->episodes;
                    $j=0;
                    foreach ($episodes as $episode) {
                        if ($j<20) {
                            $tvshow[$title]['episodes'][] = [
                                'title'  => addslashes($episode->title),
                                'season' => $episode->season,
                                'number' => $episode->episode,
                                'note'   => round($episode->note->mean),
                            ];
                        }
                        $j++;

                    }


                }

        }
        
        $text = '';
        foreach ($tvshow as $title=>$show) {
            $text .= '$tvshows[\'' . $title . '\'] = [
                \'date\'      => \''.$data->show->creation.'\',
                \'image_url\' => \''.$data->show->images->show.'\',
                \'genres\'    => \''. $data->show->genres[0].'\',
                \'episodes\' => ['."\n";
                foreach ($show['episodes'] as $key=>$episode) {
                    $text.= $key.'=> [\'title\'=>\'' . $episode['title']. '\', \'season\'=>' . $episode['season']. ',\'number\'=>' . $episode['number']. ',\'note\'=>' . $episode['note']. '],'."\n";
                }
                $text.=']
            ];'."\n";

        }
        return new \Symfony\Component\HttpFoundation\Response($text);
    }
}
