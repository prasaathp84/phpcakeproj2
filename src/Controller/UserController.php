<?php
declare(strict_types=1);
namespace App\Controller;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
class UserController extends AppController {
    public function registration()
    {
        
        
         $country = array('India','United State of America','United Kingdom');
         $this->set('country',$country);
         $gender = array('Male','Female');
         $this->set('gender',$gender);
         return $this->render('/User/registration', "samplelayout");
    }
    
    public function register()
    {
        
         $body = parent::getRequest()->getParsedBody();
         $this->set('Country',$body['country']);
         $this->set('Gender',$body['gender']);
        return $this -> render('/Tests/testshop');
    }
    
    public function Home()
    {
        
    }
}