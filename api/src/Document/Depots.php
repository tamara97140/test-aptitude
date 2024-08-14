<?php

namespace App\Document;

use App\Entity\Types;
use App\Repository\DepotsRepository;
use DateTimeInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

#[ODM\Document(collection: 'depot')]
class Depots
{
    #[ODM\Id]
    private $id;

    #[ODM\Field]
    private $REFERENCE;

    #[ODM\Field]
    private $date_depot;

    #[ODM\Field]
    private $dos_dnm_t;

    #[ODM\Field]
    private $surf_ex ;

    #[ODM\Field]
    private $nature;

    #[ODM\Field]
    private $BIE_ADRESSE;

    #[ODM\Field]
    private $BIE_CAD_T;

    public function getId()
    {
        return $this->id;
    }

    public function getRef()
    {
        return $this->REFERENCE;
    }

    public function setRef($REFERENCE)
    {
        $this->REFERENCE = $REFERENCE;

        return $this;
    }

    public function getDate()
    {
        return $this->date_depot;
    }

    public function setDate(DateTimeInterface $date_depot)
    {
        $this->date_depot = $date_depot;

        return $this;
    }

    public function getDemandeur()
    {
        return $this->dos_dnm_t;
    }

    public function setDemandeur($dos_dnm_t)
    {
        $this->dos_dnm_t = $dos_dnm_t;

        return $this;
    }

    public function getSurface()
    {
        return $this->surf_ex;
    }

    public function setSurface($surf_ex)
    {
        $this->surf_ex = $surf_ex;

        return $this;
    }

    public function getNature()
    {
        return $this->nature;
    }

    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    public function getAdresse()
    {
        return $this->BIE_ADRESSE;
    }

    public function setAdresse($BIE_ADRESSE)
    {
        $this->BIE_ADRESSE = $BIE_ADRESSE;

        return $this;
    }

    public function getRefCadastrales()
    {
        return $this->BIE_CAD_T;
    }

    public function setRefCadastrales( $BIE_CAD_T)
    {
        $this->BIE_CAD_T = $BIE_CAD_T;

        return $this;
    }
}
