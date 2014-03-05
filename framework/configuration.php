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
            return new Exception\Implementation("{$method} metodo nao implementado");
        }
        
        public function initialize()
        {
            if(!$this->type) {
                throw new Exception\Argument("tipo inválido");
            }
            
            switch($this->type) {
                case "ini":
                {
                    return new Configuration\Driver\Ini($this->options);
                    break;
                }
                default:
                {
                    throw new Exception\Argument("tipo inválido");
                    break;
                }
            }
        }
    }
}
