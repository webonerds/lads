<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate_old()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
	public function authenticate()
	{
	
	if(!empty($this->username) && !empty($this->password))
	{	
	$users=array(
			
			'admin'=>'admin',
		);
			$user=Users::model()->findByAttributes(array('username'=>$this->username,'password'=>$this->password));
			
				if(!isset($user->username))
					$this->errorCode=self::ERROR_USERNAME_INVALID;
				elseif($user->password!==$this->password)
					$this->errorCode=self::ERROR_PASSWORD_INVALID;
				else
				{
					$this->errorCode=self::ERROR_NONE;
					$this->setState('username',$user->username);
					$this->setState('user_id',$user->user_id);
					$this->setState('role',$user->user_type);
					
				}
				return !$this->errorCode;
				}
	}
}