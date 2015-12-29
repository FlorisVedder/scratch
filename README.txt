A simple theme template for drupal 7
In first case made for my own use but if you like you may you is it.
In this small readme you find a short explanation of the theme and it's goal.


Includes:
- IE fix
- Mobile first responsiveness including layout.js fix
- Css approach for styling according container (regions) and elements.

Goals of this theme:
- A simple and easy to work with starter for custom theming.
- Keeping the css as simple as possible
- Easy and correct adjusting of styling by conscious use of the correct css selectors.

Where do i put my CSS??:
Below some recommendation or guidelines about where you can put your css. But in the end it's just
plain css that you can use the way you want. So use the parts that fits you and don't bother
about the rest.

In most cases it's best to use a container (region) to define styling for certain elements.
For example a styling for "a:hover" in region "#header" is applied to the menu and breadcrumb
in the header as well. So in this case use the "#header a:hover" selector in stead of ".breadcrumb a:hover".
When you move the breadcrumb over to the "#main" region the "a:hover" there is automaticaly styled according the
"#main a:hover" styling.

In some cases the styling is meant to be element specific. For example for a call to action button.
In that case use a specific selector like: "span#myspecificelement". When you move the button to another container
(region) the styling of the button should in this case stay the same.

Some selectors shouldn't be styled as a very specif element selector but neather according their region.
For example an "img" in a block could have an other style than an "img" in a node. While on the other hand
you want all the nodes to have the same image styling regardless of their content type. In that case you
are also styling by a container but you're not using a region as the container. In this example the .node
should be the best container to use so ".node image" could be a good selector for this.

The css files in the scratch theme are base on some common drupal elements:
regions, views, nodes and fields
This is only done for human readability and structure. It's still plain old css and up to you to use good
selectors and place them (for case of readability) in the good file. On a production site it's recommended to enable
the css and js aggregating so the multiple css files are not slowing down the site.


