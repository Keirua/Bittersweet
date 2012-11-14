# Bittersweet

Bittersweet is a recipe crawling engine. If you are interested in a recipe that you have found, but wanna get rid of the other useless information in the page, you can use this tool.

It extracts a few information based on the recipe's URL :

- Recipe name 
- Ingredients required (and the corresponding number of persons)
- Instructions
If they are available, it also tries to extract the preparation and cooking time

Since every website display the information differently, not all websites are supported.

# Usage

Bittersweet getRecipe method returns a Recipe based on a recipe URL. It works as follow : 

	include_once 'Bittersweet/Bittersweet.php';
	$bitterSweet = new Bittersweet();
	$recette = $bitterSweet->getRecipe($r);
	print_r($recette);

Various getters and setters in the Recipe class will help you use the data afterwards

# Supported websites

The supported websites are the following (french websites, sorry !) :
- CuisineAZ.com
- 750g.com
- Cuisine.JournalDesFemmes
- Marmiton.org

Of course, since this tool analyzes the data contained in the source code, if the aforementionned websites come to change their page structure, further developments will have to be made in order to support the new page structure.

At the moment, Marmiton's crawler is not yet fully supported, yet the other 2 should behave as expected.

# Extending the framework

Extending the framework in order to add support for other websites is very easy : 

- Create a new Crawler class in the Bittersweet/Crawlers directory
- Make it inherit from AbstractRecipeCrawler
- Implement the crawl($url) method. Look at how it's done in other crawling
- Register the new crawling engine in Bittersweet's constructor

Done !

# External librairies

This tool is based on Goutte, a PHP crawling engine.

# License

Keep in mind that the recipes that you might extract with this tool belong to their authors and/or to the websites they are hosted on.