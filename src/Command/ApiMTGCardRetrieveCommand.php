<?php

namespace App\Command;

use mtgsdk\Card;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:apiMTG:card:retrieve',
    description: 'Add a short description for your command',
)]
class ApiMTGCardRetrieveCommand extends Command
{
    protected function configure(): void
    {
    }

    public function __construct(

    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
       $io->comment("Command START");

        // $cardInBDD =  $this->mtgTypeRepository->customFieldFindAll("name");
        dump(Card::find(386616));

        $io->success("Command END");

        return Command::SUCCESS;
    }
}

/*
[
    "name" => "Narset, Enlightened Master"
    "manaCost" => "{3}{U}{R}{W}"
    "cmc" => 6.0
    "colors" => array:3 [
      0 => "Red"
      1 => "Blue"
      2 => "White"
    ]
    "colorIdentity" => array:3 [
      0 => "R"
      1 => "U"
      2 => "W"
    ]
    "type" => "Legendary Creature — Human Monk"
    "supertypes" => array:1 [
      0 => "Legendary"
    ]
    "types" => array:1 [
      0 => "Creature"
    ]
    "subtypes" => array:2 [
      0 => "Human"
      1 => "Monk"
    ]
    "rarity" => "Mythic"
    "set" => "KTK"
    "setName" => "Khans of Tarkir"
    "text" => """
      First strike, hexproof\n
      Whenever Narset, Enlightened Master attacks, exile the top four cards of your library. Until end of turn, you may cast noncreature spells from among those cards without paying their mana costs.
      """
    "artist" => "Magali Villeneuve"
    "number" => "190"
    "power" => "3"
    "toughness" => "2"
    "layout" => "normal"
    "multiverseid" => "386616"
    "imageUrl" => "http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=386616&type=card"
    "watermark" => "jeskai"
    "rulings" => array:5 [
      0 => array:2 [
        "date" => "2014-09-20"
        "text" => "The cards are exiled face up. Casting the noncreature cards exiled this way follows the normal rules for casting those cards. You must follow all applicable timing rules. For example, if one of the exiled cards is a sorcery card, you can cast it only during your main phase while the stack is empty."
      ]
      1 => array:2 [
        "date" => "2014-09-20"
        "text" => "You can’t play any land cards exiled with Narset."
      ]
      2 => array:2 [
        "date" => "2014-09-20"
        "text" => "Because you’re already casting the card using an alternative cost (by casting it without paying its mana cost), you can’t pay any other alternative costs for the card, including casting it face down using the morph ability. You can pay additional costs, such as kicker costs. If the card has any mandatory additional costs, you must pay those."
      ]
      3 => array:2 [
        "date" => "2014-09-20"
        "text" => "If the card has {X} in its mana cost, you must choose 0 as the value for X when casting it."
      ]
      4 => array:2 [
        "date" => "2014-09-20"
        "text" => "Any exiled cards you don’t cast remain in exile."
      ]
    ]
    "foreignNames" => array:10 [
      0 => array:7 [
        "name" => "Narset, Erleuchtete Meisterin"
        "text" => """
          Erstschlag, Fluchsicher\n
          Immer wenn Narset, Erleuchtete Meisterin, angreift, schicke die obersten vier Karten deiner Bibliothek ins Exil. Bis zum Ende des Zuges kannst du Nichtkreatur-Karten wirken, die mit Narset in diesem Zug ins Exil geschickt wurden, ohne ihre Manakosten zu bezahlen.
          """
        "type" => "Legendäre Kreatur — Mensch, Mönch"
        "flavor" => null
        "imageUrl" => "http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=387423&type=card"
        "language" => "German"
        "multiverseid" => 387423
      ]
      1 => array:7 [
        "name" => "Narset, maestra iluminada"
        "text" => """
          Daña primero, antimaleficio.\n
          Siempre que Narset, maestra iluminada ataque, exilia las cuatro primeras cartas de tu biblioteca. Hasta el final del turno, puedes lanzar cartas que no sean de criatura exiliadas con Narset este turno sin pagar sus costes de maná.
          """
        "type" => "Criatura legendaria — Monje humano"
        "flavor" => null
        "imageUrl" => "http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=389306&type=card"
        "language" => "Spanish"
        "multiverseid" => 389306
      ]
      2 => array:7 [
        "name" => "Narset, maîtresse éclairée"
        "text" => """
          Initiative, défense talismanique\n
          À chaque fois que Narset, maîtresse éclairée attaque, exilez les quatre cartes du dessus de votre bibliothèque. Jusqu'à la fin du tour, vous pouvez lancez les cartes non-créature exilées par Narset ce tour-ci sans payer leur coût de mana.
          """
        "type" => "Créature légendaire : humain et moine"
        "flavor" => null
        "imageUrl" => "http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=387692&type=card"
        "language" => "French"
        "multiverseid" => 387692
      ]
      3 => array:7 [
        "name" => "Narset, Maestra Illuminata"
        "text" => """
          Attacco improvviso, anti-malocchio\n
          Ogniqualvolta Narset, Maestra Illuminata attacca, esilia le prime quattro carte del tuo grimorio. Fino alla fine del turno, puoi lanciare carte non creatura esiliate con Narset in questo turno senza pagare il loro costo di mana.
          """
        "type" => "Creatura Leggendaria — Monaco Umano"
        "flavor" => null
        "imageUrl" => "http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=387961&type=card"
        "language" => "Italian"
        "multiverseid" => 387961
      ]
      4 => array:7 [
        "name" => "悟った達人、ナーセット"
        "text" => """
          先制攻撃、呪禁\n
          悟った達人、ナーセットが攻撃するたび、あなたのライブラリーの一番上から４枚のカードを追放する。ターン終了時まで、あなたはこのターンに悟った達人、ナーセットにより追放された、クリーチャーでないカードをそれのマナ・コストを支払うことなく唱えてもよい。
          """
        "type" => "伝説のクリーチャー — 人間・モンク"
        "flavor" => null
        "imageUrl" => "http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=388230&type=card"
        "language" => "Japanese"
        "multiverseid" => 388230
      ]
      5 => array:7 [
        "name" => "깨달음을 얻은 대가 나르셋"
        "text" => """
          선제공격, 방호\n
          깨달음을 얻은 대가 나르셋이 공격할 때마다, 당신의 서고 맨 위의 카드 네 장을 추방한다. 당신은 턴종료까지 나르셋이 이 턴에 추방한 카드 중 생물이 아닌 카드를 마나 비용을 지불하지 않고 발동할 수 있 다.
          """
        "type" => "전설적 생물 — 인간 승려"
        "flavor" => null
        "imageUrl" => "http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=388499&type=card"
        "language" => "Korean"
        "multiverseid" => 388499
      ]
      6 => array:7 [
        "name" => "Narset, Mestra Iluminada"
        "text" => """
          Iniciativa, resistência a magia\n
          Toda vez que Narset, Mestra Iluminada, atacar, exile os quatro cards do topo do seu grimório. Até o final do turno, você pode conjurar os cards que não sejam de criatura exilados por Narset neste turno sem pagar seus custos de mana.
          """
        "type" => "Criatura Lendária — Humano Monge"
        "flavor" => null
        "imageUrl" => "http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=388768&type=card"
        "language" => "Portuguese (Brazil)"
        "multiverseid" => 388768
      ]
      7 => array:7 [
        "name" => "Нарсет, Просветленная Наставница"
        "text" => """
          Первый удар, Порчеустойчивость\n
          Каждый раз, когда Нарсет, Просветленная Наставница атакует, изгоните четыре верхние карты вашей библиотеки. До конца хода вы можете разыгрывать не являющиеся существами или землями карты, изгнанные Нарсет в этом ходу, без уплаты их мана-стоимости.
          """
        "type" => "Легендарное Существо — Человек Монах"
        "flavor" => null
        "imageUrl" => "http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=389037&type=card"
        "language" => "Russian"
        "multiverseid" => 389037
      ]
      8 => array:7 [
        "name" => "悟道大师娜尔施"
        "text" => """
          先攻，辟邪\n
          每当悟道大师娜尔施攻击时，放逐你牌库顶的四张牌。直到回合结束，你可以施放本回合中以娜尔施放逐的非生物牌，且不需支付其法术力费用。
          """
        "type" => "传奇生物～人类／修行僧"
        "flavor" => null
        "imageUrl" => "http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=386885&type=card"
        "language" => "Chinese Simplified"
        "multiverseid" => 386885
      ]
      9 => array:7 [
        "name" => "悟道大師娜爾施"
        "text" => """
          先攻，辟邪\n
          每當悟道大師娜爾施攻擊時，放逐你牌庫頂的四張牌。直到回合結束，你可以施放本回合中以娜爾施放逐的非生物牌，且不需支付其魔法力費用。
          """
        "type" => "傳奇生物～人類／修行僧"
        "flavor" => null
        "imageUrl" => "http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=387154&type=card"
        "language" => "Chinese Traditional"
        "multiverseid" => 387154
      ]
    ]
    "printings" => array:3 [
      0 => "KTK"
      1 => "PKTK"
      2 => "SLD"
    ]
    "originalText" => """
      First strike, hexproof\n
      Whenever Narset, Enlightened Master attacks, exile the top four cards of your library. Until end of turn, you may cast noncreature cards exiled with Narset this turn without paying their mana costs.
      """
    "originalType" => "Legendary Creature — Human Monk"
    "legalities" => array:7 [
      0 => array:2 [
        "format" => "Commander"
        "legality" => "Legal"
      ]
      1 => array:2 [
        "format" => "Duel"
        "legality" => "Legal"
      ]
      2 => array:2 [
        "format" => "Legacy"
        "legality" => "Legal"
      ]
      3 => array:2 [
        "format" => "Modern"
        "legality" => "Legal"
      ]
      4 => array:2 [
        "format" => "Penny"
        "legality" => "Legal"
      ]
      5 => array:2 [
        "format" => "Pioneer"
        "legality" => "Legal"
      ]
      6 => array:2 [
        "format" => "Vintage"
        "legality" => "Legal"
      ]
    ]
    "id" => "15e45fe0-92ea-52dc-8665-7105ac30db70"
  ]

*/