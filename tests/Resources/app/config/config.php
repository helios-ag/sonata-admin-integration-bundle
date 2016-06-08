<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2016 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$loader->import(CMF_TEST_CONFIG_DIR.'/default.php');
$loader->import(__DIR__.'/cmf_sonata_admin.yml');
$loader->import(CMF_TEST_CONFIG_DIR.'/sonata_admin.php'); // todo: move that file into that bundle
