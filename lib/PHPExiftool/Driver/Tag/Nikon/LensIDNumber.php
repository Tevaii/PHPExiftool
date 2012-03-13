<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class LensIDNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'LensIDNumber';

    protected $FullName = 'mixed';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Lens ID Number';

    protected $flag_Permanent = true;

}