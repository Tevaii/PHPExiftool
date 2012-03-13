<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class MultiExposureShots extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'MultiExposureShots';

    protected $FullName = 'Nikon::MultiExposure';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Multi Exposure Shots';

    protected $flag_Permanent = true;

}