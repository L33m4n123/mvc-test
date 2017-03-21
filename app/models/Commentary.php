<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Commentary extends Eloquent
{
	/**
	 * 
	 * The model to hold and represent information about the comments.
	 * Comments are a major part of the logd as it is a text based
	 * roleplayinggame where users can interact with each other
	 * using comments.
	 * 
	 * A possible structure of the database can look like so
	 * 
	 * commentid (int)		- Primary Key - AutoIncrement
	 * author (int)			- Acctid of the User that wrote it
	 * section (varchar)	- section where the comment was posted (for
	 * 							displaying purposes
	 * comment (text)		- the comment itself
	 * emote (enum|tinyint) - information of what emote was used. Later 
	 * 							more about the emotes itself
	 * 
	 */ 
}
