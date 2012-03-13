<?php

namespace PHPExiftool\Driver\Tag\XMPPlus;

class ImageAlterationConstraints extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ImageAlterationConstraints';

    protected $Name = 'ImageAlterationConstraints';

    protected $FullName = 'XMP::plus';

    protected $GroupName = 'XMP-plus';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-plus';

    protected $g2 = 'Author';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Image Alteration Constraints';

    protected $flag_List = true;

    protected $flag_Bag = true;

    protected $Values = array(
        'AL-CLR' => array(
            'Id' => 'AL-CLR',
            'Label' => 'No Colorization',
        ),
        'AL-CRP' => array(
            'Id' => 'AL-CRP',
            'Label' => 'No Cropping',
        ),
        'AL-DCL' => array(
            'Id' => 'AL-DCL',
            'Label' => 'No De-Colorization',
        ),
        'AL-FLP' => array(
            'Id' => 'AL-FLP',
            'Label' => 'No Flipping',
        ),
        'AL-MRG' => array(
            'Id' => 'AL-MRG',
            'Label' => 'No Merging',
        ),
        'AL-RET' => array(
            'Id' => 'AL-RET',
            'Label' => 'No Retouching',
        ),
    );

}