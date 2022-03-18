<?php

namespace App\Command;

use App\Entity\MtgSupertype;
use App\Repository\MtgSupertypeRepository;
use mtgsdk\Supertype;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:apiMTG:supertype:retrieve',
    description: 'Add a short description for your command',
)]
class ApiMTGSupertypeRetrieveCommand extends Command
{
    protected function configure(): void
    {
    }

    public function __construct(
        private MtgSupertypeRepository $mtgSupertypeRepository
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->comment("Command START");

        $supertypeInBDD =  $this->mtgSupertypeRepository->customFieldFindAll("name");
        foreach (Supertype::all() as $key => $supertype) {
            if (!in_array($supertype , $supertypeInBDD)) {
                $supertypeNew = new MtgSupertype();
                $supertypeNew->setName($supertype);
                $this->mtgSupertypeRepository->add($supertypeNew);
            }
        }

        $io->comment("Command END");
        return Command::SUCCESS;
    }
}
