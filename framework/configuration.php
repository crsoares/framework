<?php

namespace Framework
{
    use Framework\Base;
    use Framework\Configuration;
    use Framework\Configuration\Exception;
    
    class Configuration extends Base
    {
        /**
         * @readwrite
         */
        protected $_type;
        
        /**
         * @readwrite
         */
        protected $_options;
        
        protected function _getExceptionForImplementation($method)
        {
            return new Exception\Implementation("{$method} m�todo n�o implementado");
        }
        
        public function initialize()
        {
            if(!$this->type) {
                throw new Exception\Argument("tipo inv�lido");
            }
            
            switch($this->type) {
                case "ini":
                {
                    return new Configuration\Deiver\Ini($this->options);
                    break;
                }
                default:
                {
                    throw new Exception\Argument("tipo inv�lido");
                    break;
                }
            }
        }
    }
}
