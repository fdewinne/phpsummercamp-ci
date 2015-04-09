<?php

use Idephix\Idephix;
use Idephix\Extension\Deploy\Deploy;
use Idephix\Extension\PHPUnit\PHPUnit;

$localBaseDir = __DIR__;
$sshParams = array(
    'user' => 'myuser',
);

$targets = array(
    'prod' => array(
        'hosts' => array('127.0.0.1'),
        'ssh_params' => $sshParams,
        'deploy' => array(
            'local_base_dir' => $localBaseDir,
            'remote_base_dir' => "/var/www/myfantasticserver/",
            // 'rsync_exclude_file' => 'rsync_exclude.txt'
            // 'rsync_include_file' => 'rsync_include.txt'
            // 'migrations' => true
            // 'strategy' => 'Copy'
        ),
    ),
);

$idx = new Idephix($targets);

/**
 * build del progetto
 */
$idx->add('build', function() use ($idx) {
    $idx->local('ls -la');
});

$idx->addLibrary('deploy', new Deploy());
$idx->addLibrary('phpunit', new PHPUnit());

$idx->run();