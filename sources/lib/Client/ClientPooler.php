<?php
/*
 * This file is part of the Pomm's Foundation package.
 *
 * (c) 2014 - 2017 Grégoire HUBERT <hubert.greg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PommProject\Foundation\Client;

/**
 * ClientPooler
 *
 * @package   Foundation
 * @copyright 2014 - 2017 Grégoire HUBERT
 * @author    Grégoire HUBERT
 * @license   X11 {@link http://opensource.org/licenses/mit-license.php}
 * @see       ClientPoolerInterface
 * @see       ClientPoolerTrait
 */
abstract class ClientPooler implements ClientPoolerInterface
{
    use ClientPoolerTrait;
}
