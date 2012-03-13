<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class FlashMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 135;

    protected $Name = 'FlashMode';

    protected $FullName = 'Nikon::Main';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Flash Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Did Not Fire',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Fired, Manual',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Not Ready',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Fired, External',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Fired, Commander Mode',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Fired, TTL Mode',
        ),
    );

}