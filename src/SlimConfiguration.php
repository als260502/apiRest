<?php
namespace Src;

use Slim\Container;


class SlimConfiguration
{
    
   private $configuration;
   
   public function __construct() {

   }
    
   public function SlimConfiguration() : Container {
        
       $configuration = [
            'settings'=>[
                'displayErrorDetails' => getenv('DISPLAY_ERRORS_DETAILS'),
            ]
            
        ];
        
        $this->configuration =  new Container($configuration);
        return $this->configuration;
    }
    

    
}

