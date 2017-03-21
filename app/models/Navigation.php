<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Navigation extends Eloquent
{
	/*
	*
	* a model to represent the navigation for every page
	* to keep it dynamic and keep it out of the files
	*
	* possible database structure
	* id (int) 				- P_K; A_I
	* name (varchar)		- name of the navigation
	* parent (varchar)		- what link-id it is ordered underneath
	* location (varchar)	- where it links to
	* order (int)			- How it should be ordered
	*							if same order, order it ascending by name
	*
	*	header - order 0
	*		- link - order 0
	*		- link - order 1
	*		- link - order 2
	*		- header - order 0
	*		- header - order 1
	*			- link - order 3
	*			- link - order 4
	*	header - order 1
	*		- link - order 0
	*		- link - order 1
	*		- link - order 2
	*		- link - order 3
	*	header - order 2
	*		- link - order 0
	*/

	protected $timestamps = [];
	protected $fillable = ['name', 'parent', 'location', 'order'];

	public function __construct(string $name, int $parent, string $location, int $order)
	{
		$this->createLink($name, $parent, $location, $order);
	}

	// Creates the link if it doesn't exist yet
	protected function createLink(string $name, int $parent, string $location, int $order)
	{
		if (Navigation::where('name', $name)->where('parent', $parent)
			->where('location', $location)->count() == 0)
		{
			Navigation::create([
				'name' => $name,
				'parent' => $parent,
				'location' => $location,
				'order' => $order
				]);
		}
	}

	// Updates the link with given changes; no change in Database if nothing changed tho
	public function updateLink(string $name = '', int $parent = -5, string $location = '*', int $order = -1)
	{
		$changed = false;
		if ($name != '')
		{
			$this->name = filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
			$changed = true;
		}

		// parent = -1 => no parent
		// parent = -5 => unchanged
		if ($parent != -5)
		{
			$this->parent = $parent
			$changed = true;
		}

		// location = * => unchanged
		// location should be a full routing for the controllers.
		// location = '' => no location thus its a header
		if ($location != '')
		{
			$this->location = $location;
			$changed = true;
		}

		if ($order != -1)
		{
			$this->order = $order;
			$changed = true;
		}

		if ($changed)
			$this->save();
	}

	// Wrapper function to get the Navigation for a given location
	public static function getNavigation (string $location): array
	{
		return Navigation::where('location', $location)->orderBy('order', ASC)->orderBy('name', ASC)->get();
	}

}
