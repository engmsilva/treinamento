<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function index(){

        $noticia1 = [
            0 => 'Gilmar Mendes acumula maioria das ações contra posse de Lula no STF',
            1 => '17/03/2015',
            2 => 'Estadão',
            3 => 'O Supremo Tribunal Federal (STF) está sendo inundado nesta quinta-feira (17), por ações contra a posse do ex-presidente Luiz Inácio Lula da Silva como chefe da Casa Civil. ',
            4 => 'São, até agora, dez processos, seis dos quais estão sob a relatoria do ministro Gilmar Mendes - considerado o mais crítico ao governo na Suprema Corte.

Mendes acumula dois mandados de segurança, um ajuizado pelo PPS e outro por um advogado do Distrito Federal. Estão nas mãos dele também outras quatro petições de populares que pedem a anulação do decreto da presidente Dilma Rousseff nomeando Lula como ministro.

Nesta quarta-feira (16), Mendes fez uma série de críticas ao governo e à ida do ex-presidente para a chefia da Casa Civil.',
            5 => 'Ele afirmou que a nomeação é "uma bizarrice que nos enche de vergonha" e uma "desfaçatez", e que a posse é uma manobra para que Lula fuja da investigação no âmbito da Lava Jato que corre em Curitiba (PR), sob a condução do juiz Sérgio Moro.',
            6 => 'Além das ações com Mendes, há duas arguições de descumprimento de preceito fundamental (ADPF) com o ministro Teori Zavascki, relator da Lava Jato no Supremo. Um deles foi proposto pelo PSB, e o segundo pelo PSDB.

O décimo processo, uma ação cautelar ajuizada por um advogado de Santa Catarina, ficou com o ministro Marco Aurélio Mello. A ação foi a primeira a ser protocolada, ainda ontem, e teve o seguimento negado pelo ministro nesta tarde.',
        ];

        $noticia2 = [
            0 => 'TRF-1 derruba liminar, mas Lula continua suspenso da Casa Civil',
            1 => '17/03/2016',
            2 => 'G1',
            3 => 'Ex-presidente também teve nomeação questionada na Justiça do Rio.
                  Governo pediu ao Supremo suspensão de todas as ações contra Lula.',
            4 => 'O presidente do Tribunal Regional Federal da 1ª Região (TRF-1), Cândido Ribeiro, derrubou nesta quinta-feira (17) uma decisão liminar (provisória) da 4ª Vara do Distrito Federal que suspendeu a nomeaçao do ex-presidente Luiz Inácio Lula da Silva na chefia da Casa Civil.
A nova decisão, no entanto, ainda não permite a Lula, que tomou posse nesta quinta, exercer as funções do cargo, porque há outra decisão, da 6ª Vara da Justiça Federal no Rio de Janeiro, também suspendendo Lula do cargo. As duas decisões de primeira instância tem a mesma eficácia.',
            5 => 'Nesta quinta, a Advocacia Geral da União (AGU), que faz a defesa do governo na Justiça, pediu ao Supremo Tribunal Federal (STF) a suspensão de todas as ações que tramitam no país contra a nomeação do ex-presidente Luiz Inácio Lula da Silva na Casa Civil.',
            6 => 'O pedido da AGU lista outras 23 ações já protocoladas na Justiça Federal.
O pedido, assinado pelo ministro José Eduardo Cardozo, busca suspender não só a decisão da 4ª Vara do Distrito Federal, que suspendeu a nomeação do petista na manhã desta quinta, como eventuais novas decisões contra a permanência de Lula no governo.',
        ];

        $noticias = [
            0 => $noticia1,
            1 => $noticia2,
        ];
    return view('blog.lista-post', compact('noticias'));
}

    public function contato(){
        return view('blog.contato');
    }
}
