<?php declare(strict_types=1);
namespace App;

use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class FooCommand extends Command
{
    /** @var LoggerInterface */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;

        parent::__construct('foo');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->logger->warn('TEST SENTRY 2', ['foo' => 'bar']);

        $output->writeln('test done');
    }
}
