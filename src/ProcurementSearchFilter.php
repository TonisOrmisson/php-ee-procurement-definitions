<?php

namespace tonisormisson\eeprocurement\definitions;


class ProcurementSearchFilter
{

    const TYPE_SUPPLIES = 'A';
    const TYPE_SPECIFIC_SERVICES = 'R';
    const TYPE_SOCIAL_SERVICES = 'S';
    const TYPE_SERVICES = 'T';
    const TYPE_WORKS = 'E';

    const STATUS_PRIOR_INFO_PUBLISHED = "02";
    const STATUS_OPEN = "11";
    const STATUS_EVALUATION = "12";
    const STATUS_CONTRACT_IN_PERFORMANCE = "13";
    const STATUS_CONTRACT_COMPLETED = "19";
    const STATUS_REQUEST_TO_BE_SUBMITTED = "21";
    const STATUS_SOLUTION_SUBMISSION = "22";
    const STATUS_TENDER_SUBMISSION = "23";
    const STATUS_CONTRACT_TO_BE_ADDED = "31";
    const STATUS_TERMINATED = "91";

    const PROCESS_TYPE_OPEN = 'A';
    const PROCESS_TYPE_SIMPLE = 'LM';
    const PROCESS_TYPE_DESIGN = 'IK';
    const PROCESS_TYPE_NEGOTIATED_2017 = 'GL';
    const PROCESS_TYPE_CONCESSION = 'EK';
    const PROCESS_TYPE_RECIPIENTS_PURCHASE = 'MS';
    const PROCESS_TYPE_COMPETITIVE_NEGOTIATION = 'G';
    const PROCESS_TYPE_INNOVATION_PARTNERSHIP = 'IP';

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