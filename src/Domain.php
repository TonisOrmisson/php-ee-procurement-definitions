<?php

namespace tonisormisson\eeprocurement\definitions;


class Domain
{
    const TYPE_LANGUAGE = "LANGUAGE";
    const TYPE_PROCUREMENT_STATE = "PROCUREMENT_STATE";
    const TYPE_PROCEDURE_TYPE = "PROCEDURE_TYPE";
    const TYPE_PROCUREMENT_TYPE = "PROCUREMENT_TYPE";
    const TYPE_PROCURER_FORM = "PROCURER_FORM";
    const TYPE_ORGANIZATION_REASON = "ORGANIZATION_REASON";
    const TYPE_ENTERPRISE_TYPE = "ENTERPRISE_TYPE";
    const TYPE_CONTRACT_CLASS = "CONTRACT_CLASS";
    const TYPE_PROCEED_REVIEW = "PROCEED_REVIEW";
    const TYPE_REVIEW_TYPE = "REVIEW_TYPE";
    const TYPE_REVIEW_STATUS = "REVIEW_STATUS";
    const TYPE_DISPUTE_OBJECT_TYPE = "DISPUTE_OBJECT_TYPE";
    const TYPE_DISPUTE_APPEAL_TYPE = "DISPUTE_APPEAL_TYPE";
    const TYPE_DISPUTE_RESULT_TYPE = "DISPUTE_RESULT_TYPE";

    /** @var string */
    public $domaTypeCode;

    /** @var string */
    public $code;

    /** @var string */
    public $text;

    /** @var integer */
    public $ordering;

}