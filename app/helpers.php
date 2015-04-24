<?php
/**
 * @param array $routes
 * @param string $active
 * @return string|void
 */
function set_active(array $routes, $active = 'active')
{
	foreach ($routes as $route)
	{
		if (Route::is($route)) return $active;
	}

	return;
}