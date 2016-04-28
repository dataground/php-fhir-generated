<?php namespace PHPFHIRGenerated\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011-2013, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRResource\FHIRResource;
use PHPFHIRGenerated\JsonSerializable;

/**
 * Dispensing a medication to a named patient.  This includes a description of the supply provided and the instructions for administering the medication.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicationDispense extends FHIRResource implements JsonSerializable
{
    /**
     * Identifier assigned by the dispensing facility - this is an identifier assigned outside FHIR.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A code specifying the state of the set of dispense events.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMedicationDispenseStatus
     */
    public $status = null;

    /**
     * A link to a resource representing the person to whom the medication will be given.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $patient = null;

    /**
     * The individual responsible for dispensing the medication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $dispenser = null;

    /**
     * Indicates the medication order that is being dispensed against.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $authorizingPrescription = array();

    /**
     * Indicates the details of the dispense event such as the days supply and quantity of medication dispensed.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispenseDispense[]
     */
    public $dispense = array();

    /**
     * Indicates whether or not substitution was made as part of the dispense.  In some cases substitution will be expected but doesn't happen, in other cases substitution is not expected but does happen.  This block explains what substitition did or did not happen and why.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
     */
    public $substitution = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationDispense';

    /**
     * Identifier assigned by the dispensing facility - this is an identifier assigned outside FHIR.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier assigned by the dispensing facility - this is an identifier assigned outside FHIR.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A code specifying the state of the set of dispense events.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMedicationDispenseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the set of dispense events.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMedicationDispenseStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A link to a resource representing the person to whom the medication will be given.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A link to a resource representing the person to whom the medication will be given.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The individual responsible for dispensing the medication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getDispenser()
    {
        return $this->dispenser;
    }

    /**
     * The individual responsible for dispensing the medication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $dispenser
     * @return $this
     */
    public function setDispenser($dispenser)
    {
        $this->dispenser = $dispenser;
        return $this;
    }

    /**
     * Indicates the medication order that is being dispensed against.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getAuthorizingPrescription()
    {
        return $this->authorizingPrescription;
    }

    /**
     * Indicates the medication order that is being dispensed against.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[] $authorizingPrescription
     * @return $this
     */
    public function addAuthorizingPrescription($authorizingPrescription)
    {
        $this->authorizingPrescription[] = $authorizingPrescription;
        return $this;
    }

    /**
     * Indicates the details of the dispense event such as the days supply and quantity of medication dispensed.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispenseDispense[]
     */
    public function getDispense()
    {
        return $this->dispense;
    }

    /**
     * Indicates the details of the dispense event such as the days supply and quantity of medication dispensed.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispenseDispense[] $dispense
     * @return $this
     */
    public function addDispense($dispense)
    {
        $this->dispense[] = $dispense;
        return $this;
    }

    /**
     * Indicates whether or not substitution was made as part of the dispense.  In some cases substitution will be expected but doesn't happen, in other cases substitution is not expected but does happen.  This block explains what substitition did or did not happen and why.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * Indicates whether or not substitution was made as part of the dispense.  In some cases substitution will be expected but doesn't happen, in other cases substitution is not expected but does happen.  This block explains what substitition did or did not happen and why.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution $substitution
     * @return $this
     */
    public function setSubstitution($substitution)
    {
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->identifier) $json['identifier'] = $this->identifier->jsonSerialize();
        if (null !== $this->status) $json['status'] = $this->status->jsonSerialize();
        if (null !== $this->patient) $json['patient'] = $this->patient->jsonSerialize();
        if (null !== $this->dispenser) $json['dispenser'] = $this->dispenser->jsonSerialize();
        if (0 < count($this->authorizingPrescription)) {
            $json['authorizingPrescription'] = array();
            foreach($this->authorizingPrescription as $authorizingPrescription) {
                $json['authorizingPrescription'][] = $authorizingPrescription->jsonSerialize();
            }
        }
        if (0 < count($this->dispense)) {
            $json['dispense'] = array();
            foreach($this->dispense as $dispense) {
                $json['dispense'][] = $dispense->jsonSerialize();
            }
        }
        if (null !== $this->substitution) $json['substitution'] = $this->substitution->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationDispense xmlns="http://hl7.org/fhir"></MedicationDispense>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->dispenser) $this->dispenser->xmlSerialize(true, $sxe->addChild('dispenser'));
        if (0 < count($this->authorizingPrescription)) {
            foreach($this->authorizingPrescription as $authorizingPrescription) {
                $authorizingPrescription->xmlSerialize(true, $sxe->addChild('authorizingPrescription'));
            }
        }
        if (0 < count($this->dispense)) {
            foreach($this->dispense as $dispense) {
                $dispense->xmlSerialize(true, $sxe->addChild('dispense'));
            }
        }
        if (null !== $this->substitution) $this->substitution->xmlSerialize(true, $sxe->addChild('substitution'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}