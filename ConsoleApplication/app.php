<?php
$loader = include __DIR__.'/vendor/autoload.php';
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

$app = new Application;
$app
    ->register('hello')
    ->setDefinition(array(
        new InputArgument('nome',InputArgument::REQUIRED,'Nome de usuário.')
    ))
    ->setDescription('Função que mostra um Hello Wordl para um usuário.')
    ->setHelp('
        O comando <info>hello</info> exige o argumento <info>nome</info>.
        Exemplos:
        <comment>php app.php hello Lukas</comment>
    ')
    ->setCode(function (InputInterface $input, OutputInterface $output){
        $nome = $input->getArgument('nome');
        $output->writeln('Hello '.$nome.'.');
    });
$app->run();
?>
