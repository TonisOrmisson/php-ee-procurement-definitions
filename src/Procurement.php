<?php

class Procurement
{
    /** @var integer $procurementId */
    public $procurementId;

    /** @var string $procurementReferenceNr */
    public $procurementReferenceNr;

    /** @var string $procurementName */
    public $procurementName;

    /** @var string $contractingAuthorityName */
    public $contractingAuthorityName;

    /** @var integer $procurementStatus Status ID */
    public $procurementStatus;

    /** @var string $procurementType */
    public $procurementType;

    /** @var string $procurementProcessType */
    public $procurementProcessType;

    /** @var string $shortDescription */
    public $shortDescription;

    /** @var boolean $isEProcurement */
    public $isEProcurement;

    /** @var integer $mainCpvId */
    public $mainCpvId;

    /** @var boolean */
    public $isProcurementMultiStage;

    /** @var string $procProcessRevealDate eg "2018-10-08T00:00:00.000+0300" */
    public $procProcessRevealDate;

    /** @var string $procProcessRevealDate eg "2018-10-08T00:00:00.000+0300" */
    public $procProcessSubmitDate;

    /** @var boolean $isGreenProcurement */
    public $isGreenProcurement;

    /** @var boolean $isSuspended */
    public $isSuspended;

    /** @var boolean $procurementHasParts */
    public $procurementHasParts;

    /** @var integer $noticesCount */
    public $noticesCount;

    /** @var integer $contractsCount */
    public $contractsCount;

    /** @var integer $disputesCount */
    public $disputesCount;

    /** @var string $mainCpvName */
    public $mainCpvName;


}