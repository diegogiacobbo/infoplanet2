<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Resource;

/**
 * FileResource represents a resource stored on the filesystem.
 *
 * The resource can be a file or a directory.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileResource implements ResourceInterface, \Serializable
{
    private $resource;

    /**
     * Constructor.
     *
     * @param string $resource The file path to the resource
     */
    public function __construct($resource)
    {
        $this->resource = realpath($resource);
    }

    /**
     * Returns a string representation of the Resource.
     *
     * @return string A string representation of the Resource
     */
    public function __toString()
    {
        return (string) $this->resource;
    }

    /**
     * Returns the resource tied to this Resource.
     *
     * @return mixed The resource
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Returns true if the resource has not been updated since the given timestamp.
     *
     * @param integer $timestamp The last time the resource was loaded
     *
     * @return Boolean true if the resource has not been updated, false otherwise
     */
    public function isFresh($timestamp)
    {
    // @todo última alteração para não buscar templae do cache - 25082013
//        if($_SERVER['SERVER_ADDR'] == "127.0.0.1"){
//            //nada
//        }else if($_SERVER['SERVER_ADDR'] == "174.132.156.93"){           
//                $pos = strpos($this->resource, "mercadoSabores");
//                $this->resource = "/home/diego/public_html/ms2013".substr($this->resource, $pos+14);
//        }else{
//                $pos = strpos($this->resource, "mercadoSabores");
//                $this->resource = "/home/mercadodesabores/www/2013".substr($this->resource, $pos+14);
//        }

        if (!file_exists($this->resource)) {
            return false;
        }

        return filemtime($this->resource) < $timestamp;
    }

    public function serialize()
    {
        return serialize($this->resource);
    }

    public function unserialize($serialized)
    {
        $this->resource = unserialize($serialized);
    }
}
