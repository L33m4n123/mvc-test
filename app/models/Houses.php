<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Houses extends Eloquent
{
	/*
	 * A model to represent the houses.
	 * Houses are private places where users have full control
	 * over who has access to it, what are the description
	 * of the rooms and can log out safely in them and store their
	 * treasures in it.
	 * If they log out in the fields there is a chance that they
	 * will be robbed until they get online
	 * 
	 * Possible structure of the database
	 * 
	 * housenumber (int)	- Primary Key A_I
	 * housename (varchar)	- name of the house to show in the list
	 * location (tinyint)	- where does the house stand? Have the
	 * 							script determin what number stands for
	 * 							what location
	 * housedesc (varchar)	- description of the house
	 */
}
