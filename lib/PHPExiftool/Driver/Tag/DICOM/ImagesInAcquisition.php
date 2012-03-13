<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class ImagesInAcquisition extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0020,1002';

    protected $Name = 'ImagesInAcquisition';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Images In Acquisition';

}