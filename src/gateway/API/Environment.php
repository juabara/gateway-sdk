<?php
    /**
     * Created by PhpStorm.
     * User: brunopaz
     * Date: 2018-12-28
     * Time: 01:27
     */

    namespace Gateway\API;


    /**
     * Class Environment
     *
     * @package Gateway\API
     */
    abstract class Environment
    {
        /**
         *
         */
        const SANDBOX = "SANDBOX";
        /**
         *
         */
        const PRODUCTION = "PRODUCTION";

        /**
         *
         */
        const SANDBOX_URL = "http://kesterpay-382608800.sa-east-1.elb.amazonaws.com:8001";
        /**
         *
         */
        const PRODUCTION_URL = "http://kesterpay-382608800.sa-east-1.elb.amazonaws.com:8011";

        /**
         * @return string
         */
        public static function getSandboxUrl()
        {
            return self::SANDBOX_URL;
        }

        /**
         * @return string
         */
        public static function getProductionUrl()
        {
            return self::PRODUCTION_URL;
        }

    }
