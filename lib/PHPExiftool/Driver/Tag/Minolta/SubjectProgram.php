<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class SubjectProgram extends \PHPExiftool\Driver\Tag
{

    protected $Id = 34;

    protected $Name = 'SubjectProgram';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Subject Program';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Portrait',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Text',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Night portrait',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Sunset',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Sports action',
        ),
    );

}