<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Mails extends Eloquent
{
	protected $timestamps = ['created_at'];
	protected $fillable = ['from', 'to', 'subject', 'body'];
	
	public function __construct($user)
	{
		$id = $user->acctid;
		
		/*
		 * Once database is in place, think of a way of retrieving it?
		 * Current idea is, get everyone who is in correspondence with
		 * the user $user and create Naviagtional links for it and if
		 * you click on it, all messages will be loaded, somewhat
		 * simliar to what WhatsApp might look like.
		 * 
		 * Will it be easier to have a seperate class for
		 * conversations and a conversation consists of an id
		 * and a list/array of participants
		 * and the messages know what conversation they are part of
		 * and who sent it
		 * 
		 * or should I have a system like the basic logd uses
		 * for now? Every message knows who it was sent from and
		 * who it is sent to? The Option with the conversations opens up
		 * easy to use group conversations if that is something I 
		 * want to have further down the road
		 */
	}
}
