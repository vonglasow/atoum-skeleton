<?php
use mageekguy\atoum;

define('CODE_COVERAGE_ROOT', __DIR__ . DIRECTORY_SEPARATOR . 'tests/coverage');

$report = $script->addDefaultReport();

if (!file_exists(CODE_COVERAGE_ROOT) && !@mkdir(CODE_COVERAGE_ROOT)) {
    die('Unable to create directory "' . CODE_COVERAGE_ROOT . '".');
}

$coverageField = new atoum\report\fields\runner\coverage\html(
    basename(__DIR__),
    CODE_COVERAGE_ROOT
);

$coverageField->setRootUrl('file://' . CODE_COVERAGE_ROOT . 'index.html');

$report->addField($coverageField);

$script->noCodeCoverageForNamespaces('atoum');

$runner->addTestsFromDirectory(__DIR__ . '/tests');

$runner->setBootstrapFile(__DIR__ . '/.bootstrap.php');

require __DIR__ . '/source/Skeleton/xunit.php';
$report = new skeleton\xunit;
$report->addWriter(new atoum\writers\file('./xunit.xml'));
$runner->addReport($report);

require __DIR__ . '/source/Skeleton/clover.php';
$report = new skeleton\clover;
$report->addWriter(new atoum\writers\file('./clover.xml'));
$runner->addReport($report);

