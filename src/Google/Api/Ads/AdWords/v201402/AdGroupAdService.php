<?php
/**
 * Contains all client objects for the AdGroupAdService
 * service.
 *
 * PHP version 5
 *
 * Copyright 2014, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

/** Required classes. **/
require_once "Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php";

if (!class_exists("Ad", FALSE)) {
/**
 * The base class of all ad types. To update basic ad fields,
 * you can construct an {@code Ad} object (instead of
 * the ad's concrete type) with the appropriate fields set.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Ad {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Ad";

  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $url;

  /**
   * @access public
   * @var string
   */
  public $displayUrl;

  /**
   * @access public
   * @var integer
   */
  public $devicePreference;

  /**
   * @access public
   * @var string
   */
  public $AdType;
  private $_parameterMap = array(
    "Ad.Type" => "AdType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($id = null, $url = null, $displayUrl = null, $devicePreference = null, $AdType = null) {
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }

}}

if (!class_exists("AdGroupAd", FALSE)) {
/**
 * Represents an ad in an ad group.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAd {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdGroupAd";

  /**
   * @access public
   * @var integer
   */
  public $adGroupId;

  /**
   * @access public
   * @var Ad
   */
  public $ad;

  /**
   * @access public
   * @var AdGroupAdExperimentData
   */
  public $experimentData;

  /**
   * @access public
   * @var tnsAdGroupAdStatus
   */
  public $status;

  /**
   * @access public
   * @var tnsAdGroupAdApprovalStatus
   */
  public $approvalStatus;

  /**
   * @access public
   * @var string[]
   */
  public $disapprovalReasons;

  /**
   * @access public
   * @var boolean
   */
  public $trademarkDisapproved;

  /**
   * @access public
   * @var String_StringMapEntry[]
   */
  public $forwardCompatibilityMap;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($adGroupId = null, $ad = null, $experimentData = null, $status = null, $approvalStatus = null, $disapprovalReasons = null, $trademarkDisapproved = null, $forwardCompatibilityMap = null) {
    $this->adGroupId = $adGroupId;
    $this->ad = $ad;
    $this->experimentData = $experimentData;
    $this->status = $status;
    $this->approvalStatus = $approvalStatus;
    $this->disapprovalReasons = $disapprovalReasons;
    $this->trademarkDisapproved = $trademarkDisapproved;
    $this->forwardCompatibilityMap = $forwardCompatibilityMap;
  }

}}

if (!class_exists("AdGroupAdExperimentData", FALSE)) {
/**
 * Data associated with an advertiser experiment for an AdGroupAd
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdExperimentData {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdGroupAdExperimentData";

  /**
   * @access public
   * @var integer
   */
  public $experimentId;

  /**
   * @access public
   * @var tnsExperimentDeltaStatus
   */
  public $experimentDeltaStatus;

  /**
   * @access public
   * @var tnsExperimentDataStatus
   */
  public $experimentDataStatus;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($experimentId = null, $experimentDeltaStatus = null, $experimentDataStatus = null) {
    $this->experimentId = $experimentId;
    $this->experimentDeltaStatus = $experimentDeltaStatus;
    $this->experimentDataStatus = $experimentDataStatus;
  }

}}

if (!class_exists("AdUnionId", FALSE)) {
/**
 * Represents an id indicating a grouping of Ads under some heuristic.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdUnionId {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdUnionId";

  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $AdUnionIdType;
  private $_parameterMap = array(
    "AdUnionId.Type" => "AdUnionIdType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($id = null, $AdUnionIdType = null) {
    $this->id = $id;
    $this->AdUnionIdType = $AdUnionIdType;
  }

}}

if (!class_exists("ApiError", FALSE)) {
/**
 * The API error base class that provides details about an error that occurred
 * while processing a service request.
 * 
 * <p>The OGNL field path is provided for parsers to identify the request data
 * element that may have caused the error.</p>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ApiError";

  /**
   * @access public
   * @var string
   */
  public $fieldPath;

  /**
   * @access public
   * @var string
   */
  public $trigger;

  /**
   * @access public
   * @var string
   */
  public $errorString;

  /**
   * @access public
   * @var string
   */
  public $ApiErrorType;
  private $_parameterMap = array(
    "ApiError.Type" => "ApiErrorType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("ApplicationException", FALSE)) {
/**
 * Base class for exceptions.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ApplicationException {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ApplicationException";

  /**
   * @access public
   * @var string
   */
  public $message;

  /**
   * @access public
   * @var string
   */
  public $ApplicationExceptionType;
  private $_parameterMap = array(
    "ApplicationException.Type" => "ApplicationExceptionType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($message = null, $ApplicationExceptionType = null) {
    $this->message = $message;
    $this->ApplicationExceptionType = $ApplicationExceptionType;
  }

}}

if (!class_exists("AuthenticationError", FALSE)) {
/**
 * Errors returned when Authentication failed.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AuthenticationError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AuthenticationError";

  /**
   * @access public
   * @var tnsAuthenticationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("AuthorizationError", FALSE)) {
/**
 * Errors encountered when trying to authorize a user.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AuthorizationError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AuthorizationError";

  /**
   * @access public
   * @var tnsAuthorizationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("ClientTermsError", FALSE)) {
/**
 * Error due to user not accepting the AdWords terms of service.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ClientTermsError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ClientTermsError";

  /**
   * @access public
   * @var tnsClientTermsErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("DatabaseError", FALSE)) {
/**
 * Errors that are thrown due to a database access problem.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DatabaseError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DatabaseError";

  /**
   * @access public
   * @var tnsDatabaseErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("DateError", FALSE)) {
/**
 * Errors associated with invalid dates and date ranges.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DateError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DateError";

  /**
   * @access public
   * @var tnsDateErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("DateRange", FALSE)) {
/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DateRange {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DateRange";

  /**
   * @access public
   * @var string
   */
  public $min;

  /**
   * @access public
   * @var string
   */
  public $max;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($min = null, $max = null) {
    $this->min = $min;
    $this->max = $max;
  }

}}

if (!class_exists("DeprecatedAd", FALSE)) {
/**
 * Represents a deprecated ad.
 * 
 * Deprecated ads can be deleted, but cannot be created.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DeprecatedAd extends Ad {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DeprecatedAd";

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var tnsDeprecatedAdType
   */
  public $type;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($name = null, $type = null, $id = null, $url = null, $displayUrl = null, $devicePreference = null, $AdType = null) {
    parent::__construct();
    $this->name = $name;
    $this->type = $type;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }

}}

if (!class_exists("Dimensions", FALSE)) {
/**
 * Represents a simple height-width dimension.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Dimensions {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Dimensions";

  /**
   * @access public
   * @var integer
   */
  public $width;

  /**
   * @access public
   * @var integer
   */
  public $height;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($width = null, $height = null) {
    $this->width = $width;
    $this->height = $height;
  }

}}

if (!class_exists("DistinctError", FALSE)) {
/**
 * Errors related to distinct ids or content.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DistinctError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DistinctError";

  /**
   * @access public
   * @var tnsDistinctErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("EntityCountLimitExceeded", FALSE)) {
/**
 * Signals that an entity count limit was exceeded for some level.
 * For example, too many criteria for a campaign.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class EntityCountLimitExceeded extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "EntityCountLimitExceeded";

  /**
   * @access public
   * @var tnsEntityCountLimitExceededReason
   */
  public $reason;

  /**
   * @access public
   * @var string
   */
  public $enclosingId;

  /**
   * @access public
   * @var integer
   */
  public $limit;

  /**
   * @access public
   * @var string
   */
  public $accountLimitType;

  /**
   * @access public
   * @var integer
   */
  public $existingCount;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->enclosingId = $enclosingId;
    $this->limit = $limit;
    $this->accountLimitType = $accountLimitType;
    $this->existingCount = $existingCount;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("EntityNotFound", FALSE)) {
/**
 * An id did not correspond to an entity, or it referred to an entity which does not belong to the
 * customer.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class EntityNotFound extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "EntityNotFound";

  /**
   * @access public
   * @var tnsEntityNotFoundReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("ExemptionRequest", FALSE)) {
/**
 * A request to be exempted from a {@link PolicyViolationError}.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ExemptionRequest {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ExemptionRequest";

  /**
   * @access public
   * @var PolicyViolationKey
   */
  public $key;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($key = null) {
    $this->key = $key;
  }

}}

if (!class_exists("ExperimentError", FALSE)) {
/**
 * The error reason represented by an enum.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ExperimentError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ExperimentError";

  /**
   * @access public
   * @var tnsExperimentErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("ForwardCompatibilityError", FALSE)) {
/**
 * A ForwardComptibilityError represents possible errors when using the forwardCompatibilityMap
 * in some of the common services.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ForwardCompatibilityError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ForwardCompatibilityError";

  /**
   * @access public
   * @var tnsForwardCompatibilityErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("IdError", FALSE)) {
/**
 * Errors associated with the ids.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class IdError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "IdError";

  /**
   * @access public
   * @var tnsIdErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("ImageAd", FALSE)) {
/**
 * Represents an ImageAd.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ImageAd extends Ad {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ImageAd";

  /**
   * @access public
   * @var Image
   */
  public $image;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var integer
   */
  public $adToCopyImageFrom;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($image = null, $name = null, $adToCopyImageFrom = null, $id = null, $url = null, $displayUrl = null, $devicePreference = null, $AdType = null) {
    parent::__construct();
    $this->image = $image;
    $this->name = $name;
    $this->adToCopyImageFrom = $adToCopyImageFrom;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }

}}

if (!class_exists("ImageError", FALSE)) {
/**
 * Error class for errors associated with parsing image data.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ImageError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ImageError";

  /**
   * @access public
   * @var tnsImageErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("InternalApiError", FALSE)) {
/**
 * Indicates that a server-side error has occured. {@code InternalApiError}s
 * are generally not the result of an invalid request or message sent by the
 * client.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class InternalApiError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "InternalApiError";

  /**
   * @access public
   * @var tnsInternalApiErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("ListReturnValue", FALSE)) {
/**
 * Base list return value type.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ListReturnValue {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ListReturnValue";

  /**
   * @access public
   * @var string
   */
  public $ListReturnValueType;
  private $_parameterMap = array(
    "ListReturnValue.Type" => "ListReturnValueType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($ListReturnValueType = null) {
    $this->ListReturnValueType = $ListReturnValueType;
  }

}}

if (!class_exists("Media", FALSE)) {
/**
 * Represents some kind of media.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Media {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Media";

  /**
   * @access public
   * @var integer
   */
  public $mediaId;

  /**
   * @access public
   * @var tnsMediaMediaType
   */
  public $type;

  /**
   * @access public
   * @var integer
   */
  public $referenceId;

  /**
   * @access public
   * @var Media_Size_DimensionsMapEntry[]
   */
  public $dimensions;

  /**
   * @access public
   * @var Media_Size_StringMapEntry[]
   */
  public $urls;

  /**
   * @access public
   * @var tnsMediaMimeType
   */
  public $mimeType;

  /**
   * @access public
   * @var string
   */
  public $sourceUrl;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var integer
   */
  public $fileSize;

  /**
   * @access public
   * @var string
   */
  public $creationTime;

  /**
   * @access public
   * @var string
   */
  public $MediaType;
  private $_parameterMap = array(
    "Media.Type" => "MediaType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($mediaId = null, $type = null, $referenceId = null, $dimensions = null, $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null) {
    $this->mediaId = $mediaId;
    $this->type = $type;
    $this->referenceId = $referenceId;
    $this->dimensions = $dimensions;
    $this->urls = $urls;
    $this->mimeType = $mimeType;
    $this->sourceUrl = $sourceUrl;
    $this->name = $name;
    $this->fileSize = $fileSize;
    $this->creationTime = $creationTime;
    $this->MediaType = $MediaType;
  }

}}

if (!class_exists("MediaError", FALSE)) {
/**
 * Error class for media related errors.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class MediaError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "MediaError";

  /**
   * @access public
   * @var tnsMediaErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("Media_Size_DimensionsMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type Size
 * and value of type Dimensions.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Media_Size_DimensionsMapEntry {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Media_Size_DimensionsMapEntry";

  /**
   * @access public
   * @var tnsMediaSize
   */
  public $key;

  /**
   * @access public
   * @var Dimensions
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($key = null, $value = null) {
    $this->key = $key;
    $this->value = $value;
  }

}}

if (!class_exists("Media_Size_StringMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type Size
 * and value of type String.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Media_Size_StringMapEntry {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Media_Size_StringMapEntry";

  /**
   * @access public
   * @var tnsMediaSize
   */
  public $key;

  /**
   * @access public
   * @var string
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($key = null, $value = null) {
    $this->key = $key;
    $this->value = $value;
  }

}}

if (!class_exists("MobileAd", FALSE)) {
/**
 * Represents a mobile ad.
 * 
 * <p>
 * A mobile ad can contain a click-to-call phone number, a link to a website,
 * or both.  You specify which features you want by setting certain fields, as
 * shown in the following table.  For example, to create a click-to-call mobile
 * ad, set the fields in the <b>Click-to-call</b> column. A hyphen indicates
 * that you should not set the corresponding field.
 * </p>
 * <p>
 * For more information, see
 * <a href="//support.google.com/adwords/bin/answer.py?answer=2472720">
 * Create a mobile ad</a>.
 * </p>
 * 
 * <table summary="" style="clear: none">
 * <tr> <th scope="col"> Click-to-call </th>
 * <th scope="col"> Website       </th>
 * <th scope="col"> Both          </th></tr>
 * <tr> <td> headline        <br />
 * description     <br />
 * mobileCarriers  <br />
 * phoneNumber     <br />
 * countryCode     <br />
 * businessName    <br />
 * -               <br />
 * -               <br />
 * -               <br />
 * </td>
 * <td> headline        <br />
 * description     <br />
 * mobileCarriers  <br />
 * -               <br />
 * -               <br />
 * -               <br />
 * displayUrl      <br />
 * destinationUrl  <br />
 * markupLanguages <br />
 * </td>
 * <td> headline        <br />
 * description     <br />
 * mobileCarriers  <br />
 * phoneNumber     <br />
 * countryCode     <br />
 * businessName    <br />
 * displayUrl      <br />
 * destinationUrl  <br />
 * markupLanguages <br />
 * </td></tr>
 * </table>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class MobileAd extends Ad {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "MobileAd";

  /**
   * @access public
   * @var string
   */
  public $headline;

  /**
   * @access public
   * @var string
   */
  public $description;

  /**
   * @access public
   * @var tnsMarkupLanguageType[]
   */
  public $markupLanguages;

  /**
   * @access public
   * @var string[]
   */
  public $mobileCarriers;

  /**
   * @access public
   * @var string
   */
  public $businessName;

  /**
   * @access public
   * @var string
   */
  public $countryCode;

  /**
   * @access public
   * @var string
   */
  public $phoneNumber;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($headline = null, $description = null, $markupLanguages = null, $mobileCarriers = null, $businessName = null, $countryCode = null, $phoneNumber = null, $id = null, $url = null, $displayUrl = null, $devicePreference = null, $AdType = null) {
    parent::__construct();
    $this->headline = $headline;
    $this->description = $description;
    $this->markupLanguages = $markupLanguages;
    $this->mobileCarriers = $mobileCarriers;
    $this->businessName = $businessName;
    $this->countryCode = $countryCode;
    $this->phoneNumber = $phoneNumber;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }

}}

if (!class_exists("MobileImageAd", FALSE)) {
/**
 * Represents a mobile image ad.
 * 
 * <p>For more information, see
 * <a href="//support.google.com/adwords/bin/answer.py?answer=2472720">
 * Create a mobile ad</a>.</p>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class MobileImageAd extends Ad {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "MobileImageAd";

  /**
   * @access public
   * @var tnsMarkupLanguageType[]
   */
  public $markupLanguages;

  /**
   * @access public
   * @var string[]
   */
  public $mobileCarriers;

  /**
   * @access public
   * @var Image
   */
  public $image;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($markupLanguages = null, $mobileCarriers = null, $image = null, $id = null, $url = null, $displayUrl = null, $devicePreference = null, $AdType = null) {
    parent::__construct();
    $this->markupLanguages = $markupLanguages;
    $this->mobileCarriers = $mobileCarriers;
    $this->image = $image;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }

}}

if (!class_exists("NewEntityCreationError", FALSE)) {
/**
 * Error associated with creation of new entities.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class NewEntityCreationError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "NewEntityCreationError";

  /**
   * @access public
   * @var tnsNewEntityCreationErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("NotEmptyError", FALSE)) {
/**
 * Errors corresponding with violation of a NOT EMPTY check.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class NotEmptyError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "NotEmptyError";

  /**
   * @access public
   * @var tnsNotEmptyErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("NullError", FALSE)) {
/**
 * Errors associated with violation of a NOT NULL check.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class NullError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "NullError";

  /**
   * @access public
   * @var tnsNullErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("Operation", FALSE)) {
/**
 * This represents an operation that includes an operator and an operand
 * specified type.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Operation {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Operation";

  /**
   * @access public
   * @var tnsOperator
   */
  public $operator;

  /**
   * @access public
   * @var string
   */
  public $OperationType;
  private $_parameterMap = array(
    "Operation.Type" => "OperationType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($operator = null, $OperationType = null) {
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }

}}

if (!class_exists("OperationAccessDenied", FALSE)) {
/**
 * Operation not permitted due to the invoked service's access policy.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class OperationAccessDenied extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "OperationAccessDenied";

  /**
   * @access public
   * @var tnsOperationAccessDeniedReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("OrderBy", FALSE)) {
/**
 * Specifies how the resulting information should be sorted.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class OrderBy {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "OrderBy";

  /**
   * @access public
   * @var string
   */
  public $field;

  /**
   * @access public
   * @var tnsSortOrder
   */
  public $sortOrder;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($field = null, $sortOrder = null) {
    $this->field = $field;
    $this->sortOrder = $sortOrder;
  }

}}

if (!class_exists("Page", FALSE)) {
/**
 * Contains the results from a get call.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Page {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Page";

  /**
   * @access public
   * @var integer
   */
  public $totalNumEntries;

  /**
   * @access public
   * @var string
   */
  public $PageType;
  private $_parameterMap = array(
    "Page.Type" => "PageType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($totalNumEntries = null, $PageType = null) {
    $this->totalNumEntries = $totalNumEntries;
    $this->PageType = $PageType;
  }

}}

if (!class_exists("Paging", FALSE)) {
/**
 * Specifies the page of results to return in the response. A page is specified
 * by the result position to start at and the maximum number of results to
 * return.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Paging {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Paging";

  /**
   * @access public
   * @var integer
   */
  public $startIndex;

  /**
   * @access public
   * @var integer
   */
  public $numberResults;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($startIndex = null, $numberResults = null) {
    $this->startIndex = $startIndex;
    $this->numberResults = $numberResults;
  }

}}

if (!class_exists("PagingError", FALSE)) {
/**
 * Error codes for pagination.
 * See {@link com.google.ads.api.services.common.pagination.Paging}.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class PagingError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "PagingError";

  /**
   * @access public
   * @var tnsPagingErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("PolicyViolationError", FALSE)) {
/**
 * Represents violations of a single policy by some text in a field.
 * 
 * Violations of a single policy by the same string in multiple places
 * within a field is reported in one instance of this class and only one
 * exemption needs to be filed.
 * Violations of a single policy by two different strings is reported
 * as two separate instances of this class.
 * 
 * e.g. If 'ACME' violates 'capitalization' and occurs twice in a text ad it
 * would be represented by one instance. If the ad also contains 'INC' which
 * also violates 'capitalization' it would be represented in a separate
 * instance.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class PolicyViolationError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "PolicyViolationError";

  /**
   * @access public
   * @var PolicyViolationKey
   */
  public $key;

  /**
   * @access public
   * @var string
   */
  public $externalPolicyName;

  /**
   * @access public
   * @var string
   */
  public $externalPolicyUrl;

  /**
   * @access public
   * @var string
   */
  public $externalPolicyDescription;

  /**
   * @access public
   * @var boolean
   */
  public $isExemptable;

  /**
   * @access public
   * @var PolicyViolationErrorPart[]
   */
  public $violatingParts;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($key = null, $externalPolicyName = null, $externalPolicyUrl = null, $externalPolicyDescription = null, $isExemptable = null, $violatingParts = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->key = $key;
    $this->externalPolicyName = $externalPolicyName;
    $this->externalPolicyUrl = $externalPolicyUrl;
    $this->externalPolicyDescription = $externalPolicyDescription;
    $this->isExemptable = $isExemptable;
    $this->violatingParts = $violatingParts;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("PolicyViolationErrorPart", FALSE)) {
/**
 * Points to a substring within an ad field or criterion.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class PolicyViolationErrorPart {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "PolicyViolationError.Part";

  /**
   * @access public
   * @var integer
   */
  public $index;

  /**
   * @access public
   * @var integer
   */
  public $length;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($index = null, $length = null) {
    $this->index = $index;
    $this->length = $length;
  }

}}

if (!class_exists("PolicyViolationKey", FALSE)) {
/**
 * Key of the violation. The key is used for referring to a violation when
 * filing an exemption request.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class PolicyViolationKey {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "PolicyViolationKey";

  /**
   * @access public
   * @var string
   */
  public $policyName;

  /**
   * @access public
   * @var string
   */
  public $violatingText;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($policyName = null, $violatingText = null) {
    $this->policyName = $policyName;
    $this->violatingText = $violatingText;
  }

}}

if (!class_exists("Predicate", FALSE)) {
/**
 * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Predicate {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Predicate";

  /**
   * @access public
   * @var string
   */
  public $field;

  /**
   * @access public
   * @var tnsPredicateOperator
   */
  public $operator;

  /**
   * @access public
   * @var string[]
   */
  public $values;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($field = null, $operator = null, $values = null) {
    $this->field = $field;
    $this->operator = $operator;
    $this->values = $values;
  }

}}

if (!class_exists("ProductAd", FALSE)) {
/**
 * Represents a product ad (known as a <a href=
 * "//support.google.com/adwords/bin/answer.py?answer=2456103">product
 * listing ad</a> in the AdWords user interface). A product ad displays
 * product data (managed using the Google Merchant Center) that is
 * pulled from the Google base product feed specified in the parent campaign's
 * {@linkplain ProductExtension product extension}.
 * 
 * <p>Product ads are only available to a limited set of advertisers. If you
 * are not eligible to use product ads, they will not serve.</p>
 * 
 * <p class="caution"><b>Caution:</b> Product ads do not use {@link #url url} or
 * {@link #displayUrl displayUrl}; setting these fields on a product ad will
 * cause an error.</p>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ProductAd extends Ad {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ProductAd";

  /**
   * @access public
   * @var string
   */
  public $promotionLine;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($promotionLine = null, $id = null, $url = null, $displayUrl = null, $devicePreference = null, $AdType = null) {
    parent::__construct();
    $this->promotionLine = $promotionLine;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }

}}

if (!class_exists("QueryError", FALSE)) {
/**
 * A QueryError represents possible errors for query parsing and execution.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class QueryError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "QueryError";

  /**
   * @access public
   * @var tnsQueryErrorReason
   */
  public $reason;

  /**
   * @access public
   * @var string
   */
  public $message;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $message = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->message = $message;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("QuotaCheckError", FALSE)) {
/**
 * Encapsulates the errors thrown during developer quota checks.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class QuotaCheckError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "QuotaCheckError";

  /**
   * @access public
   * @var tnsQuotaCheckErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("RangeError", FALSE)) {
/**
 * A list of all errors associated with the Range constraint.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RangeError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RangeError";

  /**
   * @access public
   * @var tnsRangeErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("RateExceededError", FALSE)) {
/**
 * Signals that a call failed because a measured rate exceeded.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RateExceededError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RateExceededError";

  /**
   * @access public
   * @var tnsRateExceededErrorReason
   */
  public $reason;

  /**
   * @access public
   * @var string
   */
  public $rateName;

  /**
   * @access public
   * @var string
   */
  public $rateScope;

  /**
   * @access public
   * @var integer
   */
  public $retryAfterSeconds;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $rateName = null, $rateScope = null, $retryAfterSeconds = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->rateName = $rateName;
    $this->rateScope = $rateScope;
    $this->retryAfterSeconds = $retryAfterSeconds;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("ReadOnlyError", FALSE)) {
/**
 * Errors from attempting to write to read-only fields.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ReadOnlyError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ReadOnlyError";

  /**
   * @access public
   * @var tnsReadOnlyErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("RejectedError", FALSE)) {
/**
 * Indicates that a field was rejected due to compatibility issues.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RejectedError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RejectedError";

  /**
   * @access public
   * @var tnsRejectedErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("RequestError", FALSE)) {
/**
 * Encapsulates the generic errors thrown when there's an error with user
 * request.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RequestError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RequestError";

  /**
   * @access public
   * @var tnsRequestErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("RequiredError", FALSE)) {
/**
 * Errors due to missing required field.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RequiredError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RequiredError";

  /**
   * @access public
   * @var tnsRequiredErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("RichMediaAd", FALSE)) {
/**
 * Data associated with a rich media ad.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RichMediaAd extends Ad {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RichMediaAd";

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var Dimensions
   */
  public $dimensions;

  /**
   * @access public
   * @var string
   */
  public $snippet;

  /**
   * @access public
   * @var string
   */
  public $impressionBeaconUrl;

  /**
   * @access public
   * @var integer
   */
  public $adDuration;

  /**
   * @access public
   * @var integer
   */
  public $certifiedVendorFormatId;

  /**
   * @access public
   * @var string
   */
  public $sourceUrl;

  /**
   * @access public
   * @var tnsRichMediaAdRichMediaAdType
   */
  public $richMediaAdType;

  /**
   * @access public
   * @var tnsRichMediaAdAdAttribute[]
   */
  public $adAttributes;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($name = null, $dimensions = null, $snippet = null, $impressionBeaconUrl = null, $adDuration = null, $certifiedVendorFormatId = null, $sourceUrl = null, $richMediaAdType = null, $adAttributes = null, $id = null, $url = null, $displayUrl = null, $devicePreference = null, $AdType = null) {
    parent::__construct();
    $this->name = $name;
    $this->dimensions = $dimensions;
    $this->snippet = $snippet;
    $this->impressionBeaconUrl = $impressionBeaconUrl;
    $this->adDuration = $adDuration;
    $this->certifiedVendorFormatId = $certifiedVendorFormatId;
    $this->sourceUrl = $sourceUrl;
    $this->richMediaAdType = $richMediaAdType;
    $this->adAttributes = $adAttributes;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }

}}

if (!class_exists("Selector", FALSE)) {
/**
 * A generic selector to specify the type of information to return.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Selector {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Selector";

  /**
   * @access public
   * @var string[]
   */
  public $fields;

  /**
   * @access public
   * @var Predicate[]
   */
  public $predicates;

  /**
   * @access public
   * @var DateRange
   */
  public $dateRange;

  /**
   * @access public
   * @var OrderBy[]
   */
  public $ordering;

  /**
   * @access public
   * @var Paging
   */
  public $paging;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($fields = null, $predicates = null, $dateRange = null, $ordering = null, $paging = null) {
    $this->fields = $fields;
    $this->predicates = $predicates;
    $this->dateRange = $dateRange;
    $this->ordering = $ordering;
    $this->paging = $paging;
  }

}}

if (!class_exists("SelectorError", FALSE)) {
/**
 * Represents possible error codes for {@link Selector}.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SelectorError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "SelectorError";

  /**
   * @access public
   * @var tnsSelectorErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("SizeLimitError", FALSE)) {
/**
 * Indicates that the number of entries in the request or response exceeds the system limit.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SizeLimitError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "SizeLimitError";

  /**
   * @access public
   * @var tnsSizeLimitErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("SoapRequestHeader", FALSE)) {
/**
 * Defines the required and optional elements within the header of a SOAP request.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SoapRequestHeader {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "SoapHeader";

  /**
   * @access public
   * @var string
   */
  public $clientCustomerId;

  /**
   * @access public
   * @var string
   */
  public $developerToken;

  /**
   * @access public
   * @var string
   */
  public $userAgent;

  /**
   * @access public
   * @var boolean
   */
  public $validateOnly;

  /**
   * @access public
   * @var boolean
   */
  public $partialFailure;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($clientCustomerId = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null) {
    $this->clientCustomerId = $clientCustomerId;
    $this->developerToken = $developerToken;
    $this->userAgent = $userAgent;
    $this->validateOnly = $validateOnly;
    $this->partialFailure = $partialFailure;
  }

}}

if (!class_exists("SoapResponseHeader", FALSE)) {
/**
 * Defines the elements within the header of a SOAP response.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SoapResponseHeader {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "SoapResponseHeader";

  /**
   * @access public
   * @var string
   */
  public $requestId;

  /**
   * @access public
   * @var string
   */
  public $serviceName;

  /**
   * @access public
   * @var string
   */
  public $methodName;

  /**
   * @access public
   * @var integer
   */
  public $operations;

  /**
   * @access public
   * @var integer
   */
  public $responseTime;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($requestId = null, $serviceName = null, $methodName = null, $operations = null, $responseTime = null) {
    $this->requestId = $requestId;
    $this->serviceName = $serviceName;
    $this->methodName = $methodName;
    $this->operations = $operations;
    $this->responseTime = $responseTime;
  }

}}

if (!class_exists("StatsQueryError", FALSE)) {
/**
 * Represents possible error codes when querying for stats.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class StatsQueryError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "StatsQueryError";

  /**
   * @access public
   * @var tnsStatsQueryErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("StringLengthError", FALSE)) {
/**
 * Errors associated with the length of the given string being
 * out of bounds.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class StringLengthError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "StringLengthError";

  /**
   * @access public
   * @var tnsStringLengthErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("String_StringMapEntry", FALSE)) {
/**
 * This represents an entry in a map with a key of type String
 * and value of type String.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class String_StringMapEntry {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "String_StringMapEntry";

  /**
   * @access public
   * @var string
   */
  public $key;

  /**
   * @access public
   * @var string
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($key = null, $value = null) {
    $this->key = $key;
    $this->value = $value;
  }

}}

if (!class_exists("TempAdUnionId", FALSE)) {
/**
 * Represents the temporary id for an ad union id, which the user can specify.
 * The temporary id can be used to group ads together during ad creation.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class TempAdUnionId extends AdUnionId {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "TempAdUnionId";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($id = null, $AdUnionIdType = null) {
    parent::__construct();
    $this->id = $id;
    $this->AdUnionIdType = $AdUnionIdType;
  }

}}

if (!class_exists("TemplateAd", FALSE)) {
/**
 * Represents a <a href=
 * "//www.google.com/adwords/displaynetwork/plan-creative-campaigns/display-ad-builder.html"
 * >Display Ad Builder</a> template ad. A template ad is
 * composed of a template (specified by its ID) and the data that populates
 * the template's fields. For a list of available templates and their required
 * fields, see <a href="/adwords/api/docs/appendix/templateads">Template Ads</a>.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class TemplateAd extends Ad {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "TemplateAd";

  /**
   * @access public
   * @var integer
   */
  public $templateId;

  /**
   * @access public
   * @var AdUnionId
   */
  public $adUnionId;

  /**
   * @access public
   * @var TemplateElement[]
   */
  public $templateElements;

  /**
   * @access public
   * @var Image
   */
  public $adAsImage;

  /**
   * @access public
   * @var Dimensions
   */
  public $dimensions;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var integer
   */
  public $duration;

  /**
   * @access public
   * @var integer
   */
  public $originAdId;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($templateId = null, $adUnionId = null, $templateElements = null, $adAsImage = null, $dimensions = null, $name = null, $duration = null, $originAdId = null, $id = null, $url = null, $displayUrl = null, $devicePreference = null, $AdType = null) {
    parent::__construct();
    $this->templateId = $templateId;
    $this->adUnionId = $adUnionId;
    $this->templateElements = $templateElements;
    $this->adAsImage = $adAsImage;
    $this->dimensions = $dimensions;
    $this->name = $name;
    $this->duration = $duration;
    $this->originAdId = $originAdId;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }

}}

if (!class_exists("TemplateElement", FALSE)) {
/**
 * Represents an element in a template. Each template element is composed
 * of a list of fields (actual value data).
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class TemplateElement {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "TemplateElement";

  /**
   * @access public
   * @var string
   */
  public $uniqueName;

  /**
   * @access public
   * @var TemplateElementField[]
   */
  public $fields;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($uniqueName = null, $fields = null) {
    $this->uniqueName = $uniqueName;
    $this->fields = $fields;
  }

}}

if (!class_exists("TemplateElementField", FALSE)) {
/**
 * Represents a field in a template element.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class TemplateElementField {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "TemplateElementField";

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var tnsTemplateElementFieldType
   */
  public $type;

  /**
   * @access public
   * @var string
   */
  public $fieldText;

  /**
   * @access public
   * @var Media
   */
  public $fieldMedia;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($name = null, $type = null, $fieldText = null, $fieldMedia = null) {
    $this->name = $name;
    $this->type = $type;
    $this->fieldText = $fieldText;
    $this->fieldMedia = $fieldMedia;
  }

}}

if (!class_exists("TextAd", FALSE)) {
/**
 * Represents a TextAd.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class TextAd extends Ad {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "TextAd";

  /**
   * @access public
   * @var string
   */
  public $headline;

  /**
   * @access public
   * @var string
   */
  public $description1;

  /**
   * @access public
   * @var string
   */
  public $description2;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($headline = null, $description1 = null, $description2 = null, $id = null, $url = null, $displayUrl = null, $devicePreference = null, $AdType = null) {
    parent::__construct();
    $this->headline = $headline;
    $this->description1 = $description1;
    $this->description2 = $description2;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }

}}

if (!class_exists("ThirdPartyRedirectAd", FALSE)) {
/**
 * Data associated with rich media extension attributes.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ThirdPartyRedirectAd extends RichMediaAd {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ThirdPartyRedirectAd";

  /**
   * @access public
   * @var boolean
   */
  public $isCookieTargeted;

  /**
   * @access public
   * @var boolean
   */
  public $isUserInterestTargeted;

  /**
   * @access public
   * @var boolean
   */
  public $isTagged;

  /**
   * @access public
   * @var tnsVideoType[]
   */
  public $videoTypes;

  /**
   * @access public
   * @var tnsThirdPartyRedirectAdExpandingDirection[]
   */
  public $expandingDirections;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($isCookieTargeted = null, $isUserInterestTargeted = null, $isTagged = null, $videoTypes = null, $expandingDirections = null, $name = null, $dimensions = null, $snippet = null, $impressionBeaconUrl = null, $adDuration = null, $certifiedVendorFormatId = null, $sourceUrl = null, $richMediaAdType = null, $adAttributes = null) {
    parent::__construct();
    $this->isCookieTargeted = $isCookieTargeted;
    $this->isUserInterestTargeted = $isUserInterestTargeted;
    $this->isTagged = $isTagged;
    $this->videoTypes = $videoTypes;
    $this->expandingDirections = $expandingDirections;
    $this->name = $name;
    $this->dimensions = $dimensions;
    $this->snippet = $snippet;
    $this->impressionBeaconUrl = $impressionBeaconUrl;
    $this->adDuration = $adDuration;
    $this->certifiedVendorFormatId = $certifiedVendorFormatId;
    $this->sourceUrl = $sourceUrl;
    $this->richMediaAdType = $richMediaAdType;
    $this->adAttributes = $adAttributes;
  }

}}

if (!class_exists("Video", FALSE)) {
/**
 * Encapsulates a Video media identified by a MediaId.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Video extends Media {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Video";

  /**
   * @access public
   * @var integer
   */
  public $durationMillis;

  /**
   * @access public
   * @var string
   */
  public $streamingUrl;

  /**
   * @access public
   * @var boolean
   */
  public $readyToPlayOnTheWeb;

  /**
   * @access public
   * @var string
   */
  public $industryStandardCommercialIdentifier;

  /**
   * @access public
   * @var string
   */
  public $advertisingId;

  /**
   * @access public
   * @var string
   */
  public $youTubeVideoIdString;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($durationMillis = null, $streamingUrl = null, $readyToPlayOnTheWeb = null, $industryStandardCommercialIdentifier = null, $advertisingId = null, $youTubeVideoIdString = null, $mediaId = null, $type = null, $referenceId = null, $dimensions = null, $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null) {
    parent::__construct();
    $this->durationMillis = $durationMillis;
    $this->streamingUrl = $streamingUrl;
    $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
    $this->industryStandardCommercialIdentifier = $industryStandardCommercialIdentifier;
    $this->advertisingId = $advertisingId;
    $this->youTubeVideoIdString = $youTubeVideoIdString;
    $this->mediaId = $mediaId;
    $this->type = $type;
    $this->referenceId = $referenceId;
    $this->dimensions = $dimensions;
    $this->urls = $urls;
    $this->mimeType = $mimeType;
    $this->sourceUrl = $sourceUrl;
    $this->name = $name;
    $this->fileSize = $fileSize;
    $this->creationTime = $creationTime;
    $this->MediaType = $MediaType;
  }

}}

if (!class_exists("DynamicSearchAd", FALSE)) {
/**
 * Represents a dynamic search ad. This ad will have its headline and
 * destination URL auto-generated at serving time according to domain name
 * specific information provided by {@link DomainInfoExtension} linked at the
 * campaign level.
 * 
 * <p>Auto-generated fields: headline and destination URL (may contain an optional
 * tracking URL)</p>
 * 
 * <p>Required fields: description1, description2, displayUrl</p>
 * 
 * <p>The URL field must contain at least one of the following placeholder tags
 * (URL parameters): {unescapedlpurl}, {escapedlpurl}, {lpurlpath}. If no URL is
 * specified, {unescapedlpurl} will be used as default.</p>
 * 
 * <p>{unescapedlpurl} can only be used at the beginning of the URL field. It
 * will be replaced with the full landing page URL of the displayed ad. Extra query
 * parameters can be added to the end, e.g. "{unescapedlpurl}?lang=en".</p>
 * 
 * <p>{escapedlpurl} will be replaced with the URL-encoded version of the full
 * landing page URL. This makes it suitable for use as a query parameter
 * value (e.g. "http://www.3rdpartytracker.com/?lp={escapedlpurl}") but
 * not at the beginning of the url field.</p>
 * 
 * <p>{lpurlpath} will be replaced with the path and query part of the landing
 * page URL and can be added to a different URL, e.g.
 * "http://www.mygoodbusiness.com/tracking/{lpurlpath}".</p>
 * 
 * <p>There are also special rules that come into play depending on whether the
 * destination URL uses local click tracking or third-party click tracking.<p>
 * 
 * <p>For more information, see the article <a href="//support.google.com/adwords/bin/answer.py?answer=2549100">Using dynamic tracking URLs</a>.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DynamicSearchAd extends Ad {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DynamicSearchAd";

  /**
   * @access public
   * @var string
   */
  public $description1;

  /**
   * @access public
   * @var string
   */
  public $description2;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($description1 = null, $description2 = null, $id = null, $url = null, $displayUrl = null, $devicePreference = null, $AdType = null) {
    parent::__construct();
    $this->description1 = $description1;
    $this->description2 = $description2;
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }

}}

if (!class_exists("AdErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("AdGroupAdApprovalStatus", FALSE)) {
/**
 * Represents the possible approval statuses.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdApprovalStatus {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdGroupAd.ApprovalStatus";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("AdGroupAdStatus", FALSE)) {
/**
 * The current status of an Ad.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdStatus {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdGroupAd.Status";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("AdGroupAdErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdGroupAdError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("AdxErrorReason", FALSE)) {
/**
 * The reasons for the AdX error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdxErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdxError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("AuthenticationErrorReason", FALSE)) {
/**
 * The single reason for the authentication failure.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AuthenticationErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AuthenticationError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("AuthorizationErrorReason", FALSE)) {
/**
 * The reasons for the database error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AuthorizationErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AuthorizationError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("ClientTermsErrorReason", FALSE)) {
/**
 * Enums for the various reasons an error can be thrown as a result of
 * ClientTerms violation.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ClientTermsErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ClientTermsError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("DatabaseErrorReason", FALSE)) {
/**
 * The reasons for the database error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DatabaseErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DatabaseError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("DateErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DateErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DateError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("DeprecatedAdType", FALSE)) {
/**
 * Video ad.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DeprecatedAdType {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DeprecatedAd.Type";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("DistinctErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DistinctErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DistinctError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("EntityCountLimitExceededReason", FALSE)) {
/**
 * Limits at various levels of the account.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class EntityCountLimitExceededReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "EntityCountLimitExceeded.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("EntityNotFoundReason", FALSE)) {
/**
 * The specified id refered to an entity which either doesn't exist or is not accessible to the
 * customer. e.g. campaign belongs to another customer.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class EntityNotFoundReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "EntityNotFound.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("ExperimentDataStatus", FALSE)) {
/**
 * Status of the experimental change associated with an entity.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ExperimentDataStatus {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ExperimentDataStatus";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("ExperimentDeltaStatus", FALSE)) {
/**
 * Status of an entity denoting its type of experimental change in a campaign.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ExperimentDeltaStatus {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ExperimentDeltaStatus";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("ExperimentErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ExperimentErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ExperimentError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("ForwardCompatibilityErrorReason", FALSE)) {
/**
 * The reason for the error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ForwardCompatibilityErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ForwardCompatibilityError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("IdErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class IdErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "IdError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("ImageErrorReason", FALSE)) {
/**
 * The image is not valid.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ImageErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ImageError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("InternalApiErrorReason", FALSE)) {
/**
 * The single reason for the internal API error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class InternalApiErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "InternalApiError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("MarkupLanguageType", FALSE)) {
/**
 * Markup languages to use for mobile ads.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class MarkupLanguageType {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "MarkupLanguageType";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("MediaMediaType", FALSE)) {
/**
 * Media types
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class MediaMediaType {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Media.MediaType";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("MediaMimeType", FALSE)) {
/**
 * Mime types
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class MediaMimeType {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Media.MimeType";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("MediaSize", FALSE)) {
/**
 * Sizes for retrieving the original media
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class MediaSize {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Media.Size";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("MediaErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class MediaErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "MediaError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("NewEntityCreationErrorReason", FALSE)) {
/**
 * Do not set the id field while creating new entities.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class NewEntityCreationErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "NewEntityCreationError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("NotEmptyErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class NotEmptyErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "NotEmptyError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("NullErrorReason", FALSE)) {
/**
 * The reasons for the validation error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class NullErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "NullError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("OperationAccessDeniedReason", FALSE)) {
/**
 * The reasons for the operation access error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class OperationAccessDeniedReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "OperationAccessDenied.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("Operator", FALSE)) {
/**
 * This represents an operator that may be presented to an adsapi service.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Operator {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Operator";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("PagingErrorReason", FALSE)) {
/**
 * The reasons for errors when using pagination.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class PagingErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "PagingError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("PredicateOperator", FALSE)) {
/**
 * Defines the valid set of operators.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class PredicateOperator {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Predicate.Operator";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("QueryErrorReason", FALSE)) {
/**
 * The reason for the query error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class QueryErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "QueryError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("QuotaCheckErrorReason", FALSE)) {
/**
 * Enums for all the reasons an error can be thrown to the user during
 * billing quota checks.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class QuotaCheckErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "QuotaCheckError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("RangeErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RangeErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RangeError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("RateExceededErrorReason", FALSE)) {
/**
 * The reason for the rate exceeded error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RateExceededErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RateExceededError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("ReadOnlyErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ReadOnlyErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ReadOnlyError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("RejectedErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RejectedErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RejectedError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("RequestErrorReason", FALSE)) {
/**
 * Error reason is unknown.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RequestErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RequestError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("RequiredErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RequiredErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RequiredError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("RichMediaAdAdAttribute", FALSE)) {
/**
 * A set of attributes that describe the rich media ad capabilities.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RichMediaAdAdAttribute {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RichMediaAd.AdAttribute";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("RichMediaAdRichMediaAdType", FALSE)) {
/**
 * Different types of rich media ad that are available to customers.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RichMediaAdRichMediaAdType {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RichMediaAd.RichMediaAdType";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("SelectorErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SelectorErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "SelectorError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("SizeLimitErrorReason", FALSE)) {
/**
 * The reasons for Ad Scheduling errors.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SizeLimitErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "SizeLimitError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("SortOrder", FALSE)) {
/**
 * Possible orders of sorting.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SortOrder {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "SortOrder";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("StatsQueryErrorReason", FALSE)) {
/**
 * The reasons for errors when querying for stats.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class StatsQueryErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "StatsQueryError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("StringLengthErrorReason", FALSE)) {
/**
 * The reasons for the target error.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class StringLengthErrorReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "StringLengthError.Reason";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("TemplateElementFieldType", FALSE)) {
/**
 * Possible field types of template element fields.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class TemplateElementFieldType {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "TemplateElementField.Type";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("ThirdPartyRedirectAdExpandingDirection", FALSE)) {
/**
 * Allowed expanding directions for ads that are expandable.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ThirdPartyRedirectAdExpandingDirection {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ThirdPartyRedirectAd.ExpandingDirection";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("VideoType", FALSE)) {
/**
 * VideoType enum values that are permitted for video filterable
 * creative attribute IDs.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class VideoType {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "VideoType";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct() {
  }

}}

if (!class_exists("AdGroupAdServiceGet", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns a list of AdGroupAds.
 * Deleted AdGroupAds are not returned by default.
 * 
 * @param serviceSelector The selector specifying the {@link AdGroupAd}s to return.
 * @return The page containing the AdGroupAds that meet the criteria specified by the selector.
 * @throws ApiException when there is at least one error with the request.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdServiceGet {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var Selector
   */
  public $serviceSelector;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($serviceSelector = null) {
    $this->serviceSelector = $serviceSelector;
  }

}}

if (!class_exists("AdGroupAdServiceGetResponse", FALSE)) {
/**
 * 
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdServiceGetResponse {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdGroupAdPage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($rval = null) {
    $this->rval = $rval;
  }

}}

if (!class_exists("AdGroupAdServiceMutate", FALSE)) {
/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Applies the list of mutate operations (ie. add, set, remove):
 * <p>Add - Creates a new {@linkplain AdGroupAd ad group ad}. The
 * {@code adGroupId} must
 * reference an existing ad group. The child {@code Ad} must be sufficiently
 * specified by constructing a concrete ad type (such as {@code TextAd})
 * and setting its fields accordingly.</p>
 * <p>Set - Updates an ad group ad. Except for {@code status},
 * ad group ad fields are not mutable. Status updates are
 * straightforward - the status of the ad group ad is updated as
 * specified. If any other field has changed, it will be ignored. If
 * you want to change any of the fields other than status, you must
 * make a new ad and then delete the old one.</p>
 * <p>Remove - Removes the link between the specified AdGroup and
 * Ad.</p>
 * @param operations The operations to apply.
 * @return A list of AdGroupAds where each entry in the list is the result of
 * applying the operation in the input list with the same index. For an
 * add/set operation, the return AdGroupAd will be what is saved to the db.
 * In the case of the remove operation, the return AdGroupAd will simply be
 * an AdGroupAd containing an Ad with the id set to the Ad being deleted from
 * the AdGroup.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdServiceMutate {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdGroupAdOperation[]
   */
  public $operations;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($operations = null) {
    $this->operations = $operations;
  }

}}

if (!class_exists("AdGroupAdServiceMutateResponse", FALSE)) {
/**
 * 
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdServiceMutateResponse {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdGroupAdReturnValue
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($rval = null) {
    $this->rval = $rval;
  }

}}

if (!class_exists("Query", FALSE)) {
/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns a list of AdGroupAds based on the query.
 * 
 * @param query The SQL-like AWQL query string.
 * @return A list of AdGroupAds.
 * @throws ApiException if problems occur while parsing the query or fetching AdGroupAds.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Query {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var string
   */
  public $query;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($query = null) {
    $this->query = $query;
  }

}}

if (!class_exists("QueryResponse", FALSE)) {
/**
 * 
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class QueryResponse {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var AdGroupAdPage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($rval = null) {
    $this->rval = $rval;
  }

}}

if (!class_exists("AdError", FALSE)) {
/**
 * Base error class for Ad Service.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdError";

  /**
   * @access public
   * @var tnsAdErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("AdGroupAdCountLimitExceeded", FALSE)) {
/**
 * Indicates too many ads were added/enabled under the specified adgroup.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdCountLimitExceeded extends EntityCountLimitExceeded {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdGroupAdCountLimitExceeded";

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->enclosingId = $enclosingId;
    $this->limit = $limit;
    $this->accountLimitType = $accountLimitType;
    $this->existingCount = $existingCount;
  }

}}

if (!class_exists("AdGroupAdError", FALSE)) {
/**
 * Error information for AdGroupAdService.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdGroupAdError";

  /**
   * @access public
   * @var tnsAdGroupAdErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("AdGroupAdOperation", FALSE)) {
/**
 * AdGroupAd service operations.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdOperation extends Operation {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdGroupAdOperation";

  /**
   * @access public
   * @var AdGroupAd
   */
  public $operand;

  /**
   * @access public
   * @var ExemptionRequest[]
   */
  public $exemptionRequests;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($operand = null, $exemptionRequests = null, $operator = null, $OperationType = null) {
    parent::__construct();
    $this->operand = $operand;
    $this->exemptionRequests = $exemptionRequests;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }

}}

if (!class_exists("AdGroupAdPage", FALSE)) {
/**
 * Represents a page of {@link AdGroupAd}s resulting from the query done by
 * {@link AdGroupAdService}.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdPage extends Page {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdGroupAdPage";

  /**
   * @access public
   * @var AdGroupAd[]
   */
  public $entries;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($entries = null, $totalNumEntries = null, $PageType = null) {
    parent::__construct();
    $this->entries = $entries;
    $this->totalNumEntries = $totalNumEntries;
    $this->PageType = $PageType;
  }

}}

if (!class_exists("AdGroupAdReturnValue", FALSE)) {
/**
 * A container for return values from the AdGroupAdService.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdReturnValue extends ListReturnValue {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdGroupAdReturnValue";

  /**
   * @access public
   * @var AdGroupAd[]
   */
  public $value;

  /**
   * @access public
   * @var ApiError[]
   */
  public $partialFailureErrors;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($value = null, $partialFailureErrors = null, $ListReturnValueType = null) {
    parent::__construct();
    $this->value = $value;
    $this->partialFailureErrors = $partialFailureErrors;
    $this->ListReturnValueType = $ListReturnValueType;
  }

}}

if (!class_exists("AdxError", FALSE)) {
/**
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdxError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdxError";

  /**
   * @access public
   * @var tnsAdxErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }

}}

if (!class_exists("ApiException", FALSE)) {
/**
 * Exception class for holding a list of service errors.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ApiException extends ApplicationException {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ApiException";

  /**
   * @access public
   * @var ApiError[]
   */
  public $errors;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($errors = null, $message = null, $ApplicationExceptionType = null) {
    parent::__construct();
    $this->errors = $errors;
    $this->message = $message;
    $this->ApplicationExceptionType = $ApplicationExceptionType;
  }

}}

if (!class_exists("Audio", FALSE)) {
/**
 * Encapsulates an Audio media identified by a MediaId.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Audio extends Media {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Audio";

  /**
   * @access public
   * @var integer
   */
  public $durationMillis;

  /**
   * @access public
   * @var string
   */
  public $streamingUrl;

  /**
   * @access public
   * @var boolean
   */
  public $readyToPlayOnTheWeb;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($durationMillis = null, $streamingUrl = null, $readyToPlayOnTheWeb = null, $mediaId = null, $type = null, $referenceId = null, $dimensions = null, $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null) {
    parent::__construct();
    $this->durationMillis = $durationMillis;
    $this->streamingUrl = $streamingUrl;
    $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
    $this->mediaId = $mediaId;
    $this->type = $type;
    $this->referenceId = $referenceId;
    $this->dimensions = $dimensions;
    $this->urls = $urls;
    $this->mimeType = $mimeType;
    $this->sourceUrl = $sourceUrl;
    $this->name = $name;
    $this->fileSize = $fileSize;
    $this->creationTime = $creationTime;
    $this->MediaType = $MediaType;
  }

}}

if (!class_exists("Image", FALSE)) {
/**
 * Encapsulates an Image media. For {@code SET},{@code REMOVE} operations in
 * MediaService, use {@code mediaId}.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Image extends Media {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Image";

  /**
   * @access public
   * @var base64Binary
   */
  public $data;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($data = null, $mediaId = null, $type = null, $referenceId = null, $dimensions = null, $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null) {
    parent::__construct();
    $this->data = $data;
    $this->mediaId = $mediaId;
    $this->type = $type;
    $this->referenceId = $referenceId;
    $this->dimensions = $dimensions;
    $this->urls = $urls;
    $this->mimeType = $mimeType;
    $this->sourceUrl = $sourceUrl;
    $this->name = $name;
    $this->fileSize = $fileSize;
    $this->creationTime = $creationTime;
    $this->MediaType = $MediaType;
  }

}}

if (!class_exists("AdGroupAdService", FALSE)) {
/**
 * AdGroupAdService
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdService extends AdWordsSoapClient {

  const SERVICE_NAME = "AdGroupAdService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201402/AdGroupAdService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201402/AdGroupAdService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "Ad" => "Ad",
    "AdError" => "AdError",
    "AdGroupAd" => "AdGroupAd",
    "AdGroupAdCountLimitExceeded" => "AdGroupAdCountLimitExceeded",
    "AdGroupAdError" => "AdGroupAdError",
    "AdGroupAdExperimentData" => "AdGroupAdExperimentData",
    "AdGroupAdOperation" => "AdGroupAdOperation",
    "AdGroupAdPage" => "AdGroupAdPage",
    "AdGroupAdReturnValue" => "AdGroupAdReturnValue",
    "AdUnionId" => "AdUnionId",
    "AdxError" => "AdxError",
    "ApiError" => "ApiError",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "Audio" => "Audio",
    "AuthenticationError" => "AuthenticationError",
    "AuthorizationError" => "AuthorizationError",
    "ClientTermsError" => "ClientTermsError",
    "DatabaseError" => "DatabaseError",
    "DateError" => "DateError",
    "DateRange" => "DateRange",
    "DeprecatedAd" => "DeprecatedAd",
    "Dimensions" => "Dimensions",
    "DistinctError" => "DistinctError",
    "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
    "EntityNotFound" => "EntityNotFound",
    "ExemptionRequest" => "ExemptionRequest",
    "ExperimentError" => "ExperimentError",
    "ForwardCompatibilityError" => "ForwardCompatibilityError",
    "IdError" => "IdError",
    "Image" => "Image",
    "ImageAd" => "ImageAd",
    "ImageError" => "ImageError",
    "InternalApiError" => "InternalApiError",
    "ListReturnValue" => "ListReturnValue",
    "Media" => "Media",
    "MediaError" => "MediaError",
    "Media_Size_DimensionsMapEntry" => "Media_Size_DimensionsMapEntry",
    "Media_Size_StringMapEntry" => "Media_Size_StringMapEntry",
    "MobileAd" => "MobileAd",
    "MobileImageAd" => "MobileImageAd",
    "NewEntityCreationError" => "NewEntityCreationError",
    "NotEmptyError" => "NotEmptyError",
    "NullError" => "NullError",
    "Operation" => "Operation",
    "OperationAccessDenied" => "OperationAccessDenied",
    "OrderBy" => "OrderBy",
    "Page" => "Page",
    "Paging" => "Paging",
    "PagingError" => "PagingError",
    "PolicyViolationError" => "PolicyViolationError",
    "PolicyViolationError.Part" => "PolicyViolationErrorPart",
    "PolicyViolationKey" => "PolicyViolationKey",
    "Predicate" => "Predicate",
    "ProductAd" => "ProductAd",
    "QueryError" => "QueryError",
    "QuotaCheckError" => "QuotaCheckError",
    "RangeError" => "RangeError",
    "RateExceededError" => "RateExceededError",
    "ReadOnlyError" => "ReadOnlyError",
    "RejectedError" => "RejectedError",
    "RequestError" => "RequestError",
    "RequiredError" => "RequiredError",
    "RichMediaAd" => "RichMediaAd",
    "Selector" => "Selector",
    "SelectorError" => "SelectorError",
    "SizeLimitError" => "SizeLimitError",
    "SoapHeader" => "SoapRequestHeader",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StatsQueryError" => "StatsQueryError",
    "StringLengthError" => "StringLengthError",
    "String_StringMapEntry" => "String_StringMapEntry",
    "TempAdUnionId" => "TempAdUnionId",
    "TemplateAd" => "TemplateAd",
    "TemplateElement" => "TemplateElement",
    "TemplateElementField" => "TemplateElementField",
    "TextAd" => "TextAd",
    "ThirdPartyRedirectAd" => "ThirdPartyRedirectAd",
    "Video" => "Video",
    "DynamicSearchAd" => "DynamicSearchAd",
    "AdError.Reason" => "AdErrorReason",
    "AdGroupAd.ApprovalStatus" => "AdGroupAdApprovalStatus",
    "AdGroupAd.Status" => "AdGroupAdStatus",
    "AdGroupAdError.Reason" => "AdGroupAdErrorReason",
    "AdxError.Reason" => "AdxErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DateError.Reason" => "DateErrorReason",
    "DeprecatedAd.Type" => "DeprecatedAdType",
    "DistinctError.Reason" => "DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
    "EntityNotFound.Reason" => "EntityNotFoundReason",
    "ExperimentDataStatus" => "ExperimentDataStatus",
    "ExperimentDeltaStatus" => "ExperimentDeltaStatus",
    "ExperimentError.Reason" => "ExperimentErrorReason",
    "ForwardCompatibilityError.Reason" => "ForwardCompatibilityErrorReason",
    "IdError.Reason" => "IdErrorReason",
    "ImageError.Reason" => "ImageErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "MarkupLanguageType" => "MarkupLanguageType",
    "Media.MediaType" => "MediaMediaType",
    "Media.MimeType" => "MediaMimeType",
    "Media.Size" => "MediaSize",
    "MediaError.Reason" => "MediaErrorReason",
    "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
    "Operator" => "Operator",
    "PagingError.Reason" => "PagingErrorReason",
    "Predicate.Operator" => "PredicateOperator",
    "QueryError.Reason" => "QueryErrorReason",
    "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RateExceededError.Reason" => "RateExceededErrorReason",
    "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
    "RejectedError.Reason" => "RejectedErrorReason",
    "RequestError.Reason" => "RequestErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "RichMediaAd.AdAttribute" => "RichMediaAdAdAttribute",
    "RichMediaAd.RichMediaAdType" => "RichMediaAdRichMediaAdType",
    "SelectorError.Reason" => "SelectorErrorReason",
    "SizeLimitError.Reason" => "SizeLimitErrorReason",
    "SortOrder" => "SortOrder",
    "StatsQueryError.Reason" => "StatsQueryErrorReason",
    "StringLengthError.Reason" => "StringLengthErrorReason",
    "TemplateElementField.Type" => "TemplateElementFieldType",
    "ThirdPartyRedirectAd.ExpandingDirection" => "ThirdPartyRedirectAdExpandingDirection",
    "VideoType" => "VideoType",
    "get" => "AdGroupAdServiceGet",
    "getResponse" => "AdGroupAdServiceGetResponse",
    "mutate" => "AdGroupAdServiceMutate",
    "mutateResponse" => "AdGroupAdServiceMutateResponse",
    "query" => "Query",
    "queryResponse" => "QueryResponse",
  );


  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = self::$classmap;
    parent::__construct($wsdl, $options, $user, self::SERVICE_NAME,
        self::WSDL_NAMESPACE);
  }
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of AdGroupAds.
   * Deleted AdGroupAds are not returned by default.
   * 
   * @param serviceSelector The selector specifying the {@link AdGroupAd}s to return.
   * @return The page containing the AdGroupAds that meet the criteria specified by the selector.
   * @throws ApiException when there is at least one error with the request.
   */
  public function get($serviceSelector) {
    $args = new AdGroupAdServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($args));
    return $result->rval;
  }
  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Applies the list of mutate operations (ie. add, set, remove):
   * <p>Add - Creates a new {@linkplain AdGroupAd ad group ad}. The
   * {@code adGroupId} must
   * reference an existing ad group. The child {@code Ad} must be sufficiently
   * specified by constructing a concrete ad type (such as {@code TextAd})
   * and setting its fields accordingly.</p>
   * <p>Set - Updates an ad group ad. Except for {@code status},
   * ad group ad fields are not mutable. Status updates are
   * straightforward - the status of the ad group ad is updated as
   * specified. If any other field has changed, it will be ignored. If
   * you want to change any of the fields other than status, you must
   * make a new ad and then delete the old one.</p>
   * <p>Remove - Removes the link between the specified AdGroup and
   * Ad.</p>
   * @param operations The operations to apply.
   * @return A list of AdGroupAds where each entry in the list is the result of
   * applying the operation in the input list with the same index. For an
   * add/set operation, the return AdGroupAd will be what is saved to the db.
   * In the case of the remove operation, the return AdGroupAd will simply be
   * an AdGroupAd containing an Ad with the id set to the Ad being deleted from
   * the AdGroup.
   */
  public function mutate($operations) {
    $args = new AdGroupAdServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($args));
    return $result->rval;
  }
  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of AdGroupAds based on the query.
   * 
   * @param query The SQL-like AWQL query string.
   * @return A list of AdGroupAds.
   * @throws ApiException if problems occur while parsing the query or fetching AdGroupAds.
   */
  public function query($query) {
    $args = new Query($query);
    $result = $this->__soapCall("query", array($args));
    return $result->rval;
  }
}}