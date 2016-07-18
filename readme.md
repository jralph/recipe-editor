Currently spent around an hour working on the recipe editor.

Updated database table structure slightly. Created 

## Installation

**Requires Composer**

1. Download the repository.
2. Run `composer install` within the downloaded repository root.
3. Run the included migrations `php artisan migrate`

Access the recipe editor by browsing to /admin.

Given more time, these are some of the following additions I would make:

- Input validation for forms (recipes and ingredients)
- JavaScript ability to add multiple ingredients to each recipe and their associated measurements and quantities.
- Saving of recipes once above is complete.
- Markdown for the writing of recpies and descriptions.
- Bundle creation.
- Listing all current recipes on the dashboard page.
- Browsing to a recipe.
- Editing a recipe and its associated bundles/ingredients.
- Add status messages when new recipes and ingredients are added.
- Add confirmation messages when ingredients and recipes are deleted.