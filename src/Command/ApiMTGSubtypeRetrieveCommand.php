<?php

namespace App\Command;

use App\Entity\MtgSubtype;
use App\Repository\MtgSubtypeRepository;
use mtgsdk\Subtype;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:apiMTG:subtype:retrieve',
    description: 'Add a short description for your command',
)]
class ApiMTGSubtypeRetrieveCommand extends Command
{
    protected function configure(): void
    {
    }

    public function __construct(
        private MtgSubtypeRepository $mtgSubtypeRepository
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->comment("Command START");

        $subtypeInBDD =  $this->mtgSubtypeRepository->customFieldFindAll("name");
        foreach (subtype::all() as $key => $subtype) {
            if (!in_array($subtype , $subtypeInBDD)) {
                $subtypeNew = new Mtgsubtype();
                $subtypeNew->setName($subtype);
                $this->mtgSubtypeRepository->add($subtypeNew);
            }
        }

        $io->comment("Command END");

        return Command::SUCCESS;
    }
}
