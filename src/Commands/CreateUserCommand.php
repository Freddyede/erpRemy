<?php

namespace App\Commands;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'database:count-user',
    description: 'Retournes tous les utilisateurs renseigner en base de données',
    aliases: ['database:count'],
    hidden: false
)]
/**
 * Test pull request
 * Terminal run:
 * <br>
 *  - command with : `symfony console database:count-user
 * <br>
 *  - alias command with : `symfony console database:count`
 * <br>
 * @todo CreateUserCommand doit retourner tous les utilisateurs renseigner en base de données
 * @author Remy Yang<remy.yang42150@gmail.com>
 */
class CreateUserCommand extends Command
{
    private EntityManagerInterface $manager;
    public function __construct(EntityManagerInterface $manager, string $name = null)
    {
        $this->manager = $manager;
        parent::__construct($name);
    }
    protected function configure(): void
    {
        $this->setHelp("");
    }
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('<success>Nb users : ' . count($this->manager->getRepository(User::class)->findAll()) . '</success>');
        return Command::SUCCESS;
    }
}