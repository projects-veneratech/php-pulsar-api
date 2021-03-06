<?php
/**
 * Jobdata
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Pulsar API
 *
 * QC your content in AWS Cloud S3 with Pulsar Cloud Service# API
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Jobdata Class Doc Comment
 *
 * @category    Class
 * @description parameters defined as object for CreateJob body
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Jobdata implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Jobdata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'file_path' => 'string',
        'template_name' => 'string',
        'template_type' => 'int',
        'job_type' => 'int',
        'access_key_id' => 'string',
        'access_key_secret' => 'string',
        'user_note' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'file_path' => 'file_path',
        'template_name' => 'template_name',
        'template_type' => 'template_type',
        'job_type' => 'job_type',
        'access_key_id' => 'access-key-ID',
        'access_key_secret' => 'access-key-SECRET',
        'user_note' => 'user_note'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'file_path' => 'setFilePath',
        'template_name' => 'setTemplateName',
        'template_type' => 'setTemplateType',
        'job_type' => 'setJobType',
        'access_key_id' => 'setAccessKeyId',
        'access_key_secret' => 'setAccessKeySecret',
        'user_note' => 'setUserNote'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'file_path' => 'getFilePath',
        'template_name' => 'getTemplateName',
        'template_type' => 'getTemplateType',
        'job_type' => 'getJobType',
        'access_key_id' => 'getAccessKeyId',
        'access_key_secret' => 'getAccessKeySecret',
        'user_note' => 'getUserNote'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['file_path'] = isset($data['file_path']) ? $data['file_path'] : null;
        $this->container['template_name'] = isset($data['template_name']) ? $data['template_name'] : null;
        $this->container['template_type'] = isset($data['template_type']) ? $data['template_type'] : null;
        $this->container['job_type'] = isset($data['job_type']) ? $data['job_type'] : null;
        $this->container['access_key_id'] = isset($data['access_key_id']) ? $data['access_key_id'] : null;
        $this->container['access_key_secret'] = isset($data['access_key_secret']) ? $data['access_key_secret'] : null;
        $this->container['user_note'] = isset($data['user_note']) ? $data['user_note'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['file_path'] === null) {
            $invalid_properties[] = "'file_path' can't be null";
        }
        if ($this->container['template_name'] === null) {
            $invalid_properties[] = "'template_name' can't be null";
        }
        if ($this->container['template_type'] === null) {
            $invalid_properties[] = "'template_type' can't be null";
        }
        if ($this->container['job_type'] === null) {
            $invalid_properties[] = "'job_type' can't be null";
        }
        if ($this->container['access_key_id'] === null) {
            $invalid_properties[] = "'access_key_id' can't be null";
        }
        if ($this->container['access_key_secret'] === null) {
            $invalid_properties[] = "'access_key_secret' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['file_path'] === null) {
            return false;
        }
        if ($this->container['template_name'] === null) {
            return false;
        }
        if ($this->container['template_type'] === null) {
            return false;
        }
        if ($this->container['job_type'] === null) {
            return false;
        }
        if ($this->container['access_key_id'] === null) {
            return false;
        }
        if ($this->container['access_key_secret'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets file_path
     * @return string
     */
    public function getFilePath()
    {
        return $this->container['file_path'];
    }

    /**
     * Sets file_path
     * @param string $file_path
     * @return $this
     */
    public function setFilePath($file_path)
    {
        $this->container['file_path'] = $file_path;

        return $this;
    }

    /**
     * Gets template_name
     * @return string
     */
    public function getTemplateName()
    {
        return $this->container['template_name'];
    }

    /**
     * Sets template_name
     * @param string $template_name
     * @return $this
     */
    public function setTemplateName($template_name)
    {
        $this->container['template_name'] = $template_name;

        return $this;
    }

    /**
     * Gets template_type
     * @return int
     */
    public function getTemplateType()
    {
        return $this->container['template_type'];
    }

    /**
     * Sets template_type
     * @param int $template_type
     * @return $this
     */
    public function setTemplateType($template_type)
    {
        $this->container['template_type'] = $template_type;

        return $this;
    }

    /**
     * Gets job_type
     * @return int
     */
    public function getJobType()
    {
        return $this->container['job_type'];
    }

    /**
     * Sets job_type
     * @param int $job_type
     * @return $this
     */
    public function setJobType($job_type)
    {
        $this->container['job_type'] = $job_type;

        return $this;
    }

    /**
     * Gets access_key_id
     * @return string
     */
    public function getAccessKeyId()
    {
        return $this->container['access_key_id'];
    }

    /**
     * Sets access_key_id
     * @param string $access_key_id
     * @return $this
     */
    public function setAccessKeyId($access_key_id)
    {
        $this->container['access_key_id'] = $access_key_id;

        return $this;
    }

    /**
     * Gets access_key_secret
     * @return string
     */
    public function getAccessKeySecret()
    {
        return $this->container['access_key_secret'];
    }

    /**
     * Sets access_key_secret
     * @param string $access_key_secret
     * @return $this
     */
    public function setAccessKeySecret($access_key_secret)
    {
        $this->container['access_key_secret'] = $access_key_secret;

        return $this;
    }

    /**
     * Gets user_note
     * @return string
     */
    public function getUserNote()
    {
        return $this->container['user_note'];
    }

    /**
     * Sets user_note
     * @param string $user_note
     * @return $this
     */
    public function setUserNote($user_note)
    {
        $this->container['user_note'] = $user_note;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
