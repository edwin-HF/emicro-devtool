<?php


namespace EMicro;


class Application
{

    /**
     * @return $this
     */
    public static function getInstance(){}

    /**
     * @param string $annotationDir
     */
    public function annotationNamespace($annotationDir){}

    /**
     * @param string $dispatcherDir
     */
    public function dispatcherNamespace($dispatcherDir){}

    public function run(){}

    /**
     * @return string
     */
    public function getAppPath(){}

}