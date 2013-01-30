<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPCc;

use PHPExiftool\Driver\AbstractTag;

class DeprecatedOn extends AbstractTag
{

    protected $Id = 'deprecatedOn';

    protected $Name = 'DeprecatedOn';

    protected $FullName = 'XMP::cc';

    protected $GroupName = 'XMP-cc';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-cc';

    protected $g2 = 'Author';

    protected $Type = 'date';

    protected $Writable = true;

    protected $Description = 'Deprecated On';

    protected $local_g2 = 'Time';

}