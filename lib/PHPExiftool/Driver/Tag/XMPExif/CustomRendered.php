<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class CustomRendered extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'CustomRendered';

    protected $Name = 'CustomRendered';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Custom Rendered';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Custom',
        ),
    );

}