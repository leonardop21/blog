<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	$titles = array(
    		1=> '10 motivos para treinar Muay Thai',
    		2=> 'Nova rede social paga por conteúdo gerado e tempo gasto pelo usuário',
    		3=> 'Vídeo de policiais auxiliando idosa viraliza na web'
    		);

    	$resultTitles = array_unique($titles);

    	$contents = array(
    		1=>'Muay Thai, muito mais do que socos, chutes, cotoveladas e joelhadas, o boxe Tailandês é uma arte marcial que traz aos seus praticantes muitos benefícios físicos, como; maior flexibilidade, definição muscular, resistência. As aulas são animadas por uma mistura de corrida, alongamento e exercícios localizados – flexões de braços, abdominais e agachamentos. Em uma hora é possível eliminar até mil calorias.',
    		2=>'A nova rede social, se tornou sucesso mundial e vem preocupando grandes empresas. Atualmente, Facebook, Twitter, Tumblr e outras redes sociais movem bilhões de dólares com anúncios por ano e...',
    		3=>'Infelizmente a grande mídia fez de conta que não viu o ocorrido.',
    		);

    		$resultContents = array_unique($contents);

    		$img = array(
    			1=>'http://i0.wp.com/conexaocorbelia.com/cnx-crbx/uploads/2015/05/Muay-Thai.jpg',
    			2=>'http://i1.wp.com/conexaocorbelia.com/cnx-crbx/uploads/2015/11/tsu.png',
    			3=>'http://i2.wp.com/conexaocorbelia.com/cnx-crbx/uploads/2016/02/pmpr.jpg',

    			);
    		$imagens = array_unique($img);

    		$links = array(
    			1=>'http://conexaocorbelia.com/05/2015/10-motivos-para-treinar-muay-thai/',
    			2=>'http://conexaocorbelia.com/11/2015/tsu/',
    			3=>'http://conexaocorbelia.com/02/2016/video-de-policiais-auxiliando-idosa-viraliza-na-web/'
    			);
    		$verificalink = array_unique($links);

       return view('blog.index', compact('resultTitles', 'resultContents', 'imagens','verificalink'));
    }

}
