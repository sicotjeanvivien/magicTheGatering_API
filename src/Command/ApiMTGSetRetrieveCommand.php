<?php

namespace App\Command;

use App\Entity\MtgSet;
use App\Repository\MtgSetRepository;
use Doctrine\ORM\EntityManagerInterface;
use mtgsdk\Set;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:apiMTG:set:retrieve',
    description: 'Add a short description for your command',
)]
class ApiMTGSetRetrieveCommand extends Command
{
    protected function configure(): void
    {
    }

    public function __construct(
        private MtgSetRepository $mtgSetRepository
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->comment("Command START");
        
        $setInBDD =  $this->mtgSetRepository->customFieldFindAll("name");
        foreach (Set::all() as $key => $set) {
            if (!in_array($set , $setInBDD)) {
                $setNew = new MtgSet();
                $setNew
                    ->setCode($set->code)
                    ->setName($set->name)
                    ->setReleaseDate(new \DateTime($set->releaseDate))
                    ->setOnlineOnly($set->onlineOnly);
                $this->mtgSetRepository->add($setNew);
            }
        }

        $io->comment("Command END");
        return Command::SUCCESS;
    }
}
