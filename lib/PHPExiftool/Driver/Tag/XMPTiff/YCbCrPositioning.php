<?php

namespace PHPExiftool\Driver\Tag\XMPTiff;

class YCbCrPositioning extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'YCbCrPositioning';

    protected $Name = 'YCbCrPositioning';

    protected $FullName = 'XMP::tiff';

    protected $GroupName = 'XMP-tiff';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-tiff';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Y Cb Cr Positioning';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Centered',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Co-sited',
        ),
    );

}