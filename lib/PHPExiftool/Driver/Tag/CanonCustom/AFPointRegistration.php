<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AFPointRegistration extends \PHPExiftool\Driver\Tag
{

    protected $Id = 7;

    protected $Name = 'AFPointRegistration';

    protected $FullName = 'CanonCustom::Functions10D';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AF Point Registration';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Center',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Bottom',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Right',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Extreme Right',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Automatic',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Extreme Left',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Left',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Top',
        ),
    );

}