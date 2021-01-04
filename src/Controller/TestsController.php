<?php
declare(strict_types=1);
namespace App\Controller;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
class TestsController extends AppController {
   public function show($name, $age)
   {
        $this->set('name',$name);
        $this->set('age',$age);
   }
   
   public function testshop()
   {
         // $this->setAction('show',10,20);
   }
   
   
   public function BuyItem()
   {
       
   }
   
   public function BuyTest()
   {
       
   }
   
}
