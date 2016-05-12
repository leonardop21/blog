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
        $posts = [
            [
                'title' => '10 motivos para treinar Muay Thai',
                'content' => 'Muay Thai, muito mais do que socos, chutes, cotoveladas e joelhadas, o boxe Tailandês é uma arte marcial que traz aos seus praticantes muitos benefícios físicos, como; maior flexibilidade, definição muscular, resistência. As aulas são animadas por uma mistura de corrida, alongamento e exercícios localizados – flexões de braços, abdominais e agachamentos. Em uma hora é possível eliminar até mil calorias.',
                'photo' => 'http://i0.wp.com/conexaocorbelia.com/cnx-crbx/uploads/2015/05/Muay-Thai.jpg',
                'link' => 'http://conexaocorbelia.com/05/2015/10-motivos-para-treinar-muay-thai/'
            ],
            [
                'title' => 'Nova rede social paga por conteúdo gerado e tempo gasto pelo usuário',
                'content' => 'A nova rede social, se tornou sucesso mundial e vem preocupando grandes empresas. Atualmente, Facebook, Twitter, Tumblr e outras redes sociais movem bilhões de dólares com anúncios por ano e...',
                'photo' => 'http://i1.wp.com/conexaocorbelia.com/cnx-crbx/uploads/2015/11/tsu.png',
                'link' => 'http://conexaocorbelia.com/11/2015/tsu/'
            ],

            [
                'title' => 'Vídeo de policiais auxiliando idosa viraliza na web',
                'content' => 'Infelizmente a grande mídia fez de conta que não viu o ocorrido...',
                'photo' => 'http://16bpm.com.br/site/uploads/photos/217.jpg',
                'link' => 'http://conexaocorbelia.com/02/2016/video-de-policiais-auxiliando-idosa-viraliza-na-web'
            ],

            [
            'title' => 'Lei obriga pet shops do Paraná a filmar serviços de banho e tosa',

            'content'=> 'Após dois anos para se adaptarem, os pet shops paranaenses agora são obrigados por lei estadual a gravarem os serviços de tosa e banho de cães e gatos...',

            'photo' => 'http://i2.wp.com/conexaocorbelia.com/cnx-crbx/uploads/2016/01/caogato.jpg',

            'link' => 'http://conexaocorbelia.com/01/2016/lei-obriga-pet-shops-do-parana-a-filmar-servicos-de-banho-e-tosa/'
            ]

        ];

       return view('blog.index', compact('posts'));
   }
}
