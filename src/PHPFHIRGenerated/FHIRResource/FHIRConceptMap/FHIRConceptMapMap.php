<?php namespace PHPFHIRGenerated\FHIRResource\FHIRConceptMap;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * A statement of relationships from one set of concepts to one or more other concept systems.
 */
class FHIRConceptMapMap extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * System of the target.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $system = null;

    /**
     * Code that identifies the target concept.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * equal | equivalent | wider | subsumes | narrower | specialises | inexact | unmatched | disjoint.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConceptMapEquivalence
     */
    public $equivalence = null;

    /**
     * Description of status/issues in mapping.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comments = null;

    /**
     * A set of additional outcomes from this mapping to other value sets. To properly execute this mapping, the specified value set must be mapped to some data element or source that is in context. The mapping may still be useful without a place for the additional data elements, but the equivalence cannot be relied on.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapDependsOn[]
     */
    public $product = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ConceptMap.Map';

    /**
     * System of the target.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * System of the target.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $system
     * @return $this
     */
    public function setSystem($system)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * Code that identifies the target concept.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Code that identifies the target concept.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * equal | equivalent | wider | subsumes | narrower | specialises | inexact | unmatched | disjoint.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRConceptMapEquivalence
     */
    public function getEquivalence()
    {
        return $this->equivalence;
    }

    /**
     * equal | equivalent | wider | subsumes | narrower | specialises | inexact | unmatched | disjoint.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRConceptMapEquivalence $equivalence
     * @return $this
     */
    public function setEquivalence($equivalence)
    {
        $this->equivalence = $equivalence;
        return $this;
    }

    /**
     * Description of status/issues in mapping.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Description of status/issues in mapping.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $comments
     * @return $this
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * A set of additional outcomes from this mapping to other value sets. To properly execute this mapping, the specified value set must be mapped to some data element or source that is in context. The mapping may still be useful without a place for the additional data elements, but the equivalence cannot be relied on.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapDependsOn[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * A set of additional outcomes from this mapping to other value sets. To properly execute this mapping, the specified value set must be mapped to some data element or source that is in context. The mapping may still be useful without a place for the additional data elements, but the equivalence cannot be relied on.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapDependsOn[] $product
     * @return $this
     */
    public function addProduct($product)
    {
        $this->product[] = $product;
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
        if (null !== $this->system) $json['system'] = $this->system->jsonSerialize();
        if (null !== $this->code) $json['code'] = $this->code->jsonSerialize();
        if (null !== $this->equivalence) $json['equivalence'] = $this->equivalence->jsonSerialize();
        if (null !== $this->comments) $json['comments'] = $this->comments->jsonSerialize();
        if (0 < count($this->product)) {
            $json['product'] = array();
            foreach($this->product as $product) {
                $json['product'][] = $product->jsonSerialize();
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ConceptMapMap xmlns="http://hl7.org/fhir"></ConceptMapMap>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->system) $this->system->xmlSerialize(true, $sxe->addChild('system'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->equivalence) $this->equivalence->xmlSerialize(true, $sxe->addChild('equivalence'));
        if (null !== $this->comments) $this->comments->xmlSerialize(true, $sxe->addChild('comments'));
        if (0 < count($this->product)) {
            foreach($this->product as $product) {
                $product->xmlSerialize(true, $sxe->addChild('product'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}