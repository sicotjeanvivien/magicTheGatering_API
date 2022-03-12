<?php

namespace App\Command;

use App\Entity\MtgSet;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use mtgsdk\Card;
use mtgsdk\Set;

#[AsCommand(
    name: 'app:officialApi:retrieve',
    description: 'Add a short description for your command',
)]
class OfficialApiRetrieveCommand extends Command
{

    public function __construct(
        private EntityManagerInterface $em
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->comment("Command START");

        // $card = Card::find(386616);

        // $sets = ;

        foreach (Set::all() as $key => $set) {
            $mtgSet =  new MtgSet();
            $mtgSet
                ->setCode($set->code)
                ->setName($set->name)
                ->setReleaseDate(new DateTime($set->releaseDate))
                ->setOnlineOnly(false);
            dump($set);
            $this->em->persist($mtgSet);
        }
        $this->em->flush();



        $io->comment("Command END");
        return Command::SUCCESS;
    }
}
