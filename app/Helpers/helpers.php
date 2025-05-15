<?php

/**
 * Set active menu
 *
 * @param array $routes
 * @return void
 */
function setActiveMenu(array $routes)
{
    // Check if the input is an array
    if (is_array($routes)) {
        // Loop through each route
        foreach ($routes as $route) {
            // Check if the current request route matches the provided route
            if (request()->routeIs($route)) {
                // Return 'active' if the route matches
                return 'active';
            }
        }
    }
}
