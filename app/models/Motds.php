<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Motds extends Eloquent
{
    /*
    *
    * A model for holding Messages of the Day.
    * a system for the team to communicate with
    * the users
    *
    * possible database Structure
    *
    * motdid (int) 		- P_K A_I
    * subject (varchar)
    * body (text?)
    * from (id)			- acctid of the person writing the motd or 
	*						always display from Team or sth like that
    */
}