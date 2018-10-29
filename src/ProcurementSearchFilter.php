<?php

namespace tonisormisson\eeprocurement\definitions;


class ProcurementSearchFilter
{

    /** @var string */
    public $procurementProcessRevealDateBegin;

    /** @var string */
    public $procurementProcessRevealDateEnd;

    /** @var string */
    public $procurementProcessSubmitDateBegin;

    /** @var string */
    public $procurementProcessSubmitDateEnd;

    /** @var string $referenceNumber  */
    public $referenceNumber;

    /** @var string $procurementName Procurement title ⁠*/
    public $procurementName;

    /** @var string $procurementContractingAuthorityName Name of buyer ⁠*/
    public $procurementContractingAuthorityName;

    /** @var string $procurementContractingAuthorityCode Registration code of buyer ⁠ */
    public $procurementContractingAuthorityCode;

    /** @var string $procurementCpv Area of activity / CPV code ⁠ */
    public $procurementCpv;

    /** @var string */
    public $procurementTypeCode;


}