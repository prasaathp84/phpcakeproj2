


<?php

//echo $this->Url->build("/Tests/show");


echo $this->Form->create(NULL,array('action'=> preg_replace ('/User\/*/i', 'User',$this->request->getEnv('REQUEST_URI')). '/register','method'=>'POST'));
echo '<label for="country">Country</label>';
echo $this->Form->select('country',$country);
echo '<label for="gender">Gender</label>';
echo $this->Form->radio('gender',$gender);
echo '<label for="address">Address</label>';


echo $this->Form->button('Submit');
echo $this->Form->end();



