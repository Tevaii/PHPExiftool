<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class HDR extends AbstractTag
{

    protected $Id = 133;

    protected $Name = 'HDR';

    protected $FullName = 'Pentax::Main';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'HDR';

    protected $flag_Permanent = true;

    protected $MaxLength = 4;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'HDR Auto',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'HDR 1',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'HDR 2',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'HDR 3',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'HDR Advanced',
        ),
    );

}
