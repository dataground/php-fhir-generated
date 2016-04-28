<?php namespace PHPFHIRGenerated\FHIRElement;

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

use PHPFHIRGenerated\FHIRElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * A relationship of two Quantity values - expressed as a numerator and a denominator.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRRatio extends FHIRElement implements JsonSerializable
{
    /**
     * The value of the numerator.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $numerator = null;

    /**
     * The value of the denominator.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $denominator = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Ratio';

    /**
     * The value of the numerator.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getNumerator()
    {
        return $this->numerator;
    }

    /**
     * The value of the numerator.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $numerator
     * @return $this
     */
    public function setNumerator($numerator)
    {
        $this->numerator = $numerator;
        return $this;
    }

    /**
     * The value of the denominator.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDenominator()
    {
        return $this->denominator;
    }

    /**
     * The value of the denominator.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $denominator
     * @return $this
     */
    public function setDenominator($denominator)
    {
        $this->denominator = $denominator;
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
        if (null !== $this->numerator) $json['numerator'] = $this->numerator->jsonSerialize();
        if (null !== $this->denominator) $json['denominator'] = $this->denominator->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Ratio xmlns="http://hl7.org/fhir"></Ratio>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->numerator) $this->numerator->xmlSerialize(true, $sxe->addChild('numerator'));
        if (null !== $this->denominator) $this->denominator->xmlSerialize(true, $sxe->addChild('denominator'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}